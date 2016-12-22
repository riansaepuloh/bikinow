<?php 
include "config/connection.php";

$username = isset($_POST['username']) ? $_POST['username']:"";
$email = isset($_POST['email']) ? $_POST['email']:"";
$kd_kategori = isset($_POST['kd_kategori']) ? $_POST['kd_kategori']:"";
$location = isset($_POST['location']) ? $_POST['location']:"";
$password = isset($_POST['password']) ? $_POST['password']:"";
$confrim_pass = isset($_POST['confrim_pass']) ? $_POST['confrim_pass']:"";

if ($password != $confrim_pass) {
	?>
	<script type="text/javascript">
	alert("Password Tidak Sama, mohon daftar kembali !<?php echo $password,$confrim_pass ?>");
	document.location='index.php';
	</script>
	<?php
} else {
if ($kd_kategori =="") {
	$level_akses = "customer";
	$query = mysqli_query($koneksi,"INSERT INTO `t_akun`(`username`,`password`,`level_akses`)
												VALUES ('$username','$password','$level_akses');");
	$query1 = mysqli_query($koneksi,"INSERT INTO `t_customer`(`email`,`kd_kota`,`username`) 
		 											  VALUES ('$email','$location','$username');");
} else {
	$level_akses = "provider";
	$query = mysqli_query($koneksi,"INSERT INTO `t_akun`(`username`,`password`,`level_akses`)
												VALUES ('$username','$password','$level_akses');");
		$query1 = mysqli_query($koneksi,"INSERT INTO `t_provider`(`email`,`kd_provinsi`,`kd_kota`,`kd_kategori`,`username`)
												VALUES ('$email',(SELECT p.`kd_provinsi` FROM `t_provinsi` p JOIN `t_kota` k ON p.`kd_provinsi`=k.`kd_provinsi` WHERE `kd_kota`='$location'),'$location','$kd_kategori','$username');");
	}
	 ?>

	 <script language="JavaScript">
	 alert('Data Berhasil Disimpan');
	 document.location='index.php';
	 </script>
 <?php  
 }
 ?>
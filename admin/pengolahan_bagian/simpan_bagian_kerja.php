<?php 
include "../../config/koneksi.php";

$kd_bagian = isset($_POST['kd_bagian']) ? $_POST['kd_bagian']:"";
$nama_bagian = isset($_POST['nama_bagian']) ? $_POST['nama_bagian']:"";

$cariid = mysqli_query($koneksi,"INSERT INTO t_bagian (kd_bagian,nama_bagian) values ('$kd_bagian','$nama_bagian')") or die (mysqli_error($koneksi));

if ($kd_bagian=="" || $nama_bagian == "") {
	echo "Data Gagal Tersimpan";
} else {
	$query = mysqli_query($koneksi,"INSERT INTO t_bagian (kd_bagian,nama_bagian) values ('$kd_bagian','$nama_bagian')") or die (mysqli_error($koneksi));
 	?>
 <script language="JavaScript">
 alert('Data Berhasil Disimpan');
 document.location='../media.php?page=tampil_bagian';
 </script>

 <?php  
 }
 ?>
<?php 
include "../../config/connection.php";

//Deklarasi Variabel Input
$kd_customer = isset($_POST['kd_customer']) ? $_POST['kd_customer']:"";
$nama = isset($_POST['nama']) ? $_POST['nama']:"";
$no_telp = isset($_POST['no_telp']) ? $_POST['no_telp']:"";
$email = isset($_POST['email']) ? $_POST['email']:"";
$jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin']:"";
$ttl = isset($_POST['ttl']) ? $_POST['ttl']:"";
$prop = isset($_POST['prop']) ? $_POST['prop']:"";
$kd_kota = isset($_POST['kd_kota']) ? $_POST['kd_kota']:"";
$detail_lokasi = isset($_POST['detail_lokasi']) ? $_POST['detail_lokasi']:"";

//Validasi jika ada data input yang kosong
if ($kd_customer=="") {
	echo "Data Gagal Tersimpan";
} else {	
	$query = mysqli_query($koneksi,"UPDATE `t_customer`
                        SET `nama` = '$nama',
                            `email` = '$email',
                            `jenis_kelamin` = '$jenis_kelamin',
                            `no_telp` = '$no_telp',
                            `ttl` = '$ttl',
                            `kd_kota` = '$kd_kota',
                            `alamat` = '$detail_lokasi'
                        WHERE `kd_customer` = '$kd_customer';") or die (mysqli_error($koneksi));
?>
	 <script language="JavaScript">
		 alert('Data Berhasil Disimpan');
		 document.location='../index.php?page=profil';
	 </script>
	  <?php
 }
?>




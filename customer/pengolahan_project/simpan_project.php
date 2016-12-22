<?php 
include "../../config/connection.php";


//Deklarasi Variabel Input

$kd_customer = isset($_POST['kd_customer']) ? $_POST['kd_customer']:"";
$permintaan = isset($_POST['permintaan']) ? $_POST['permintaan']:"";
$kd_kategori = isset($_POST['kd_kategori']) ? $_POST['kd_kategori']:"";
$deskripsi = isset($_POST['deskripsi']) ? $_POST['deskripsi']:"";
$kd_kota = isset($_POST['kd_kota']) ? $_POST['kd_kota']:"";
$detail_lokasi = isset($_POST['detail_lokasi']) ? $_POST['detail_lokasi']:"";
$budget = isset($_POST['budget']) ? $_POST['budget']:"";
$tgl_permintaan = date('Y-m-d');

//Validasi jika ada data input yang kosong
if ($kd_customer=="") {
	echo "Data Gagal Tersimpan";
} else {	
	$query = mysqli_query($koneksi,"INSERT INTO `t_permintaan`
            (`permintaan`,
             `deskripsi`,
             `tgl_permintaan`,
             `kd_kota`,
             `detail_lokasi`,
             `kd_customer`,
             `budget`,
             `kd_kategori`)
VALUES ('$permintaan',
        '$deskripsi',
        '$tgl_permintaan',
        '$kd_kota',
        '$detail_lokasi',
        '$kd_customer',
        '$budget',
        '$kd_kategori');") or die (mysqli_error($koneksi));
?>
	 <script language="JavaScript">
		 alert('Data Berhasil Disimpan');
		 document.location='../index.php?page=project';
	 </script>
	  <?php
 }
?>




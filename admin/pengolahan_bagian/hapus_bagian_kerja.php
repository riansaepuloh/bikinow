<?php 
include "../../config/koneksi.php";
if (isset($_GET['id'])) {
	$kd_bagian = $_GET['id'];
	$query = "SELECT * FROM t_bagian where kd_bagian= '$kd_bagian'";
	$hasil = mysqli_query($koneksi,$query);
	$data  = mysqli_fetch_array($hasil);
} else {
	die ("Error tidak ada kode yang dipilih");
}
	if (!empty($kd_bagian) && $kd_bagian != "") {
		$query = "DELETE FROM t_bagian where kd_bagian = '$kd_bagian'";
		$sql   = mysqli_query($koneksi,$query);

		if($sql){
			header("location:../media.php?page=tampil_bagian");
		} else {
			echo "data gagal terhapus";
		}
	}
 ?>
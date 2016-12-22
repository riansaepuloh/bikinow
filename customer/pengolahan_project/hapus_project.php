<?php 
include "../../config/connection.php";
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = "SELECT * FROM `t_permintaan` WHERE `kd_permintaan`=$id;";
	$hasil = mysqli_query($koneksi,$query);
	$data  = mysqli_fetch_array($hasil);
} else {
	die ("Error tidak ada kode yang dipilih");
}
	if (!empty($id) && $id != "") {
		$query = "DELETE FROM `t_permintaan` WHERE `kd_permintaan` = '$id';";
		$sql   = mysqli_query($koneksi,$query);

		if($sql){
			header("location:../index.php?page=project");
		} else {
			echo "data gagal terhapus";
		}
	}
 ?>
<?php 
include "../../config/koneksi.php";

$kd_pengajuan = isset($_GET['kd_pengajuan']) ? $_GET['kd_pengajuan']:"";
$nip = isset($_GET['nip']) ? $_GET['nip']:"";
$tanggal_cuti = isset($_GET['tanggal_cuti']) ? $_GET['tanggal_cuti']:"";
$nama_bagian = isset($_GET['nama_bagian']) ? $_GET['nama_bagian']:"";


if ($nip=="" || $nip == "") {
	echo "Data Gagal Tersimpan";
} else {
	$query = mysqli_query($koneksi,"INSERT INTO `t_absen`
            (`tanggal`,
             `keterangan`,
             `nip`,
             `lembur`)
		VALUES ('$tanggal_cuti',
        'Cuti',
        '$nip',
        'tidak');") or die (mysqli_error($koneksi));

	$setujui = mysqli_query($koneksi,"UPDATE `t_pengajuan_cuti` SET `status` = 'Disetujui' WHERE `kd_pengajuan` = '$kd_pengajuan'; ") or die (mysqli_error($koneksi));
	 	?>
 <script language="JavaScript">
 alert('Cuti Telah Disetujui');
 document.location='../media.php?page=tampil_pengajuan_cuti';
 </script>

 <?php  
 }
 ?>
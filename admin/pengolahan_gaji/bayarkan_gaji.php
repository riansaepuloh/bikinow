<?php 
include "../../config/koneksi.php";

$nip = isset($_POST['nip']) ? $_POST['nip']:"";

$bulan_sekarang = date("Y-m");
//ambil banyak lembur karyawan bulan ini
$banyak_lembur = mysqli_query($koneksi,"SELECT COUNT(`lembur`) AS lembur FROM `t_absen` 
										WHERE `nip`='$nip' AND `lembur`='Ya' AND`tanggal` 
										LIKE '%$bulan_sekarang%';");
$data = mysqli_fetch_array($banyak_lembur);
//banyak lembur
$jml_lembur = $data['lembur'];

//ambil tunjangan jabatan dan tunjangan anak
$tunjangan = mysqli_query($koneksi,"SELECT * FROM `t_pengolahan_gaji`;");
$data1 = mysqli_fetch_array($tunjangan);
//gaji pokok
$gaji_pokok = $data1['gaji_pokok'];
//tunjangan anak
$tunjangan_anak = $data1['tunjangan_anak'];
//gaji pokok
$gaji_lembur = $data1['gaji_lembur'];

//ambil tunjangan jabatan
$tj_jabatan = mysqli_query($koneksi,"SELECT	`nip`,`jml_anak`,`tunjangan_jabatan` 
									FROM `t_pegawai` JOIN `t_jabatan` USING(`kd_jabatan`) WHERE `nip`='$nip';");
$data2 = mysqli_fetch_array($tj_jabatan);
//tunjangan jabatan
$jml_anak = $data2['jml_anak'];
$tunjangan_jabatan = $data2['tunjangan_jabatan'];
//hitung gaji
$jml_gaji_lembur = $jml_lembur * $gaji_lembur;
$jlm_tunjangan_anak = $tunjangan_anak * $jml_anak;
$tanggal = date("Y-m-d");
$total_gaji = $gaji_pokok + $tunjangan_jabatan + $jlm_tunjangan_anak + $jml_gaji_lembur;

if ($nip=="" || $nip == "") {
	echo "Data Gagal Tersimpan";
} else {
	$query = mysqli_query($koneksi,"INSERT INTO `pegawai`.`t_gaji_pegawai`
            (`nip`,
             `gaji_lembur`,
             `total_gaji`,
             `tanggal_gaji`,
             `tunj_jabatan`,
             `tunj_anak`)
VALUES ('$nip',
        '$jml_gaji_lembur',
        '$total_gaji',
        '$tanggal',
        '$tunjangan_jabatan',
        '$jlm_tunjangan_anak');") or die (mysqli_error($koneksi));
 	?>
 <script language="JavaScript">
 alert('Data Berhasil Disimpan');
 document.location='../media.php?page=tampil_gaji';
 </script>

 <?php  
 }
 ?>
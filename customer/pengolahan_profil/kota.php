<?php
include "../../config/connection.php";
$prop = $_POST['prop'];
$query= mysqli_query($koneksi, "SELECT `kd_kota`,`nama_kota`,p.`nama_provinsi` FROM `t_kota` k JOIN `t_provinsi` p ON k.`kd_provinsi` = p.`kd_provinsi` WHERE k.`kd_provinsi`='".$prop."' ORDER BY `nama_kota`;");
while($data=mysqli_fetch_array($query)){
	echo '<option value="'.$data['kd_kota'].'">'.$data['nama_kota'].'</option>';
}
?>
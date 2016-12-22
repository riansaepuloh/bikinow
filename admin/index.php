<?php 
session_start();
if ($_SESSION['level_akses'] != "admin") {
	header("Location: ../index.php");
}
echo $_SESSION['username']."<br>";
 ?>
 ini halaman admin <br>
 <a href="../logout.php">LOGUT</a>

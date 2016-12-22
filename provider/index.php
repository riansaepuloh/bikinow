<?php 
session_start();
if ($_SESSION['level_akses'] != "provider") {
	header("Location: ../index.php");
}
echo "Selamat Datang ".$_SESSION['username'];
 ?>
 <br>
provider login<br>
 <a href="../logout.php">LOGUT</a>
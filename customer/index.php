<?php
session_start() ;
include "../config/connection.php";
if ($_SESSION) {
	$username = $_SESSION['username'];
	$query = mysqli_query($koneksi,"SELECT `kd_customer`,c.`kd_kota`,`nama_kota` FROM `t_customer` c JOIN `t_kota` k ON c.`kd_kota` = k.`kd_kota`
 									WHERE c.`username`='$username' LIMIT 1;");
	$res=mysqli_fetch_array($query);
	$kd_customer = $res['kd_customer'];
	$kd_kota = $res['kd_kota'];
	$nama_kota = $res['nama_kota'];

} else {
	header("Location:../index.php");
}
 ?>

<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>BIKINOW.COM</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <script type="text/javascript">

	function pilih_kota(prop)
	{
		$.ajax({
	        url: 'http://localhost/bikinow/customer/pengolahan_profil/kota.php',
	        data : 'prop='+prop,
			type: "post", 
	        dataType: "html",
			timeout: 10000,
	        success: function(response){
				$('#dom_kota').html(response);
	        }
	    });
	}
</script>
</head>

<body>

	<div class="wrapper">

	    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->
		    <?php
		    $aktif = isset($_GET['page']) ? $_GET['page']:"";
		    if (($aktif == 'project')||($aktif == 'edit_project')) {
		    	$a_project = "class='active'";
		    	$a_dashboard = "";
		    	$a_profil = "";
		    } else if (($aktif == 'profil')||($aktif == 'edit_profil')) {
		    	$a_dashboard = "";
		    	$a_project = "";
		    	$a_profil = "class='active'";
		    } else {
		    	$a_dashboard = "class='active'";
		    	$a_project = "";
		    	$a_profil = "";
		    }

		     ?>
		    
			<div class="logo">
				<a href="../"><img src="../images/logo.png" width="250px" height="55px"></a>
			</div>
	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li <?php echo $a_dashboard; ?>>
	                    <a href="index.php?page=utama">
	                        <i class="material-icons">dashboard</i>
	                        <p>DASHBOARD</p>
	                    </a>
	                </li>
	                <li <?php echo $a_profil; ?>>
	                    <a href="index.php?page=profil">
	                        <i class="material-icons">person</i>
	                        <p>PROFIL</p>
	                    </a>
	                </li>
	                <li <?php echo $a_project; ?>>
	                    <a href="index.php?page=project">
	                        <i class="material-icons">content_paste</i>
	                        <p>PROJECT</p>
	                    </a>
	                </li>
	                <li class="active-pro">
                        <a href="../logout.php">
	                        <i class="material-icons">exit_to_app</i>
	                        <p>LOGOUT</p>
	                    </a>
                    </li>
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">dashboard</i>
									<p class="hidden-lg hidden-md">Dashboard</p>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">notifications</i>
									<span class="notification">5</span>
									<p class="hidden-lg hidden-md">Notifications</p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Mike John responded to your email</a></li>
									<li><a href="#">You have 5 new tasks</a></li>
									<li><a href="#">You're now friend with Andrew</a></li>
									<li><a href="#">Another Notification</a></li>
									<li><a href="#">Another One</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<p><i class="material-icons">person</i>
									<?php echo $username; ?></p>
								</a>
								<ul class="dropdown-menu">
									<li>
									<a href="../logout.php">
									<i class="material-icons">exit_to_app</i>
									LOGOUT</a>
									</li>
								</ul>
							</li>
						</ul>

						<form class="navbar-form navbar-right" role="search">
							<div class="form-group  is-empty">
								<input type="text" class="form-control" placeholder="Search">
								<span class="material-input"></span>
							</div>
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i><div class="ripple-container"></div>
							</button>
						</form>
					</div>
				</div>
			</nav>

			<div class="content">
				<div class="container-fluid">
				<!-- isian utama -->
				<?php 
              $page = (isset($_GET['page']))? $_GET['page'] : "main";
              switch ($page) {
              // project
              case 'project': include "pengolahan_project/tampil_project.php";break;
              case 'detail_project': include "pengolahan_project/detail_project.php"; break;
              case 'edit_project': include "pengolahan_project/edit_project.php"; break;
              //profil
              case 'profil': include "pengolahan_profil/tampil_profil.php";break;
              case 'detail_profil': include "pengolahan_profil/detail_profil.php"; break;
              case 'edit_profil': include "pengolahan_profil/edit_profil.php"; break;
              default : include "utama.php";
              }
              ?>
				<!-- end isian utama -->
				</div>
			</div>
			</div>

			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul>
							<li>
								<a href="#">
									Home
								</a>
							</li>
							<li>
								<a href="#">
									Company
								</a>
							</li>
							<li>
								<a href="#">
									Portfolio
								</a>
							</li>
							<li>
								<a href="#">
								   Blog
								</a>
							</li>
						</ul>
					</nav>
					<p class="copyright pull-right">
						&copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.riansaepuloh.top">RS</a>Corporate, made with spirit for a better web
					</p>
				</div>
			</footer>

		</div>

</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();

    	});
	</script>

</html>

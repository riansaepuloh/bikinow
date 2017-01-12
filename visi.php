<?php
session_start();
include "config/connection.php";
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>BIKINOW.COM</title>
	<style>
		.no-js #loader { display: none;  }
		.js #loader { display: block; position: absolute; left: 100px; top: 0; }
		.se-pre-con {
			position: fixed;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			z-index: 9999;
			background: url(images/Preloader_3.gif) center no-repeat #fff;
		}
	</style>
	<!-- jQuery loading -->
	<script src="loading.min.js"></script>
	<script src="modernizr.js"></script>
	<!--css-->
	<link href="css/bootstrap-select.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- <link href="css/material-dashboard.css" rel="stylesheet"/> -->
	<link href="css/demo.css" rel="stylesheet" />
	<!--css-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script src="js/jquery.min.js"></script>
	<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
	<!--search jQuery-->
	<script src="js/bootstrap-select.js"></script>
	<script src="js/main.js"></script>
	<!--search jQuery-->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				pager: true,
			});
		});
	</script>
	<!--mycart-->

	<!-- cart -->
	<script src="js/simpleCart.min.js"></script>
	<!-- cart -->
	<!--start-rate-->
	<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
	<script type="text/javascript">
		jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
				starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
				}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
						var val = Math.random();
						starbox.next().text(' '+val);
						return val;
					} 
				})
			});
		});
	</script>
	
	
	<!--  <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>

	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bikinow.css">
	<link href="css/coreSlider.css" rel="stylesheet" type="text/css">
	
	<style>
		.carousel-inner > .item > img,
		.carousel-inner > .item > a > img {
			width: 100%;
			margin: auto;
			height: 120%;
		}
	</style>
	<script type="text/javascript">
		function navbarClick(){
			document.getElementById("sign-in-part").classList.toggle("show-sign-in");
			document.getElementById("myNavbar").classList.toggle("show-menu");

		}
	</script>
	<script>
		//paste this code under head tag or in a seperate js file.
		// Wait for window load
		$(window).load(function() {
			// Animate loader off screen
			$(".se-pre-con").fadeOut("slow");;
		});
		
	</script>
</head>
<body>
	<!-- ==============================main navbar =================================s -->
	<div class="main-navbar background-navbar">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header" style="float: left; margin-left: 5px;">
					<button type="button" class="navbar-toggle" data-toggle="collapse" onclick="navbarClick()" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>
				</div>
				<div class="collapse navbar-collapse" style="clear: both;" id="myNavbar">
					<ul class="nav navbar-nav" style="">
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Customer<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Page 1-1</a></li>
								<li><a href="#">Page 1-2</a></li>
								<li><a href="#">Page 1-3</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Provider <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Page 1-1</a></li>
								<li><a href="#">Page 1-2</a></li>
								<li><a href="#">Page 1-3</a></li>
							</ul>
						</li>
						<li><a href="#">About</a></li>
					</ul>

				</div>
			</div>
		</nav>
		<!-- ======================== proses stelah login ======================= -->
		<?php 
		if ($_SESSION) {
			if ($_SESSION['level_akses']=="admin") {
				?>
				<div class="col-md-4"></div>
				<div class="col-md-2" style="margin-top: 7px;">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username']; ?><b class="caret"></b></a>
							<ul class="dropdown-menu" >
								<li><a href="#">PROFILE</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="logout.php" onclick="demo.showNotification('top','center')">LOGOUT</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<?php
			} else if ($_SESSION['level_akses']=="provider") {
				?>
				<div class="col-md-4"></div>
				<div class="col-md-2" style="margin-top: 7px;">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username']; ?><b class="caret"></b></a>
							<ul class="dropdown-menu" >
								<li><a href="#">PROFILE</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="logout.php">LOGOUT</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<?php
			} else {
				?>
				<div class="col-md-4"></div>
				<div class="col-md-2" style="margin-top: 7px;">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username']; ?><b class="caret"></b></a>
							<ul class="dropdown-menu" >
								<li><a href="customer/index.php">PROFILE</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="logout.php">LOGOUT</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<?php
			}
		} else {
			?>

			<div class="sign-in-part" id="sign-in-part">
				<form method="post" action="proses_login.php">
					<ul class="sign-in-container">
						<li ><input type="submit" value="Sign-in" class="btn btn-default sign-in-button" ></li>
						<li ><input class="form-control" type="text" name="username" placeholder="Username" required></li>
						<li>&nbsp;</li>
						<li ><input class="form-control" type="password" name="password" placeholder="Password" required></li>
					</ul>
				</form>
			</div>
			<?php 
		}
		?>
	</div>
	<!-- ============================= end proses setelah login ========================= -->
	<!-- ============================= video ========================================= -->
		<div class="video-profile">
			<span>Video</span>
		</div>
	<!-- ============================= end of video ========================================= -->
	<!-- ============================= vision ========================================= -->
		<div class="vision">
			<img src="images/logo.png" >
			<section>
				<h2>Visi</h2>
				<p>Memudahkan semua orang untuk dapat berkarya atau menjadi bikiner</p>
				<h2>Misi</h2>
				<div class="divider"></div>
				<p>"Memudahkan para bikiner mencari pembikin yang sesuai dengan harga dan kualitas bikiner inginkan"</p>
				<p>"Membantu para pembikin mempublikasikan dan mendapatkan bikiner"</p>
			</section>
		</div>
	<!-- ============================= end of vision ========================================= -->
	<!-- ============================= motivation =================================== -->
		<div class="motivation">
			
		</div>
	<!-- ============================= end of motivation ========================================= -->
 
	
		<!--=============================footer=========================-->
		<div class="footer-container">
			<div class="col-md-push-3 col-md-9 col-lg-push-3 col-lg-9 footer" style="background-color:#0072FF; margin-bottom: 0 ">
				<div class="col-md-4 " style="clear: both;">
					<h4>Bikin</h4>
					<ul>
						<li><a href="checkout.html">About Us</a></li>
						<li><a href="login.html">Syarat dan Ketentuan</a></li>
						<li><a href="registered.html"> Kebijakan Privasi </a></li>
					</ul>
				</div>
				<div class="col-md-4 customer-footer">
					<h4>Costumer</h4>
					<ul>
						<li><a href="index.html">Cara BIkin</a></li>
						<li><a href="products.html">FAQ</a></li>
						<li><a href="codes.html">Tips Bikin</a></li>
					</ul>
				</div>
				<div class="col-md-4 ">
					<h4>Provider</h4>
					<ul>
						<li><a href="#"> Cara Bikin</a></li>
						<li><a href="#"> FAQ</a></li>
						<li><a href="#"> Tips Bikin</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-pull-9 col-lg-3 col-md-pull-9 col-md-3 footer" style="margin-bottom: 0;  " >
				<div style="padding-bottom: 0">
					<h4 style="color: black; padding-bottom: 0;"><img src="images/logo.png" "> </h4>
					<p style="color: black;"s> Jalan DR Setiabudi 229 Bandung, West Java, Indonesia 46196</p>
					<div class="social-icon">
						<a href="#"><i class="icon"></i></a>
						<a href="#"><i class="icon1"></i></a>
						<a href="#"><i class="icon2"></i></a>
						<a href="#"><i class="icon3"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!-- ============================end of footer======================= -->
	
	<script>
		$(document).ready(function () {
			var mySelect = $('#first-disabled2');

			$('#special').on('click', function () {
				mySelect.find('option:selected').prop('disabled', true);
				mySelect.selectpicker('refresh');
			});

			$('#special2').on('click', function () {
				mySelect.find('option:disabled').prop('disabled', false);
				mySelect.selectpicker('refresh');
			});

			$('#basic2').selectpicker({
				liveSearch: true,
				maxOptions: 1
			});
		});
	</script>
	<script src="js/bootstrap-notify.js"></script>
	<script src="js/demo.js"></script>	

</body>
</html>

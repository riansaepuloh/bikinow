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
<div class="main-navbar">
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
	<!-- modal -->
	<div class="modal fade modal-primary active" id="daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<!-- tambah bagian kerja -->
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Register</h4>
				</div>
				<div class="modal-body">
					<div class="" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
							<li role="presentation" class="active">
								<a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">CUSTOMER</a>
							</li>
							<li role="presentation" class="">
								<a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">PROVIDER</a>
							</li>

						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="customer-tab">
								<p>Untuk menjadi CUSTOMER di BIKINOW.COM silahkan isi data dibawah ini !</p>
								<form action="register_account.php" method="post" id="reg_customer">
									<br>
									<br>
									<div class="key">
										<i class="fa fa-user" aria-hidden="true"></i>
										<input  type="text" name="username" placeholder="username" required="">
										<div class="clearfix"></div>
									</div>
									<div class="key">
										<i class="fa fa-envelope" aria-hidden="true"></i>
										<input  type="text" name="email" placeholder="e-mail" required="">
										<div class="clearfix"></div>
									</div>
									<div class="key">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										<select class="form-control-registrasi" name="location" required  placeholder="pilih kota">
											<option value="" disabled selected="selected">Pilih Kota</option>
											<?php
											$query =  mysqli_query($koneksi, "SELECT kd_kota,nama_kota FROM t_kota ORDER BY nama_kota");
											while ( $res = mysqli_fetch_array($query)) {
												echo '<option value="'.$res['kd_kota'].'">'.ucwords(strtolower($res['nama_kota'])).'</option>';
											}
											?>
										</select>
										<div class="clearfix"></div>
									</div>
									<div class="key">
										<i class="fa fa-lock" aria-hidden="true"></i>
										<input  type="password" name="password" placeholder="password" required="">
										<div class="clearfix"></div>
									</div>
									<div class="key">
										<i class="fa fa-lock" aria-hidden="true"></i>
										<input  type="password" name="confrim_pass" placeholder="re-password" required="">
										<div class="clearfix"></div>
									</div>
									<center>
										<input type="submit" value="Register" class="btn btn-primary" id="reg_customer">
									</center>
								</form>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="provider-tab">
								<p>Untuk menjadi PROVIDER di BIKINOW.COM silahkan isi data dibawah ini !</p>
								<form action="register_account.php" method="post">
									<br>
									<br>
									<div class="key">
										<i class="fa fa-user" aria-hidden="true"></i>
										<input  type="text" name="username" placeholder="username" required="">
										<div class="clearfix"></div>
									</div>
									<div class="key">
										<i class="fa fa-envelope" aria-hidden="true"></i>
										<input  type="text" name="email" placeholder="e-mail" required="">
										<div class="clearfix"></div>
									</div>
									<div class="key">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										<select class="form-control-registrasi" name="kd_kategori" required  placeholder="pilih kota">
											<option value="" disabled selected="selected">Pilih Kategori</option>
											<?php 
											$kategori =  mysqli_query($koneksi, "SELECT kd_kategori,nama_kategori FROM t_kategori");
											while ( $res1 = mysqli_fetch_array($kategori)) {
												echo '<option value="'.$res1['kd_kategori'].'">'.$res1['nama_kategori'].'</option>';
											}
											?>
										</select>
										<div class="clearfix"></div>
									</div>
									<div class="key">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										<select class="form-control-registrasi" name="location" required  placeholder="pilih kota">
											<option value="" disabled selected="selected">Pilih Kota</option>
											<?php
											$query =  mysqli_query($koneksi, "SELECT kd_kota,nama_kota FROM t_kota ORDER BY nama_kota");
											while ( $res = mysqli_fetch_array($query)) {
												echo '<option value="'.$res['kd_kota'].'">'.ucwords(strtolower($res['nama_kota'])).'</option>';
											}
											?>
										</select>
										<div class="clearfix"></div>
									</div>
									<div class="key">
										<i class="fa fa-lock" aria-hidden="true"></i>
										<input  type="password" name="password" placeholder="password" required="">
										<div class="clearfix"></div>
									</div>
									<div class="key">
										<i class="fa fa-lock" aria-hidden="true"></i>
										<input  type="password" name="confrim_pass" placeholder="re-password" required="">
										<div class="clearfix"></div>
									</div>
									<center>
										<input type="submit" value="Register" class="btn btn-primary">
									</center>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- end modal -->
	<!-- ===============banner======================= -->
	<div class="container-banner" >
		<div class="isi-banner">
			<?php 
			if (!$_SESSION) {
				echo "<h4><a href='#daftar' data-toggle='modal'>Join-Us</a></h4>";
			}
			?>
			<img src="images/logo.png">
		</div>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<!-- <ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol> -->

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img  src="images/1.jpg" alt="Chania" width="460" height="35">
				</div>

				<div class="item">
					<img src="images/b3.jpg" alt="Chania" width="460" height="345">
				</div>

				<div class="item">
					<img src="images/b1.jpg" alt="Flower" width="460" height="345">
				</div>

				<div class="item">
					<img src="images/b2.jpg" alt="Flower" width="460" height="345">
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="core-slider_arrow core-slider_arrow__left" aria-hidden="true"></span>

				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="core-slider_arrow core-slider_arrow__right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<!-- =====================end of banner===================== -->

	<!-- =====================search row========================= -->
	<div class="nav-search">
		<div class="col-xs-6 col-lg-2 top-provider">Top Provider</div>
		<input class="col-xs-6 col-lg-2 col-lg-push-8  tombol-request " type="submit" name="" value="Request">
		<div class="col-lg-8 col-lg-pull-2">
			<div class="col-xs-6 col-md-3 option-search">
				<select name="kd_kota">
						<option value="semua">-Semua Lokasi-</option>
						<?php
						$query1 =  mysqli_query($koneksi, "SELECT kd_kota,nama_kota FROM t_kota ORDER BY nama_kota"); 
                        while ( $result = mysqli_fetch_array($query1)) {
                            echo '<option value="'.$result['kd_kota'].'">'.ucwords(strtolower($result['nama_kota'])).'</option>';
                        }
                         ?>
						</select>
				<div class="clearfix"></div>
			</div>
			<div class="col-xs-6 col-md-3 option-search">
				<select >
					<option value="semua">-Semua Kategori-</option>
					<?php 
					$kategori =  mysqli_query($koneksi, "SELECT kd_kategori,nama_kategori FROM t_kategori");
					while ( $res1 = mysqli_fetch_array($kategori)) {
						echo '<option value="'.$res1['kd_kategori'].'">'.ucwords(strtolower($res1['nama_kategori'])).'</option>';
					}
					?>
				</select>
			</div>
			<div class="col-xs-12 col-md-3 keyword-part">
				<input class=" col-xs-offset-2 col-xs-8 col-sm-offset-4 col-sm-4 col-md-offset-0 col-md-12 col-lg-offset-0 col-lg-12 keyword-input" type="text" name="" placeholder="Keyword">
			</div>	
			<div class="col-xs-12 col-md-3">
				<input class=" col-xs-offset-2 col-xs-8 col-sm-offset-4 col-sm-4 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8 tombol-cari" type="submit" name="" value="Cari">
			</div>
		</div>
	</div>
	<!-- =====================end of search row ================= -->
	<!-- ===================== content ========================== -->
	<div class="content">
			<!--new-arrivals-->
				<div class="new-arrivals-w3agile" >
					<div class="container">
						<!-- <h3 class="tittle1">Best Sellers</h3> -->
						<div class="arrivals-grids">
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="single.html">
												<div class="grid-img">
													<img  src="images/p28.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="images/p27.jpg" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<div class="ribben">
										<p>Kategori 1</p>
									</div>
									<div class="ribben1">
										<p>Kategori 2</p>
									</div>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
										<span class="size">Deskripsi Provider</span>
										<a href="#" data-text="Order" class="my-cart-b item_add">Order</a>
										<p ><em class="item_price">Nama Kota</em></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="single.html">
												<div class="grid-img">
													<img  src="images/p30.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="images/p29.jpg" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<div class="ribben2">
										<p>Kategori 3</p>
									</div>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
										<span class="size">Deskripsi Provider</span>
										<a href="#" data-text="Order" class="my-cart-b item_add">Order</a>
										<p ><em class="item_price">Nama Kota</em></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="single.html">
												<div class="grid-img">
													<img  src="images/s2.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="images/s1.jpg" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<div class="ribben1">
										<p>Kategori 2</p>
									</div>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
										<span class="size">Deskripsi Provider</span>
										<a href="#" data-text="Order" class="my-cart-b item_add">Order</a>
										<p ><em class="item_price">Nama Kota</em></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="single.html">
												<div class="grid-img">
													<img  src="images/s4.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="images/s3.jpg" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<div class="ribben">
										<p>Kategori 1</p>
									</div>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
										<span class="size">Deskripsi Provider </span>
										<a href="#" data-text="Order" class="my-cart-b item_add">Order</a>
										<p ><em class="item_price">Nama Kota</em></p>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!--new-arrivals-->
		</div>
				<div class="new-arrivals-w3agile">
					<div class="container">
						<!-- <h3 class="tittle1">Best Sellers</h3> -->
						<div class="arrivals-grids">
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="single.html">
												<div class="grid-img">
													<img  src="images/p28.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="images/p27.jpg" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<div class="ribben">
										<p>Kategori 1</p>
									</div>
									<div class="ribben1">
										<p>Kategori 2</p>
									</div>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
										<span class="size">Deskripsi Provider</span>
										<a href="#" data-text="Order" class="my-cart-b item_add">Order</a>
										<p ><em class="item_price">Nama Kota</em></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="single.html">
												<div class="grid-img">
													<img  src="images/p30.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="images/p29.jpg" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<div class="ribben2">
										<p>Kategori 3</p>
									</div>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
										<span class="size">Deskripsi Provider</span>
										<a href="#" data-text="Order" class="my-cart-b item_add">Order</a>
										<p ><em class="item_price">Nama Kota</em></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="single.html">
												<div class="grid-img">
													<img  src="images/s2.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="images/s1.jpg" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<div class="ribben1">
										<p>Kategori 2</p>
									</div>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
										<span class="size">Deskripsi Provider</span>
										<a href="#" data-text="Order" class="my-cart-b item_add">Order</a>
										<p ><em class="item_price">Nama Kota</em></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="single.html">
												<div class="grid-img">
													<img  src="images/s4.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="images/s3.jpg" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<div class="ribben">
										<p>Kategori 1</p>
									</div>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
										<span class="size">Deskripsi Provider </span>
										<a href="#" data-text="Order" class="my-cart-b item_add">Order</a>
										<p ><em class="item_price">Nama Kota</em></p>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!--new-arrivals-->
		</div>
		<!-- ===================== end of content =================== -->
		<!--divider-->
		<div class="divider"></div>
		<!--divider-->
		<!--=========================kelebihan=========================-->
		<div class="header-kelebihan" >
			Kelebihan <span style="color: black;">bikin</span> di <img src="images/logo.png">
		</div>
		<div class="img-back-bottom" >
			<div class=" kelebihan" style="">
				<ul >
					<li class="col-sm-3">
						<div class="col-xs-12">Mudah
						</div>
						<img src="images/r.jpg">
					</li>
					<li class="col-sm-3">
						<div class="col-xs-12">Cepat
						</div>
						<img src="images/r.jpg">
					</li>
					<li class="col-sm-3">
						<div class="col-xs-12">Aman
						</div>
						<img src="images/r.jpg">
					</li>
					<li class="col-sm-3">
						<div class="col-xs-12">Nyaman
						</div>
						<img src="images/r.jpg">
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
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
		</div>
		<!--==============================kelebihan=======================-->
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

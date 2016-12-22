<?php
session_start();
include "config/connection.php";
// if ($_SESSION) {
// 	if ($_SESSION['level_akses']=="admin") {
// 		header("Location: admin/index.php");
// 	} else if ($_SESSION['level_akses']=="provider") {
// 		header("Location: provider/index.php");
// 	} else {
// 		header("Location: customer/index.php");
// 	}
	
// }
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
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/bootstrap-select.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
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
<!--//End-rate-->
	<style type="text/css">
		.modal-primary{
			position: absolute;
			top: 100px;
		}
		.nav-search{
			font-size: 1.2em;
			font-family: 'Cagliostro', sans-serif;
		}
		.sign-in-button{
			margin-right: 6px; 
			color:#0072FF;
			font-family: 'Cagliostro', sans-serif;
		}
		.kelebihan {
			padding-top: 10px;
			margin-bottom: 230px;
		}
		.kelebihan li{
			display: inline-block;
			position: relative;
			width: 25%; 
			margin-right:-4px;
			text-align: center;
			font-size: 40px;
		}
		.kelebihan img{
			border-radius: 50%;
			border-color: green;
			border : 3px solid #0072FF;
			position: absolute;
			top: 80px;
			margin-left: 0;
		}
		.footer, .footer a{
			color: black;
			font-family: 'Cagliostro', sans-serif;
			font-size: 17px;
		}
		.footer li{
			list-style: none;
			margin-top: 30px;
			text-align: center;
		}
		.footer div{
			padding: 30px;
		}
		.footer h4{
			font-size: 30px;
			text-align: center;
		}
		.footer > .col-md-4 > h4 {
			color:white;
		}
		.footer i{
			font-size: 15px;
			border-radius: 50%;
			padding: 6px;
			border: 2px solid white;
		}
	</style>
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
	<!-- Paste this code after body tag -->
	<div class="se-pre-con"></div>

	<!--header-->
		<div class="header">
			<div class="heder-top">
				<div class="container">
						<div class="logo-nav-left1">
							<nav class="fixed-navbar">
							<!-- Brand and toggle get grouped for better mobile display -->
								<div class="row col-lg-12">
									<div class="col-lg-6">
										<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
											<ul class="nav navbar-nav col-md-12">
												<li class="active hidden"><a href="index.html" class="act">Home</a></li>	
												<!-- Mega Menu -->
												<li class="col-md-offset-3 dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown">Costumer<b class="caret"></b></a>
													<ul class="dropdown-menu" >
														<li><a href="#">Cara Bikin</a></li>
														<li><a href="#">FAQ</a></li>
														<li><a href="#">Tips Bikin</a></li>
													</ul>
												</li>
												<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown">Provider<b class="caret"></b></a>
													<ul class="dropdown-menu" >
														<li><a href="#">Cara Bikin</a></li>
														<li><a href="#">FAQ</a></li>
														<li><a href="#">Tips Bikin</a></li>
													</ul>
												</li>
												<li><a href="codes.html">About Us</a></li>
											</ul>
										</div>
									</div>
									<!-- proses stelah login -->
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
									<!-- end proses setelah login -->
									<div class="col-md-4 col-md-offset-2" style="margin-top: 7px;">
										<form method="post" action="proses_login.php">
											<ul class="nav navbar-nav">
												<li class="top-right"><input type="submit" value="Sign-in" class="btn btn-default sign-in-button" ></li>
												<li class="top-right"><input class="form-control" type="text" name="username" placeholder="Username" required></li>
												<li>&nbsp;</li>
												<li class="top-right"><input class="form-control" type="password" name="password" placeholder="Password" required></li>
											</ul>
										</form>
									</div>
									<?php 
										}
									 ?>
								</div>
							</nav>
						</div>
				</div>
			</div>
		</div>
		<!--header-->
		<!-- modal -->
		<div class="modal fade modal-primary" id="daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
		<!--banner-->
		<div class="banner-w3">
			<div class="demo-1">            
				<div id="example1" class="core-slider core-slider__carousel example_1">
					<div class="core-slider_viewport">
						<div class="core-slider_list">
							<div class="core-slider_item">
								<img src="images/b1.jpg" class="img-responsive" alt="">
							</div>
							 <div class="core-slider_item">
								 <img src="images/b2.jpg" class="img-responsive" alt="">
							 </div>
							<div class="core-slider_item">
								  <img src="images/b3.jpg" class="img-responsive" alt="">
							</div>
							<div class="core-slider_item">
								  <img src="images/b4.jpg" class="img-responsive" alt="">
							</div>
						 </div>
					</div>
					<div class="core-slider_nav">
						<div class="core-slider_arrow core-slider_arrow__right"></div>
						<div class="core-slider_arrow core-slider_arrow__left"></div>
					</div>
					<div class="ban-text">
						<?php 
						if (!$_SESSION) {
							echo "<h4><a href='#daftar' data-toggle='modal'>Join-Us</a></h4>";
						}
						 ?>
						<img src="images/logo.png">
					</div>
					<div class="core-slider_control-nav"></div>
				</div>
			</div>
			<link href="css/coreSlider.css" rel="stylesheet" type="text/css">
			<script src="js/coreSlider.js"></script>
			<script>
			$('#example1').coreSlider({
			  pauseOnHover: false,
			  interval: 3000,
			  controlNavEnabled: true
			});

			</script>

		</div>	
		<!--banner-->
		<!-- SEARCH ROW -->
		<div class="nav-search"
			style="
				background-color: #0072FF;
				margin-top: 0;
				height: 90px;
				color:white;
				font-size: 20px;
				padding-top: 2%;
			">
			<div class="col-md-2">Top Provider</div>
			<div class="col-md-8">
				<ul style="list-style: none;">
					<li class="col-sm-3" style="display: inline-block;color: #0072FF">
						<select style="text-decoration: none;border:none;width: 100%;padding:5px;box-shadow:1px 1px 7px 0px #aaaaaa inset;" name="kd_kota">
						<option value="semua">-Semua Lokasi-</option>
						<?php
						$query1 =  mysqli_query($koneksi, "SELECT kd_kota,nama_kota FROM t_kota ORDER BY nama_kota"); 
                        while ( $result = mysqli_fetch_array($query1)) {
                            echo '<option value="'.$result['kd_kota'].'">'.ucwords(strtolower($result['nama_kota'])).'</option>';
                        }
                         ?>
						</select>
					</li>
					<li class="col-sm-3" style="display: inline-block;color: #0072FF">
						<select style="text-decoration: none;border:none;width: 100%;padding:5px;box-shadow:1px 1px 7px 0px #aaaaaa inset;">
							<option value="semua">-Semua Kategori-</option>
							<?php 
                       		$kategori =  mysqli_query($koneksi, "SELECT kd_kategori,nama_kategori FROM t_kategori");
                        	while ( $res1 = mysqli_fetch_array($kategori)) {
                            echo '<option value="'.$res1['kd_kategori'].'">'.ucwords(strtolower($res1['nama_kategori'])).'</option>';
                        	}
                         	?>
						</select>
					</li>
					<li class="col-sm-3" style="display: inline-block;color: #0072FF">
						<input type="text" style="text-decoration: none;border:none;width: 100%;padding:5px;box-shadow:1px 1px 7px 0px #aaaaaa inset;" placeholder="Keyword"  name="">
					</li>
				</ul>
				<input class="col-md-2" style="margin-left: 12px; margin-top: 2px; background-color: transparent;border-color: white; border-style: solid;" type="button" name="" value="Cari">
			</div>
			<div class="col-md-2" style="text-align: right;padding-right: 90px;">
				<input type="button" name="" value="Request" onclick="demo.showNotification('top','center')" style="color: #0072FF; width: 100%; margin-top: 2px; background-color: white; text-decoration: none; border : none; box-shadow: 4px 4px 14px 2px #444">
			</div>
		</div>
			<!--content-->
		<div class="content">
			<!--new-arrivals-->
				<div class="new-arrivals-w3agile " style="padding-top: 0;">
					<div class="container">

			<!--Products-->
				<div class="product-agile" style="padding-top: 0; padding-bottom: 0;">
					<div class="container">
						<!-- <h3 class="tittle1"> New Products</h3> -->
						<div class="slider">
							<div class="callbacks_container">
								<ul class="rslides" id="slider" style="height: 650px;">
									<li>	 
										<div class="caption">
											<div class="col-md-3 cap-left simpleCart_shelfItem">
												<div class="grid-arr">
													<div  class="grid-arrival">
														<figure>		
															<a href="single.html">
																<div class="grid-img">
																	<img  src="images/p14.jpg" class="img-responsive" alt="">
																</div>
																<div class="grid-img">
																	<img  src="images/p13.jpg" class="img-responsive"  alt="">
																</div>			
															</a>		
														</figure>	
													</div>
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<div class="women">
														<h6><a href="single.html">Nama Provider</a></h6>
														<span class="size">Deskripsi Provider</span>
														<a href="#" data-text="Order" class="my-cart-b item_add">Order</a>
														<p ><em class="item_price">Nama Kota</em></p>
													</div>
												</div>
											</div>
											<div class="col-md-3 cap-left simpleCart_shelfItem">
												<div class="grid-arr">
													<div  class="grid-arrival">
														<figure>		
															<a href="single.html">
																<div class="grid-img">
																	<img  src="images/p15.jpg" class="img-responsive" alt="">
																</div>
																<div class="grid-img">
																	<img  src="images/p16.jpg" class="img-responsive"  alt="">
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
														<h6><a href="single.html">Nama Provider</a></h6>
														<span class="size">Deskripsi Provider</span>
														<a href="#" data-text="Order" class="my-cart-b item_add">Order</a>
														<p ><em class="item_price">Nama Kota</em></p>
														
													</div>
												</div>
											</div>
											<div class="col-md-3 cap-left simpleCart_shelfItem">
												<div class="grid-arr">
													<div  class="grid-arrival">
														<figure>		
															<a href="single.html">
																<div class="grid-img">
																	<img  src="images/p18.jpg" class="img-responsive" alt="">
																</div>
																<div class="grid-img">
																	<img  src="images/p17.jpg" class="img-responsive"  alt="">
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
														<h6><a href="single.html">Nama Provider</a></h6>
														<span class="size">Deskripsi Provider</span>
														<a href="#" data-text="Order" class="my-cart-b item_add">Order</a>
														<p ><em class="item_price">Nama Kota</em></p>
													</div>
												</div>
											</div>
											<div class="col-md-3 cap-left simpleCart_shelfItem">
												<div class="grid-arr">
													<div  class="grid-arrival">
														<figure>		
															<a href="single.html">
																<div class="grid-img">
																	<img  src="images/p20.jpg" class="img-responsive" alt="">
																</div>
																<div class="grid-img">
																	<img  src="images/p19.jpg" class="img-responsive"  alt="">
																</div>			
															</a>		
														</figure>	
													</div>
													<div class="ribben">
														<p>Kategori 5</p>
													</div>
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<div class="women">
														<h6><a href="single.html">Nama Provider</a></h6>
														<span class="size">Deskripsi Provider</span>
														<a href="#" data-text="Order" class="my-cart-b item_add">Order</a>
														<p ><em class="item_price">Nama Kota</em></p>
													</div>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
									</li>
									<li>	 
										<div class="caption">
											<div class="col-md-3 cap-left simpleCart_shelfItem">
												<div class="grid-arr">
													<div  class="grid-arrival">
														<figure>		
															<a href="single.html">
																<div class="grid-img">
																	<img  src="images/p21.jpg" class="img-responsive" alt="">
																</div>
																<div class="grid-img">
																	<img  src="images/p22.jpg" class="img-responsive"  alt="">
																</div>			
															</a>		
														</figure>	
													</div>
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<div class="women">
														<h6><a href="single.html">Nama Provider</a></h6>
														<span class="size">Deskripsi Provider</span>
														<a href="#" data-text="Order" class="my-cart-b item_add">Order</a>
														<p ><em class="item_price">Nama Kota</em></p>
													</div>
												</div>
											</div>
											<div class="col-md-3 cap-left simpleCart_shelfItem">
												<div class="grid-arr">
													<div  class="grid-arrival">
														<figure>		
															<a href="single.html">
																<div class="grid-img">
																	<img  src="images/p24.jpg" class="img-responsive" alt="">
																</div>
																<div class="grid-img">
																	<img  src="images/p23.jpg" class="img-responsive"  alt="">
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
														<h6><a href="single.html">Nama Provider</a></h6>
														<span class="size">Deskripsi Provider</span>
														<a href="#" data-text="Order" class="my-cart-b item_add">Order</a>
														<p ><em class="item_price">Nama Kota</em></p>
													</div>
												</div>
											</div>
											<div class="col-md-3 cap-left simpleCart_shelfItem">
												<div class="grid-arr">
													<div  class="grid-arrival">
														<figure>		
															<a href="single.html">
																<div class="grid-img">
																	<img  src="images/p26.jpg" class="img-responsive" alt="">
																</div>
																<div class="grid-img">
																	<img  src="images/p25.jpg" class="img-responsive"  alt="">
																</div>			
															</a>		
														</figure>	
													</div>
													<div class="ribben">
														<p>Kategori 4</p>
													</div>
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<div class="women">
														<h6><a href="single.html">Nama Provider</a></h6>
														<span class="size">Deskripsi Provider</span>
														<a href="#" data-text="Order" class="my-cart-b item_add">Order</a>
														<p ><em class="item_price">Nama Kota</em></p>
													</div>
												</div>
											</div>
											<div class="col-md-3 cap-left simpleCart_shelfItem">
												<div class="grid-arr">
													<div  class="grid-arrival">
														<figure>		
															<a href="single.html">
																<div class="grid-img">
																	<img  src="images/p10.jpg" class="img-responsive" alt="">
																</div>
																<div class="grid-img">
																	<img  src="images/p9.jpg" class="img-responsive"  alt="">
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
														<h6><a href="single.html">Nama Provider</a></h6>
														<span class="size">Deskripsi Provider</span>
														<a href="#" data-text="Order" class="my-cart-b item_add">Order</a>
														<p ><em class="item_price">Nama Kota</em></p>
													</div>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="new-arrivals-w3agile" style="padding-top: 0;">
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
		<!--content-->
		<!--divider-->
		<div style="background-color:#0072FF; height: 100px; "></div>
		<!--divider-->
		<!--kelebihan-->
		<div class="sign-in-button" style="font-size: 60px; text-align: center;">
			Kelebihan <span style="color: black;">bikin</span> di <img src="images/logo.png">
		</div>
		<div class="sign-in-button kelebihan" style="background-color:#000; height: 80px; width: 100%;color: #0072FF; ">
			<ul >
				<li><img src="images/r.jpg">Mudah</li>
				<li><img src="images/r.jpg">Cepat</li>
				<li><img src="images/r.jpg">Aman</li>
				<li><img src="images/r.jpg">Nyaman</li>
			</ul>
		</div>
		<!--kelebihan-->
		<!--footer-->
		<div>
			<div class="col-md-3 footer" style="position: relative; clear:both; padding-bottom: 0;" >
				<div style="padding-bottom: 0">
					<h4 style="color: black; padding-bottom: 0;"><img src="images/logo.png" style="width: 100%;"> </h4>
					<p style="color: black;"s> Jalan DR Setiabudi 229 Bandung, West Java, Indonesia 46196</p>
					<div class="social-icon">
						<a href="#"><i class="icon"></i></a>
						<a href="#"><i class="icon1"></i></a>
						<a href="#"><i class="icon2"></i></a>
						<a href="#"><i class="icon3"></i></a>
					</div>
				</div>
			</div>
		
			<div class="col-md-9 footer" style="background-color:#0072FF; height: 282px">
				<div class="col-md-4 " style="clear: both;">
					<h4>Bikin</h4>
					<ul>
						<li><a href="checkout.html">About Us</a></li>
						<li><a href="login.html">Syarat dan Ketentuan</a></li>
						<li><a href="registered.html"> Kebijakan Privasi </a></li>
					</ul>
				</div>
				<div class="col-md-4 ">
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
		</div>

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
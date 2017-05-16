<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Topcareer Indonesia</title>
		<link href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Ubuntu|Montserrat|Roboto" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bower_components/owl.carousel/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bower_components/owl.carousel/dist/assets/owl.theme.default.min.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-2 col-lg-2 relative">
					<div class="left-side-banner hidden-sm">
						<a href="#">
							<img src="<?php echo base_url(); ?>assets/gambar/serv/banner.jpg">
						</a>
					</div>
				</div>
				<!-- Content Center -->
				<div class="col-sm-8 no-gutter col-lg-8">
					<div class="wrapper-center">
						<div class="logo">
							<img class="" src="<?php echo base_url(); ?>assets/gambar/serv/logo.png">
							<div class="utility col-sm-offset-10 col-sm-2 no-gutter">
								<a href="#"><span class="glyphicon glyphicon-user"></span></a>
								<a href="#"><span class="glyphicon glyphicon-search"></span></a>
							</div>
						</div>
						<div class="banner-center">
							<a href="#">
								<img class="" src="<?php echo base_url(); ?>assets/gambar/serv/banner-horizontal.jpg">
							</a>
						</div>
						<div class="first-wrapper row no-margin">
							<div id="first-sub-left" class="col-sm-2 no-gutter">
								<div class="wrapper-box">
									<span class="hashtag">#ahok</span>
								</div>
								<div class="wrapper-box">
									<span class="hashtag">#ahok</span>
								</div>
								<div class="wrapper-box">
									<span class="hashtag">#ahok</span>
								</div>
							</div>
							<div class="col-sm-8">
								<div id="myCarousel" class="carousel slide" data-ride="carousel">
								 	<div class="carousel-inner">
										<div class="item active">
											<a href="#">
												<img id="first-img" src="<?php echo base_url(); ?>assets/gambar/serv/banner-tengah.jpg">
												<span href="#">NASKAH</span>
											</a>
										</div>
										<div class="item">
											<a href="#">
												<img id="first-img" src="<?php echo base_url(); ?>assets/gambar/serv/banner-tengah.jpg">
												<span href="#">VIDEO PODCAST</span>
											</a>
										</div>
										<div class="item">
											<a href="#">
												<img id="first-img" src="<?php echo base_url(); ?>assets/gambar/serv/banner-tengah.jpg">
												<span href="#">OPINI</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div id="first-sub-right" class="col-sm-2 no-gutter">
								<div class="wrapper-box">
									<span class="hashtag">#ahok</span>
								</div>
								<div class="wrapper-box">
									<span class="hashtag">#ahok</span>
								</div>
								<div class="wrapper-box">
									<span class="hashtag">#ahok</span>
								</div>
							</div>
						</div>
					</div>
					
					<!-- berita -->
					<div class="big-divider">
						<span class="text-divider">Berita</span>
					</div>

					<div id="menu-berita" class="row no-margin">
						<div class="col-md-3">
							<div class="wrapper-thumbnail-4">
								<a href="#">
									<img class="img-thumbnail-4" src="<?php echo base_url(); ?>assets/gambar/serv/banner-tengah.jpg">
									<span class="thumbnail-4-text">Naskah</span>
								</a>
							</div>
						</div>

						<div class="col-md-3">
							<div class="wrapper-thumbnail-4">
								<a href="#">
									<img class="img-thumbnail-4" src="<?php echo base_url(); ?>assets/gambar/serv/banner-tengah.jpg">
									<span class="thumbnail-4-text">Video Podcast</span>
								</a>
							</div>
						</div>

						<div class="col-md-3">
							<div class="wrapper-thumbnail-4">
								<a href="#">
									<img class="img-thumbnail-4" src="<?php echo base_url(); ?>assets/gambar/serv/banner-tengah.jpg">
									<span class="thumbnail-4-text">Opini</span>
								</a>
							</div>
						</div>

						<div class="col-md-3">
							<div class="wrapper-thumbnail-4">
								<a href="#">
									<img class="img-thumbnail-4" src="<?php echo base_url(); ?>assets/gambar/serv/banner-tengah.jpg">
									<span class="thumbnail-4-text">EMAGAZINE</span>
								</a>
							</div>
						</div>
					</div>
					<!-- /berita -->

					<!-- loker -->
					<div id="loker">
						<div class="big-divider">
							<span class="text-divider">Loker</span>
						</div>
						
						<div class="row no-margin">
							<div class="col-sm-12 no-gutter">
								<div id="carouselLoker" class="carousel slide" data-ride="carousel">
								 	<div class="carousel-inner">
										<div class="wrapper-relative item active">
											<a href="#">
												<img src="<?php echo base_url(); ?>assets/gambar/serv/jalan-jalan.jpg">
												<span href="#">APAKAH ANDA MAU PROFSE SEPERTI INI ? TEMUKAN DISINI</span>
											</a>
										</div>
										<div class="wrapper-relative item">
											<a href="#">
												<img src="<?php echo base_url(); ?>assets/gambar/serv/banner-tengah.jpg">
												<span href="#">VIDEO PODCAST</span>
											</a>
										</div>
										<div class="wrapper-relative item">
											<a href="#">
												<img src="<?php echo base_url(); ?>assets/gambar/serv/banner-tengah.jpg">
												<span href="#">OPINI</span>
											</a>
										</div>
									</div>

									<a class="left carousel-control" href="#carouselLoker" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="right carousel-control" href="#carouselLoker" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
							</div>
							
							<div id="loker-sub-menu" class="col-md-12 no-gutter">
								<div class="col-md-4">
									<div class="wrapper-relative wrapper-thumbnail-3">
										<a href="#">
											<img src="<?php echo base_url(); ?>assets/gambar/serv/banner-tengah.jpg">
											<span href="#">OPINI</span>
										</a>
									</div>
								</div>

								<div class="col-md-4">
									<div class="wrapper-relative wrapper-thumbnail-3">
										<a href="#">
											<img src="<?php echo base_url(); ?>assets/gambar/serv/banner-tengah.jpg">
											<span href="#">OPINI</span>
										</a>
									</div>
								</div>

								<div class="col-md-4">
									<div class="wrapper-relative wrapper-thumbnail-3">
										<a href="#">
											<img src="<?php echo base_url(); ?>assets/gambar/serv/banner-tengah.jpg">
											<span href="#">OPINI</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /loker -->

				</div>
				<!-- /Content Center -->
				<div class="col-sm-2">
					<div class="right-side-banner  hidden-sm">
						<a href="#">
							<img src="<?php echo base_url(); ?>assets/gambar/serv/banner.jpg">
						</a>
					</div>
				</div>
			</div>
		</div>	
		
		<!-- javascript -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/bower_components/owl.carousel/dist/owl.carousel.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/js.js"></script>
	</body>
</html>
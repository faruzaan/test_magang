<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/logo_smakzi.png" type="image/png">
	<title>My Portfolio</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<!--================ Start Header Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="img/logo_smakzi.png" alt="" width="50px" height="auto"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<?php if (isset($_GET['about'])){
						echo "<div class='collapse navbar-collapse offset' id='navbarSupportedContent'>
							<ul class='nav navbar-nav menu_nav justify-content-end'>
								<li class='nav-item'><a class='nav-link' href='index.php'>Home</a></li>
								<li class='nav-item active'><a class='nav-link' href='?about'>About</a></li>
								<li class='nav-item'><a class='nav-link' href='?services'>Services</a></li>
								<li class='nav-item'><a class='nav-link' href='?contact'>Contact</a></li>
								<li class='nav-item'><a class='nav-link' href='?admin'>Admin</a></li>
							</ul>
						</div>";
					}
					elseif (isset($_GET['services'])) 
					{
						echo "<div class='collapse navbar-collapse offset' id='navbarSupportedContent'>
							<ul class='nav navbar-nav menu_nav justify-content-end'>
								<li class='nav-item'><a class='nav-link' href='index.php'>Home</a></li>
								<li class='nav-item'><a class='nav-link' href='?about'>About</a></li>
								<li class='nav-item active'><a class='nav-link' href='?services'>Services</a></li>
								<li class='nav-item'><a class='nav-link' href='?contact'>Contact</a></li>
								<li class='nav-item'><a class='nav-link' href='?admin'>Admin</a></li>
							</ul>
						</div>";
					}
					elseif (isset($_GET['page'])) 
					{
						echo "<div class='collapse navbar-collapse offset' id='navbarSupportedContent'>
							<ul class='nav navbar-nav menu_nav justify-content-end'>
								<li class='nav-item'><a class='nav-link' href='index.php'>Home</a></li>
								<li class='nav-item active'><a class='nav-link' href='?about'>About</a></li>
								<li class='nav-item'><a class='nav-link' href='?services'>Services</a></li>
								<li class='nav-item'><a class='nav-link' href='?contact'>Contact</a></li>
								<li class='nav-item'><a class='nav-link' href='?admin'>Admin</a></li>
							</ul>
						</div>";
					}
					elseif (isset($_GET['contact'])) {
						echo "<div class='collapse navbar-collapse offset' id='navbarSupportedContent'>
							<ul class='nav navbar-nav menu_nav justify-content-end'>
								<li class='nav-item '><a class='nav-link' href='index.php'>Home</a></li>
								<li class='nav-item '><a class='nav-link' href='?about'>About</a></li>
								<li class='nav-item '><a class='nav-link' href='?services'>Services</a></li>
								<li class='nav-item active'><a class='nav-link' href='?contact'>Contact</a></li>
								<li class='nav-item'><a class='nav-link' href='?admin'>Admin</a></li>
							</ul>
						</div>";
					}
					elseif (isset($_GET['admin'])) {
						echo "<div class='collapse navbar-collapse offset' id='navbarSupportedContent'>
							<ul class='nav navbar-nav menu_nav justify-content-end'>
								<li class='nav-item '><a class='nav-link' href='index.php'>Home</a></li>
								<li class='nav-item '><a class='nav-link' href='?about'>About</a></li>
								<li class='nav-item '><a class='nav-link' href='?services'>Services</a></li>
								<li class='nav-item'><a class='nav-link' href='?contact'>Contact</a></li>
								<li class='nav-item active'><a class='nav-link' href='?admin'>Admin</a></li>
							</ul>
						</div>";
					}
					else
					{
						echo "<div class='collapse navbar-collapse offset' id='navbarSupportedContent'>
						<ul class='nav navbar-nav menu_nav justify-content-end'>
							<li class='nav-item active'><a class='nav-link' href='index.php'>Home</a></li>
							<li class='nav-item'><a class='nav-link' href='?about'>About</a></li>
							<li class='nav-item'><a class='nav-link' href='?services'>Services</a></li>
							<li class='nav-item'><a class='nav-link' href='?contact'>Contact</a></li>
							<li class='nav-item'><a class='nav-link' href='?admin'>Admin</a></li>
						</ul>
					</div>";
					}
					?>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Area =================-->
	<?php if (isset($_GET['about'])) :
		include 'about.php';
	elseif (isset($_GET['services'])) :
		include 'services.php';
	elseif (isset($_GET['contact'])) :
		include 'contact.php';
	elseif (isset($_GET['admin'])) :
		include 'admin.php';
	elseif (isset($_GET['page'])) :
		include 'projek/klinik.php';
	else :
	?>
	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="banner_content">
							<h3 class="text-uppercase">Hell0</h3>
							<h1 class="text-uppercase">I am m farhan f</h1>
							<h5 class="text-uppercase">smkn 1 cianjur</h5>
							
						</div>
					</div>
					<div class="col-lg-5">
						<div class="home_right_img">
							<img class="" src="img/banner/home-right.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->
	
	<!--================ Start About Us Area =================-->
	<?php 
	include 'about.php';
	 ?>
	<!--================ End About Us Area =================-->

	
	<!--================ Start Features Area =================-->
	<?php 
	include 'services.php';
	 ?>
	<!--================ End Features Area =================-->

	<?php endif; ?>
	<!--================Footer Area =================-->
	<footer class="footer_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="footer_top flex-column">
						<div class="footer_logo">
							<a href="#">
								<img src="img/logo.png" alt="">
							</a>
							<h4>Follow Me</h4>
						</div>
						<div class="footer_social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</php>
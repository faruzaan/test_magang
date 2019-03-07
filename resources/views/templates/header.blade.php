<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{ asset('assets') }}/home/img/logo_smakzi.png" type="image/png">
	<title>Satner Portfolio</title>
	<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('assets') }}/home/css/bootstrap.css">
	<link rel="stylesheet" href="{{ asset('assets') }}/home/vendors/linericon/style.css">
	<link rel="stylesheet" href="{{ asset('assets') }}/home/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('assets') }}/home/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="{{ asset('assets') }}/home/css/magnific-popup.css">
	<link rel="stylesheet" href="{{ asset('assets') }}/home/vendors/nice-select/css/nice-select.css">
	<!-- main css -->
	<link rel="stylesheet" href="{{ asset('assets') }}/home/css/style.css">
	@stack('style')
</head>

<body>

	<!--================ Start Header Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="{{ url('/') }}"><img src="{{ asset('assets') }}/home/img/logo_smakzi.png" alt="" height="80px"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							
							
							@if (\Auth::user())
								<li class="nav-item"><a class="nav-link" href="{{ url('admin') }}">Admin</a></li>
								<li class="nav-item"><a class="nav-link" href="{{ url('admin') }}"><form method="POST" action="{{ url('logout') }}">
									{{ csrf_field() }}
									<button type="submit">LOGOUT</button>
								</form></a></li>

							@else
								<li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
								<li class="nav-item"><a class="nav-link" href="{{ url('about') }}">About</a></li>
								<li class="nav-item"><a class="nav-link" href="{{ url('services') }}">Services</a></li>
								<li class="nav-item"><a class="nav-link" href="{{ url('contact') }}">Contact</a></li>
								<li class="nav-item"><a class="nav-link" href="{{ url('admin') }}">Admin</a></li>

							@endif
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
    <!--================ End Header Area =================-->
    <div class="content-wrapper">
     @yield('konten')
    </div>
    @include('templates/footer')
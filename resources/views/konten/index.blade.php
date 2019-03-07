@extends('templates/header')

@section('konten')
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
						<img class="" src="{{ asset('assets') }}/home/img/banner/home-right.png" alt="">
						</div>
					</div>
				</div>
				@if (\Auth::user())
					<div class="row">
					<form action="{{url('logout')}}" method="POST">
						{{ csrf_field() }}
						<button type="submit" class="btn btn-default btn-flat">Logout</button>
					</form>
				</div>
				@endif
				
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->
@endsection


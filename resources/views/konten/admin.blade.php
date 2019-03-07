@extends('templates/header')
@push('style')
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/admin/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/admin/vendor/animate/animate.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/admin/vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/admin/vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/admin/vendor/select2/select2.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/admin/vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/admin/css/util.css">
            <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/admin/css/main.css">
        <!--===============================================================================================-->
    @endpush
@section('konten')
    <div class="container-contact100">  
        <div class="wrap-contact100" style="margin-top: 200px;">
            
        <form action="{{ url('admin') }}" method="POST" class="contact100-form validate-form">
            {{ csrf_field() }}
            @include('templates/feedback')
				<span class="contact100-form-title">
					Buat Preview Projek Baru
				</span>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Platform</span>
					<input class="input100" type="text" name="gambar_logo" placeholder="Masukan platform projek">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Judul Projek</span>
					<input class="input100" type="text" name="judul" placeholder="Masukan nama projek">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input">
					<span class="label-input100">Descripsi</span>
					<textarea class="input100" name="desc1" placeholder="Masukan deskipsi projek"></textarea>
					<span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input">
					<span class="label-input100">Status</span>
					<input class="input100" type="text" name="desc2" placeholder="Masukan nama projek">
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button type="submit" class="contact100-form-btn">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>



    <div id="dropDownSelect1"></div>
    
@endsection
@push('javas')
        <script src="{{ asset('assets') }}/admin/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('assets') }}/admin/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('assets') }}/admin/vendor/bootstrap/js/popper.js"></script>
        <script src="{{ asset('assets') }}/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('assets') }}/admin/vendor/select2/select2.min.js"></script>
        <script>
            $(".selection-2").select2({
                minimumResultsForSearch: 20,
                dropdownParent: $('#dropDownSelect1')
            });
        </script>
    <!--===============================================================================================-->
        <script src="{{ asset('assets') }}/admin/vendor/daterangepicker/moment.min.js"></script>
        <script src="{{ asset('assets') }}/admin/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('assets') }}/admin/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('assets') }}/admin/js/main.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
    @endpush

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'ReadHome') }}</title>

	<link rel="stylesheet" type="text/css" href="{{asset('log/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('log/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('log/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('log/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('log/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('log/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('log/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('log/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('log/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('log/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100" style="background-repeat: no-repeat; background-size: 100%; background-image: url({{ asset('log/images/bg-01.jpg')}});">
			<div class="login100-more">
        <div style="background-color: white; border-radius: 10px;">
				<form method="POST" action="{{ route('password.email') }}">
				@csrf
					<span class="login100-form-title p-b-43">
						Reset password
					</span>


					<div class="wrap-input100 validate-input form-control @error('email') is-invalid @enderror" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" >
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
            @error('email')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
					</div>


					<div class="container-login100-form-btn">
						<button type = 'submit' class="login100-form-btn">
							Send Password Reset Link
						</button>
					</div>
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or <a href="{{ route('register') }}">sign up</a>
						</span>
					</div>
				</form>
      </div>
      </div>
		</div>
	</div>





<!--===============================================================================================-->
	<script src="{{ asset('log/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('log/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('log/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('log/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('log/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('log/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{ asset('log/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('log/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('log/js/main.js')}}"></script>

</body>
</html>

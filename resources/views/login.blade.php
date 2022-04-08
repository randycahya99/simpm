<!DOCTYPE html>
<html lang="en">
<head>
    <!-- General Metas -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	<!-- Force Latest IE rendering engine -->
	<title>SIMPM - Login</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('assets/login/css/base.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/login/css/skeleton.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/login/css/layout.css') }}">
</head>
<body>
    
	{{-- <div class="notice">
		<a href="" class="close">close</a>
		<p class="warn">Whoops! We didn't recognise your username or password. Please try again.</p>
	</div> --}}



	<!-- Primary Page Layout -->

	<div class="container">
		
		<div class="form-bg">
			<form action="/postLogin" method="POST">

				@csrf

				<h2>Login</h2>
				<p><input type="text" name="username" id="username" placeholder="Username"></p>
				<p><input type="password" name="password" id="password" placeholder="Password"></p>
				
				@if (session('message'))
                    <div style="color: red; text-align: center" role="alert">
                        {{ session('message') }}
                    </div>
                @endif

				<label for="remember">
					<input type="checkbox" id="remember" value="remember" />
					<span>Remember me on this computer</span>
				</label>
				<button type="submit"></button>
			<form>
		</div>

	
		<p class="forgot">Forgot your password? <a href="">Click here to reset it.</a></p>


	</div><!-- container -->

	<!-- JS  -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script>
	<script src="js/app.js"></script>
	
<!-- End Document -->

</body>
</html>
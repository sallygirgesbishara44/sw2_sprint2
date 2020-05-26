@extends('layouts.master')
<head>
  

    <!-- Main css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
</head>
@section('content')

<div class="limiter">
        
        <div class="container-login100"  >
        <div class="mb-3"></div>
      <div action="/logs" method="POST">
      
      </div>
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="/logs" method="POST"> 

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
                    @csrf
					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" >
							Login
						</button>
                    </div>
                    <br>
                    <div class="w-full text-center">
					<p class="loginhere">
                        Don't have an account ? <a href="/register/submit" class="loginhere-link">Register</a>
                    </p>
					</div>
				</form>
			</div>
		</div>
	</div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    @endsection
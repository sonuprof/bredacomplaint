<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title></title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="Basix logo.jpg">
	<link rel="icon" type="image/png" sizes="32x32" href="Basix logo.jpg">
	<link rel="icon" type="image/png" sizes="16x16" href="Basix logo.jpg">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendors/styles/style.css')}}">

</head>

<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="#">
					<!-- <img src="{{asset('assets/img/logo-s.png')}}" alt=" Logo" style="height: 60px !important;"> -->
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<img src="{{asset('assets/img/logo-s.png')}}" alt=" logo" style="width: 60px !important; height: 60px !important;">
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap  text-center">
		<div class="container">
			<div class="row text-center">
				<!-- <div class="col-md-6 col-lg-7 pt-0 text-center">
					<img src="vendors/images/survey.png" style="width: 60%; height:80; opacity:80;border-radius:25px;filter: drop-shadow(#8db7d9 1rem 1rem 10px);" alt="">
				</div> -->
			
				<div class="col-12 ">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
						@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif
							<h2 class="text-center text-primary">Login </h2>
						</div>
						<form action="{{route('loginuser')}}" method="POST">
							@csrf
							<div class="select-role">

							</div>
							
							<div class="input-group custom">
								<input type="text" name="email" class="form-control form-control-lg" placeholder="Useremail">

								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
								
							</div>
							
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" name="password" id="pass" placeholder="**********">
								<div class="input-group-append custom">
									<span class="input-group-text" style="cursor:pointer;" onclick="showpass()"><i class="icon-copy fa fa-eye-slash" id="hidePass" style="display:block;"></i><i class="icon-copy fa fa-eye" id="showPass" style="display:none;"></i></span>
								</div>
							</div>
							<script>
								function showpass() {
									var pass = document.querySelector('#pass');
									var hide = document.querySelector('#hidePass');
									var show = document.querySelector('#showPass');
									console.log(pass.getAttribute('type'));
									console.log(pass.getAttribute('type'));
									pass.setAttribute('type', 'text');
									hide.style.display = 'none';
									show.style.display = 'block';
									setTimeout(() => {
										pass.setAttribute('type', 'password');
										hide.style.display = 'block';
										show.style.display = 'none';
									}, 2000);
								}
							</script>

							<div class="row pb-30">
								<div class="col-6">
									<!-- <div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Remember</label>
									</div> -->
								</div>
								<!-- <div class="col-6">
									<div class="forgot-password"><a href="forgot-password.html">Forgot Password</a></div>
								</div> -->
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										<!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										-->

										<button type="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
									</div>
									<!-- <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div> -->
									<div class="input-group mb-0">
										<!-- <a class="btn btn-outline-primary btn-lg btn-block" href="{{route('add-user')}}">Register To Create Account</a> -->
									</div> 
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="{{asset('vendors/scripts/core.js')}}"></script>
	<script src="{{asset('vendors/scripts/script.min.js')}}"></script>
	<script src="{{asset('vendors/scripts/process.js')}}"></script>
	<script src="{{asset('vendors/scripts/layout-settings.js')}}"></script>

</body>

</html>
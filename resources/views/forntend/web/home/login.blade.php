<!DOCTYPE html>
<html lang="en">


<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />

	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />

	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="{{ asset('/forntend/assets/web/')}}/assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/forntend/assets/web/')}}/assets/images/favicon.png" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>EduChamp : Login </title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/forntend/assets/web/')}}/assets/css/assets.css">

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/forntend/assets/web/')}}/assets/css/typography.css">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/forntend/assets/web/')}}/assets/css/shortcodes/shortcodes.css">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/forntend/assets/web/')}}/assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('/forntend/assets/web/')}}/assets/css/color/color-1.css">

</head>
<body id="bg">
<div class="page-wraper">
	<div id="loading-icon-bx"></div>
	<div class="account-form">
		<div class="account-head" style="background-image:url({{ asset('/forntend/assets/web/')}}/assets/images/background/bg2.jpg);">
			<a href="{{ url('/') }}"><img src="{{ asset('/forntend/assets/web/')}}/assets/images/logo-white-2.png" alt=""></a>
		</div>
		<div class="account-form-inner">
			<div class="account-container">
				<div class="heading-bx left">
					<h2 class="title-head">Login to your <span>Account</span></h2>
					<p>Don't have an account? <a href="{{ url('/register') }}">Create one here</a></p>
				</div>
				<form class="contact-bx" action="{{ url('/student/login') }}" method="post">
                    @csrf
					<div class="row placeani">
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your Email</label>
									<input name="email" type="email" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your Password</label>
									<input name="password" type="password" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group form-forget">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
									<label class="custom-control-label" for="customControlAutosizing">Remember me</label>
								</div>
								<a href="forget-password.html" class="ml-auto">Forgot Password?</a>
							</div>
						</div>
						<div class="col-lg-12 m-b30">
							<button name="submit" type="submit" value="Submit" class="btn button-md">Login</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- External JavaScripts -->
<script src="{{ asset('/forntend/assets/web/')}}/assets/js/jquery.min.js"></script>
<script src="{{ asset('/forntend/assets/web/')}}/assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="{{ asset('/forntend/assets/web/')}}/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('/forntend/assets/web/')}}/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="{{ asset('/forntend/assets/web/')}}/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="{{ asset('/forntend/assets/web/')}}/assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="{{ asset('/forntend/assets/web/')}}/assets/vendors/counter/waypoints-min.js"></script>
<script src="{{ asset('/forntend/assets/web/')}}/assets/vendors/counter/counterup.min.js"></script>
<script src="{{ asset('/forntend/assets/web/')}}/assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="{{ asset('/forntend/assets/web/')}}/assets/vendors/masonry/masonry.js"></script>
<script src="{{ asset('/forntend/assets/web/')}}/assets/vendors/masonry/filter.js"></script>
<script src="{{ asset('/forntend/assets/web/')}}/assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src="{{ asset('/forntend/assets/web/')}}/assets/js/functions.js"></script>
<script src="{{ asset('/forntend/assets/web/')}}/assets/js/contact.js"></script>
<script src='{{ asset('/forntend/assets/web/')}}/assets/vendors/switcher/switcher.js'></script>
</body>

</html>


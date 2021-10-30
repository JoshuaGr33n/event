<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from labartisan.net/demo/big-event/index-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Aug 2021 13:55:34 GMT -->
<head>
	<meta charset="utf-8">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>BigEvent</title>


	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i%7CPoppins:300,400,500,600,700"
		rel="stylesheet">

	<!-- Bootstrap -->
	<link href="{{ asset('public/assets/assets/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Font-Awesome -->
	<link href="{{ asset('public/assets/assets/css/font-awesome.min.css') }}" rel="stylesheet">

	<!-- Flat icon -->
	<link href="{{ asset('public/assets/assets/flaticon/flaticon.css') }}" rel="stylesheet">

	<!-- Swiper -->
	<link href="{{ asset('public/assets/assets/css/swiper.min.css') }}" rel="stylesheet">

	<!-- Lightcase -->
	<link href="{{ asset('public/assets/assets/css/lightcase.css') }}" rel="stylesheet">

	<!-- quick-view -->
	<link href="{{ asset('public/assets/assets/css/quick-view.css') }}" rel="stylesheet">

	<!-- nstSlider -->
	<link href="{{ asset('public/assets/assets/css/jquery.nstSlider.css') }}" rel="stylesheet">

	<!-- flexslider -->
	<link href="{{ asset('public/assets/assets/css/flexslider.css') }}" rel="stylesheet">

	<!-- banner-bg -->
	<link href="{{ asset('public/assets/assets/css/banner-bg.css') }}" rel="stylesheet">

	<!-- Style -->
	<link href="{{ asset('public/assets/assets/css/style2.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/assets/css/header.css') }}" rel="stylesheet">

	<!-- Responsive -->
	<link href="{{ asset('public/assets/assets/css/responsive.css') }}" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->


  <style type="text/css">
  @media only screen and (max-width: 800px) {
	  .comment-input{
		  width:50%;margin-right:700px
	  }
  }
  </style>
</head>
     @php
        use App\RegisterUsers;
       
        @endphp
@php $reg_users = RegisterUsers::all(); @endphp
<body class="dark-layout">
	<div class="box-layout">
		<!-- header start here-->
		<header>
			<div class="menu-fixed bgc-trans-4">
				<nav class="navbar navbar-expand-lg">
					<div class="container">
						<a class="navbar-brand" href="#"><img src="{{ asset('public/assets/images/logo.png') }}" alt="logo"
								class="img-responsive"></a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
							data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
							aria-expanded="false" aria-label="Toggle navigation">
							<i class="fa fa-bars"></i>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<div class="main-menu">
								<div class="menu-left">
									
									
								</div>
								<div class="menu-right">
									<ul class="header-cart-ticket-option">
										
										<li><a href="#schedules" class="menu-button">Register</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</header>
		<!-- header end here -->


		<!-- banner start here-->
		<section class="dark-overlay-left banner banner-dark banner-seven">
			<ul class="cb-slideshow cb-slideshow-two">
				<li><span>Image 01</span>
					<div></div>
				</li>
				<li><span>Image 02</span>
					<div></div>
				</li>
				<li><span>Image 03</span>
					<div></div>
				</li>
				<li><span>Image 04</span>
					<div></div>
				</li>
				<li><span>Image 05</span>
					<div></div>
				</li>
				<li><span>Image 06</span>
					<div></div>
				</li>
			</ul>
			<div class="banner-overlay">
				<div class="container">
					<div class="banner-seven-content">
						<div class="row">
							<div class="col-lg-5">
								<div class="seven-content-right-bg">
									<div class="seven-content-right">
										<div class="content">
											<span class="counter" data-count="22">0</span>
											<p>December 2021</p>
											<ul id="countdown" class="countdown">
												<li class="clock-item"><span class="count-number days">00</span>
													<p class="days_text count-text">Days</p>
												</li>

												<li class="clock-item"><span class="count-number hours">00</span>
													<p class="hours_text count-text">Hours</p>
												</li>

												<li class="clock-item"><span class="count-number minutes">00</span>
													<p class="minutes_text count-text">Min</p>
												</li>

												<li class="clock-item"><span class="count-number seconds">00</span>
													<p class="seconds_text count-text">Sec</p>
												</li>
											</ul>
										</div>
									</div><!-- content-right -->
								</div><!-- content-right bg -->
							</div>
							<div class="col-lg-7">
								<div class="seven-content-left">
									<div class="content">
										<h3>Music Festival</h3>
										<h1>Event Conference 2021</h1>
										<ul>
											<li><span class="flaticon-tool"></span>24-29 December, 2021</li>
											<li><span class="flaticon-signs"></span>21 King Street, Lagos,
												Nigeria.</li>
										</ul>
									</div>
									<ul class="event-info">
										<li>
											<i class="fa fa-microphone" aria-hidden="true"></i>
											{{count($reg_users)}} Registered Seats
										</li>
										<li>
											<i class="fa fa-ticket" aria-hidden="true"></i>
											224+ Tickets
										</li>
										<li>
											<i class="fa fa-microphone" aria-hidden="true"></i>
											330+ Seats
										</li>
									</ul>
								</div><!-- content-left -->
							</div>
						</div><!-- row -->



					</div><!-- banner-content -->
				</div><!-- container-->
			</div><!-- overlay -->
		</section>
		<!-- banner end here -->


		

        @yield('content')












		<!-- Map start here -->
		<!-- <section id="map" class="home-map">
			<div id="home-map" class="map"></div>
		</section> -->
		<!-- Map end here -->



		<!-- Newsletter Start here -->
		<section class="newsletter newsletter-uhv">
			<div class="container">
				<p>Join Our Newsletter</p>
				<form>
					<input type="email" name="email" placeholder="Enter your e-mail here">
					<input type="submit" name="submit" value="Subscribe now">
				</form>
			</div><!-- container -->
		</section>
		<!-- Newsletter End here -->



		<!-- Footer Start here -->
		<footer class="footer-seven" style="height:300px">
			<div class="overlay">
				<div class="container"  style="height:100px">
					<h2>BigEvent</h2>
					<ul class="event-social">
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
					<p>Copyright &copy; 2021. Design and Development by <a
							href="#">Dosh Services</a></p>
				</div>
			</div>
		</footer>
		<!-- Footer End here -->
	</div>


	<!-- jQuery -->
	<script src="{{ asset('public/assets/assets/js/jquery-3.1.1.min.js') }}"></script>
	<script src="{{ asset('public/assets/assets/js/jquery-migrate-1.4.1.min.js') }}"></script>

	<!-- Bootstrap -->
	<script src="{{ asset('public/assets/assets/js/bootstrap.min.js') }}"></script>

	<!-- Coundown -->
	<script src="{{ asset('public/assets/assets/js/jquery.countdown.min.js') }}"></script>

	<!--Swiper-->
	<script src="{{ asset('public/assets/assets/js/swiper.jquery.min.js') }}"></script>

	<!--Masonry-->
	<script src="{{ asset('public/assets/assets/js/masonry.pkgd.min.js') }}"></script>

	<!--Lightcase-->
	<script src="{{ asset('public/assets/assets/js/lightcase.js') }}"></script>

	<!--modernizr-->
	<script src="{{ asset('public/assets/assets/js/modernizr.js') }}"></script>

	<!--velocity-->
	<script src="{{ asset('public/assets/assets/js/velocity.min.js') }}"></script>

	<!--quick-view-->
	<script src="{{ asset('public/assets/assets/js/quick-view.js') }}"></script>

	<!--nstSlider-->
	<script src="{{ asset('public/assets/assets/js/jquery.nstSlider.js') }}"></script>
	<script src="{{ asset('public/assets/assets/js/nstfunctions.js') }}"></script>

	<!--flexslider-->
	<script src="{{ asset('public/assets/assets/js/flexslider-min.js') }}"></script>
	<script src="{{ asset('public/assets/assets/js/flexfunctions.js') }}"></script>

	<!--directional-->
	<script src="{{ asset('public/assets/assets/js/directional-hover.js') }}"></script>

	<!--easing-->
	<script src="{{ asset('public/assets/assets/js/jquery.easing.min.js') }}"></script>
	<!-- parallax.js -->
	<script src="{{ asset('public/assets/assets/js/parallax.js') }}"></script>
	<script src="{{ asset('public/assets/assets/js/theia-sticky-sidebar.js') }}"></script>

	<!-- Google Map -->
	<script type="text/javascript"
		src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAQlXnmyNPAeN3c3HNyWoUMqDk6bDF31Cg"></script>

	<!-- Custom -->
	<script src="{{ asset('public/assets/assets/js/custom.js') }}"></script>

	<script type="text/javascript">
		//Home Page map
		var styleArray = [{
			"featureType": "water",
			"elementType": "geometry.fill",
			"stylers": [{
				"color": "#c7c7c7"
			}]
		}];

		var mapOptions = {
			center: new google.maps.LatLng(55.864237, -4.251806),
			zoom: 09,
			styles: styleArray,
			scrollwheel: false,
			backgroundColor: 'transparent',
			mapTypeControl: false,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById("home-map"),
			mapOptions);
		var myLatlng = new google.maps.LatLng(55.864237, -4.251806);
		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			icon: "{{ asset('public/assets/images/map-icon1.png') }}"
		});

	</script>
</body>


</html>
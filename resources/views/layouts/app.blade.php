<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>La Depeche Du Nord</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="La Depeche Du nord, Premium News Website" />
	<meta name="keywords" content="La Depeche Du Nord, News, Morocco, Tangier, Casablanca" />
	<meta name="author" content="Bahnini Saad | Mohammed Chanaa" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ ('TemplateBootstrap/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ ('TemplateBootstrap/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ ('TemplateBootstrap/css/bootstrap.css')}}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ ('TemplateBootstrap/css/flexslider.css')}}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ ('TemplateBootstrap//magnific-popup.css')}}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ ('TemplateBootstrap/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ ('TemplateBootstrap/css/owl.theme.default.min.css')}}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ ('TemplateBootstrap/css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{ ('TemplateBootstrap/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- jQuery -->
	<script src="{{ ('TemplateBootstrap/js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ ('TemplateBootstrap/js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ ('TemplateBootstrap/js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ ('TemplateBootstrap/js/jquery.waypoints.min.js') }}"></script>
	<!-- Flexslider -->
	<script src="{{ ('TemplateBootstrap/js/jquery.flexslider-min.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ ('TemplateBootstrap/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ ('TemplateBootstrap/js/magnific-popup-options.js') }}"></script>
	<!-- Owl Carousel -->
	<script src="{{ ('TemplateBootstrap/js/owl.carousel.min.js') }}"></script>
	<!-- Sticky Kit -->
	<script src="{{ ('TemplateBootstrap/js/sticky-kit.min.js') }}"></script>


	<!-- MAIN JS -->
	<script src="{{ ('TemplateBootstrap/js/main.js') }}"></script>


    </head>
<body>
<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<h1 id="colorlib-logo"><a href="index.html">La Depeche Du Nord</a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
                @guest
                            <li class="{{ Request::is('/') ? 'colorlib-active' : '' }} "><a href="{{ url('/') }}">Home</a></li>
                            <li class="{{ Request::is('societe') ? 'colorlib-active' : '' }} "><a href="{{ url('/societe') }}">Societe</a></li>
                            <li class="{{ Request::is('culture') ? 'colorlib-active' : '' }} "><a href="{{ url('/culture') }}">Culture</a></li>
                            <li class="{{ Request::is('economie') ? 'colorlib-active' : '' }} "><a href="{{ url('/economie') }}">Economie</a></li>
                            <li class="{{ Request::is('tourisme') ? 'colorlib-active' : '' }} "><a href="{{ url('/tourisme') }}">Tourisme</a></li>
                            <li class="{{ Request::is('gazettemaritime') ? 'colorlib-active' : '' }} "><a href="{{ route('gazettemaritime') }}">Gazette Maritime</a></li>
                            <li class="{{ Request::is('login') ? 'colorlib-active' : '' }} "><a href="{{ route('login') }}">Login</a></li>
                            <li class="{{ Request::is('register') ? 'colorlib-active' : '' }} "><a href="{{ route('register') }}">Register</a></li>
                @else
                            <li class="{{ Request::is('/') ? 'colorlib-active' : '' }} "><a href="{{ route('home') }}">Home</a></li>
                            <li class="{{ Request::is('societe') ? 'colorlib-active' : '' }} "><a href="{{ route('societe') }}">Societe</a></li>
                            <li class="{{ Request::is('culture') ? 'colorlib-active' : '' }} "><a href="{{ route('culture') }}">Culture</a></li>
                            <li class="{{ Request::is('economie') ? 'colorlib-active' : '' }} "><a href="{{ route('economie') }}">Economie</a></li>
                            <li class="{{ Request::is('tourisme') ? 'colorlib-active' : '' }} "><a href="{{ route('tourisme') }}">Tourisme</a></li>
                            <li class="{{ Request::is('gazettemaritime') ? 'colorlib-active' : '' }} "><a href="{{ route('gazettemaritime') }}">Gazette Maritime</a></li>
                            <li class="{{ Request::is('logout') ? 'colorlib-active' : '' }}" >
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                            </li>
                            <li>  LOGGED IN AS :    {{ Auth::user()->name }} </li>
                @endguest
				</ul>
			</nav>


			<div class="colorlib-footer">
				<p><small>
            | Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <br/> | Made by Bahnini Saad & Mohammed Chanaa
            </span> </small></p>
				<ul>
					<li><a href="#"><i class="icon-facebook2"></i></a></li>
					<li><a href="#"><i class="icon-twitter2"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
					<li><a href="#"><i class="icon-linkedin2"></i></a></li>
				</ul>
			</div>
		</aside>

			@yield('content')
		</div>

			<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="js/jquery.flexslider-min.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Owl Carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- Sticky Kit -->
<script src="js/sticky-kit.min.js"></script>


<!-- MAIN JS -->
<script src="js/main.js"></script>
</div>

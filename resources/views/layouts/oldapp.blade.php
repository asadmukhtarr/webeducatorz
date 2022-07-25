<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<meta charset="utf-8">
<meta name="description" content="{{ $meta->description }}">
<meta name="tags" content="{{ $meta->tags }}">
<title>{{ $meta->title }} | Professional Skills Hub In Pakistan</title>

<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/animate.css')}}">
<link rel="stylesheet" href="{{ asset('css/main.css')}}">
<link rel="stylesheet" href="{{ asset('style.css')}}">
<link rel="stylesheet" href="{{ asset('css/meanmenu.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/responsive.css')}}">


<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="home-v1">

<script src="../../../../code.tidio.co_443/rdu58dqsiymikhfizchesvzwvkx6zp4f.js" async></script>

<header>

<div class="header-top">
<div class="container">
<div class="row">
<div class="col-md-7 col-sm-8">
<div class="header-left">
<ul>
	<li><i class="fa fa-phone"></i>{{ App\Models\general::find(1)->phone }}</li>
	<li><i class="fa fa-envelope-o"></i><a href="https://themeearth.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c9a0a7afa689a5aca8bba8b9bbacbabae7aaa6a4">{{ App\Models\general::find(1)->email }}</a></li>
</ul>
</div>
</div>
<div class="col-md-5 col-sm-4">
<div class="header-right-div">
<div class="soical-profile">
<span class="social-title">Follow Us</span>
<ul>
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-google"></i></a></li>
<li><a href="#"><i class="fa fa-skype"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="hd-sec">
<div class="container">
<div class="row">

<div class="col-md-3 col-sm-12 col-xs-8">
<div class="logo">
<a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt="" /></a>
</div>
</div>


<div class="mobile-nav-menu"></div>
 <div class="col-md-7 col-sm-9 menu-center">
<div class="menu">
<nav id="main-menu" class="main-menu">
<ul>
<li class="active"><a href="{{ route('home') }}">Home</a></li>
<li><a href="{{ route('courses') }}">Courses </a>
<li><a href="{{ route('fee.strcture') }}">Fee Structure</a></li>
<li><a href="{{ route('workshops') }}">Events</a></li>
</li>
<li><a href="{{ route('new.schedule') }}">New Schedule</a></li>
<li><a href="{{ route('contact') }}">Contact</a>
<ul>
</ul>
</nav>

<div class="search-bar-icon">
<div class="site-search">
<span data-toggle="dropdown"><i class="fa fa-search"></i></span>
<div class="search-forum dropdown-menu animation slideUpIn">
<form action="#">
<input placeholder="Search For Site" type="text">
<input type="submit" value="Go" />
</form>
</div>
</div>
</div>

</div>
</div>


<div class="col-md-2 col-sm-3 applay-button-area">
<div class="applay-button">
<a href="{{ route('apply.online') }}">Apply Now</a>
</div>
</div>

</div>
</div>
</div>

</header>

	@yield('content')
	<footer class="footer">

<div class="footer-sec">
<div class="container">
<div class="row">

<div class="col-md-3 col-sm-6">
<div class="footer-wedget-one">
<h2>About Us</h2>
<p>{{ ucfirst(substr(App\Models\general::find(1)->description,0,180))  }} <a href="{{ route('about') }}"><font color="white">Read More</font></a></p>
<a href="index.html"><img src="img/logo.png" alt="" /></a>
</div>
</div>


<div class="col-md-3 col-sm-6">
<div class="footer-widget-menu">
<h2>our Course</h2>
<ul>
<li><a href="#">Graphics Design</a></li>
<li><a href="#">Web Development</a></li>
<li><a href="#">Article Wiriting</a></li>
<li><a href="#">Vitual Assitance</a></li>
<li><a href="#">Support Center</a></li>
</ul>
</div>
</div>


<div class="col-md-3 col-sm-6">
<div class="footer-widget-menu">
<h2>Quick Links</h2>
<ul>
<li><a href="#">Support Center</a></li>
<li><a href="#">Create Account</a></li>
<li><a href="#">business Policy</a></li>
<li><a href="#">Terms and condition</a></li>
<li><a href="#">Analysis Course</a></li>
</ul>
</div>
</div>


<div class="col-md-3 col-sm-6">
<div class="footer-wedget-four">
<h2>contact us </h2>
<div class="inner-box">
<div class="media">
<div class="inner-item">
<div class="media-left">
<span class="icon"><i class="fa fa-map-marker"></i></span>
</div>
<div class="media-body">
<span class="inner-text">{{ App\Models\general::find(1)->address }}</span>
</div>
</div>
</div>
<div class="media">
<div class="inner-item">
<div class="media-left">
<span class="icon"><i class="fa fa-envelope-o"></i></span>
</div>
<div class="media-body">
  <span class="inner-text">
	<a href="#"><font color="white">{{ App\Models\general::find(1)->email }}</font></a></span>
</div>
</div>
</div>
<div class="media">
<div class="inner-item">
<div class="media-left">
<span class="icon"><i class="fa fa-phone"></i></span>
</div>
<div class="media-body">
<span class="inner-text">{{ App\Models\general::find(1)->phone }}</span>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>


<div class="footer-bottom-sec">
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12">
<div class="copy-right">
<p>Copyright 2022 &copy; <span><a href="{{ route('home') }}">Webeducatorz.com,</a></span> Developed by:<span>Asad Mukhtar</span></p>
</div>
</div>
</div>
</div>
</div>

</footer>


<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
</script><script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/owl.animate.js') }}"></script>
<script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/modernizr.min.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
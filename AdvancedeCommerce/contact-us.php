<?php
error_reporting(0);
include("conn/config.php");
include("conn/shopping.php");

$GuestName = $_SESSION['GuestName'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Contact | GSI</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet">
<link href="css/price-range.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
<link rel="shortcut icon" href="images/ico/favicon.html">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.html">
<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.html">
</head>
<body>
<header id="header">
<div class="header_top">
<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="contactinfo">
<ul class="nav nav-pills">
<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
<li><a href="#"><i class="fa fa-envelope"></i> <span class="__cf_email__" data-cfemail="93fafdf5fcd3f7fcfef2fafdbdf0fcfe">[email&#160;protected]</span></a></li>
</ul>
</div>
</div>
<div class="col-sm-6">
<div class="social-icons pull-right">
<ul class="nav navbar-nav">
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="header-middle">
<div class="container">
<div class="row">
<div class="col-md-4 clearfix">
<div class="logo pull-left">
<a href="index.php"><script type="text/javascript" style="display:none">
//<![CDATA[
window.__mirage2 = {petok:"a8c4e47267e18322b96374932ffdd6d6efab39e5-1664516666-1800"};
//]]>
</script>
<script type="text/javascript" src="scripts/mirage2.min.js"></script>
<img data-cfsrc="images/home/logo.png" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/logo.png" alt="" /></noscript></a>
</div>
<div class="btn-group pull-right clearfix">
<div class="btn-group">
<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
USA
<span class="caret"></span>
</button>
<ul class="dropdown-menu">
<li><a href="#">Canada</a></li>
<li><a href="#">UK</a></li>
</ul>
</div>
<div class="btn-group">
<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
DOLLAR
<span class="caret"></span>
</button>
<ul class="dropdown-menu">
<li><a href="#">Canadian Dollar</a></li>
<li><a href="#">Pound</a></li>
</ul>
</div>
</div>
</div>
<div class="col-md-8 clearfix">
<div class="shop-menu clearfix pull-right">
<ul class="nav navbar-nav">
<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
<li><a href="cart.php"><strong><sup style="color:red;"><?php echo $nCart ?></sup></strong><i class="fa fa-shopping-cart"></i> Cart</a></li>
<li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="header-bottom">
<div class="container">
<div class="row">
<div class="col-sm-9">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<div class="mainmenu pull-left">
<ul class="nav navbar-nav collapse navbar-collapse">
<li><a href="index.php">Home</a></li>
<li class="dropdown"><a href="#">Petroleum<i class="fa fa-angle-down"></i></a>
<ul role="menu" class="sub-menu">
<li><a href="shop.php">Agriculture</a></li>
<li><a href="product-details.php">Chemical </a></li>
<li><a href="checkout.php">Pumps</a></li>
<li><a href="cart.php">Filters</a></li>
<li><a href="login.php">DEF</a></li>
</ul>
</li>
<li class="dropdown"><a href="#">Industrial<i class="fa fa-angle-down"></i></a>
<ul role="menu" class="sub-menu">
<li><a href="blog.html">Air Compressors & Air Equipment</a></li>
<li><a href="blog-single.html">Drum Equipment</a></li>
</ul>
</li>
<li><a href="contact-us.php" class="active">Contact</a></li>
</ul>
</div>
</div>
<div class="col-sm-3">
<div class="search_box pull-right">
<input type="text" placeholder="Search" />
</div>
</div>
</div>
</div>
</div>
</header>
<div id="contact-page" class="container">
<div class="bg">
<div class="row">
<div class="col-sm-12">
<h2 class="title text-center">Contact <strong>Us</strong></h2>
<div id="gmap" class="contact-map">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-8">
<div class="contact-form">
<h2 class="title text-center">Get In Touch</h2>
<div class="status alert alert-success" style="display: none"></div>
<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
<div class="form-group col-md-6">
<input type="text" name="name" class="form-control" required="required" placeholder="Name">
</div>
<div class="form-group col-md-6">
<input type="email" name="email" class="form-control" required="required" placeholder="Email">
</div>
<div class="form-group col-md-12">
<input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
</div>
<div class="form-group col-md-12">
<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
</div>
<div class="form-group col-md-12">
<input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
</div>
</form>
</div>
</div>
<div class="col-sm-4">
<div class="contact-info">
<h2 class="title text-center">Contact Info</h2>
<address>
<p>GSI Inc.</p>
<p>935 W. Webster Ave New Streets Chicago, IL 60614, NY</p>
<p>Newyork USA</p>
<p>Mobile: +2346 17 38 93</p>
<p>Fax: 1-714-252-0026</p>
<p>Email: <a href="https://demo.themeum.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4e272028210e2b633d26213e3e2b3c602d2123">[email&#160;protected]</a></p>
</address>
<div class="social-networks">
<h2 class="title text-center">Social Networking</h2>
<ul>
<li>
<a href="#"><i class="fa fa-facebook"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-twitter"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-google-plus"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-youtube"></i></a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<footer id="footer">
<div class="footer-top">
<div class="container">
<div class="row">
<div class="col-sm-2">
<div class="companyinfo">
<h2><span>GSI</span>-Steel</h2>
<p>GSI - Genjirō Steel Industries Japan Inc</p>
</div>
</div>
<div class="col-sm-7">
<div class="col-sm-3">
<div class="video-gallery text-center">
<a href="#">
<div class="iframe-img">
<img data-cfsrc="images/home/iframe1.png" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/iframe1.png" alt="" /></noscript>
</div>
<div class="overlay-icon">
<i class="fa fa-play-circle-o"></i>
</div>
</a>
<p>Circle of Hands</p>
<h2>24 DEC 2014</h2>
</div>
</div>
<div class="col-sm-3">
<div class="video-gallery text-center">
<a href="#">
<div class="iframe-img">
<img data-cfsrc="images/home/iframe2.png" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/iframe2.png" alt="" /></noscript>
</div>
<div class="overlay-icon">
<i class="fa fa-play-circle-o"></i>
</div>
</a>
<p>Circle of Hands</p>
<h2>24 DEC 2014</h2>
</div>
</div>
<div class="col-sm-3">
<div class="video-gallery text-center">
<a href="#">
<div class="iframe-img">
<img data-cfsrc="images/home/iframe3.png" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/iframe3.png" alt="" /></noscript>
</div>
<div class="overlay-icon">
<i class="fa fa-play-circle-o"></i>
</div>
</a>
<p>Circle of Hands</p>
<h2>24 DEC 2014</h2>
</div>
</div>
<div class="col-sm-3">
<div class="video-gallery text-center">
<a href="#">
<div class="iframe-img">
<img data-cfsrc="images/home/iframe4.png" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/iframe4.png" alt="" /></noscript>
</div>
<div class="overlay-icon">
<i class="fa fa-play-circle-o"></i>
</div>
</a>
<p>Circle of Hands</p>
<h2>24 DEC 2014</h2>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="address">
<img data-cfsrc="images/home/map.png" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/map.png" alt="" /></noscript>
<p>GSI - Genjirō Industries Japan</p>
</div>
</div>
</div>
</div>
</div>
<div class="footer-widget">
<div class="container">
<div class="row">
<div class="col-sm-2">
<div class="single-widget">
<h2>Service</h2>
<ul class="nav nav-pills nav-stacked">
<li><a href="#">Online Help</a></li>
<li><a href="#">Contact Us</a></li>
<li><a href="#">Order Status</a></li>
<li><a href="#">Change Location</a></li>
<li><a href="#">FAQ’s</a></li>
</ul>
</div>
</div>
<div class="col-sm-2">
<div class="single-widget">
<h2>Quock Shop</h2>
<ul class="nav nav-pills nav-stacked">
<li><a href="#">T-Shirt</a></li>
<li><a href="#">Mens</a></li>
<li><a href="#">Womens</a></li>
<li><a href="#">Gift Cards</a></li>
<li><a href="#">Shoes</a></li>
</ul>
</div>
</div>
<div class="col-sm-2">
<div class="single-widget">
<h2>Policies</h2>
<ul class="nav nav-pills nav-stacked">
<li><a href="#">Terms of Use</a></li>
<li><a href="#">Privecy Policy</a></li>
<li><a href="#">Refund Policy</a></li>
<li><a href="#">Billing System</a></li>
<li><a href="#">Ticket System</a></li>
</ul>
</div>
</div>
<div class="col-sm-2">
<div class="single-widget">
<h2>About GSI</h2>
<ul class="nav nav-pills nav-stacked">
<li><a href="#">Company Information</a></li>
<li><a href="#">Careers</a></li>
<li><a href="#">Store Location</a></li>
<li><a href="#">Affillate Program</a></li>
<li><a href="#">Copyright</a></li>
</ul>
</div>
</div>
<div class="col-sm-3 col-sm-offset-1">
<div class="single-widget">
<h2>About GSI</h2>
<form action="#" class="searchform">
<input type="text" placeholder="Your email address" />
<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
<p>Get the most recent updates from <br />our site and be updated your self...</p>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="footer-bottom">
<div class="container">
<div class="row">
<p class="pull-left">Copyright © 2022 GSI - Genjirō Steel Industries Japan Inc. All rights reserved.</p>
</div>
</div>
</div>
</footer>
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="js/gmaps.js"></script>
<script src="js/contact.js"></script>
<script src="js/price-range.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
</body>
</html>
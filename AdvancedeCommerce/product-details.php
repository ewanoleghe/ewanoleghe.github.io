<?php
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
<title>Product Details | GSI</title>
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
<li><a href="#"><i class="fa fa-envelope"></i> <span class="__cf_email__" data-cfemail="6e070008012e0a01030f0700400d0103">[email&#160;protected]</span></a></li>
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
window.__mirage2 = {petok:"71ad1a4534e4356c77d7f159e953cf4cbd31dc29-1664516665-1800"};
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
<li><a href="product-details.html" class="active">Chemical </a></li>
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
<li><a href="contact-us.php">Contact</a></li>
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
<section>
<div class="container">
<div class="row">
<div class="col-sm-3">
<div class="left-sidebar">
<h2>Category</h2>
<div class="panel-group category-products" id="accordian">
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
<span class="badge pull-right"><i class="fa fa-plus"></i></span>
Sportswear
</a>
</h4>
</div>
<div id="sportswear" class="panel-collapse collapse">
<div class="panel-body">
<ul>
<li><a href="#">Nike </a></li>
<li><a href="#">Under Armour </a></li>
<li><a href="#">Adidas </a></li>
<li><a href="#">Puma</a></li>
<li><a href="#">ASICS </a></li>
</ul>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordian" href="#mens">
<span class="badge pull-right"><i class="fa fa-plus"></i></span>
Mens
</a>
</h4>
</div>
<div id="mens" class="panel-collapse collapse">
<div class="panel-body">
<ul>
<li><a href="#">Fendi</a></li>
<li><a href="#">Guess</a></li>
<li><a href="#">Valentino</a></li>
<li><a href="#">Dior</a></li>
<li><a href="#">Versace</a></li>
<li><a href="#">Armani</a></li>
<li><a href="#">Prada</a></li>
<li><a href="#">Dolce and Gabbana</a></li>
<li><a href="#">Chanel</a></li>
<li><a href="#">Gucci</a></li>
</ul>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordian" href="#womens">
<span class="badge pull-right"><i class="fa fa-plus"></i></span>
Womens
</a>
</h4>
</div>
 <div id="womens" class="panel-collapse collapse">
<div class="panel-body">
<ul>
<li><a href="#">Fendi</a></li>
<li><a href="#">Guess</a></li>
<li><a href="#">Valentino</a></li>
<li><a href="#">Dior</a></li>
<li><a href="#">Versace</a></li>
</ul>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title"><a href="#">Kids</a></h4>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title"><a href="#">Fashion</a></h4>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title"><a href="#">Households</a></h4>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title"><a href="#">Interiors</a></h4>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title"><a href="#">Clothing</a></h4>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title"><a href="#">Bags</a></h4>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title"><a href="#">Shoes</a></h4>
</div>
</div>
</div>
<div class="brands_products">
<h2>Brands</h2>
<div class="brands-name">
<ul class="nav nav-pills nav-stacked">
<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
</ul>
</div>
</div>
<div class="price-range">
<h2>Price Range</h2>
<div class="well">
<input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2"><br />
<b>$ 0</b> <b class="pull-right">$ 600</b>
</div>
</div>
<div class="shipping text-center">
<img data-cfsrc="images/home/shipping.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/shipping.jpg" alt="" /></noscript>
</div>
</div>
</div>
<div class="col-sm-9 padding-right">
<div class="product-details">
<div class="col-sm-5">
<div class="view-product">
<img data-cfsrc="images/product-details/1.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/product-details/1.jpg" alt="" /></noscript>
<h3>ZOOM</h3>
</div>
<div id="similar-product" class="carousel slide" data-ride="carousel">

<div class="carousel-inner">
<div class="item active">
<a href="#"><img data-cfsrc="images/product-details/similar1.jpg" alt="" style="display:none;visibility:hidden;"><noscript><img src="images/product-details/similar1.jpg" alt=""></noscript></a>
<a href="#"><img data-cfsrc="images/product-details/similar2.jpg" alt="" style="display:none;visibility:hidden;"><noscript><img src="images/product-details/similar2.jpg" alt=""></noscript></a>
<a href="#"><img data-cfsrc="images/product-details/similar3.jpg" alt="" style="display:none;visibility:hidden;"><noscript><img src="images/product-details/similar3.jpg" alt=""></noscript></a>
</div>
<div class="item">
<a href="#"><img data-cfsrc="images/product-details/similar1.jpg" alt="" style="display:none;visibility:hidden;"><noscript><img src="images/product-details/similar1.jpg" alt=""></noscript></a>
<a href="#"><img data-cfsrc="images/product-details/similar2.jpg" alt="" style="display:none;visibility:hidden;"><noscript><img src="images/product-details/similar2.jpg" alt=""></noscript></a>
<a href="#"><img data-cfsrc="images/product-details/similar3.jpg" alt="" style="display:none;visibility:hidden;"><noscript><img src="images/product-details/similar3.jpg" alt=""></noscript></a>
</div>
<div class="item">
<a href="#"><img data-cfsrc="images/product-details/similar1.jpg" alt="" style="display:none;visibility:hidden;"><noscript><img src="images/product-details/similar1.jpg" alt=""></noscript></a>
<a href="#"><img data-cfsrc="images/product-details/similar2.jpg" alt="" style="display:none;visibility:hidden;"><noscript><img src="images/product-details/similar2.jpg" alt=""></noscript></a>
<a href="#"><img data-cfsrc="images/product-details/similar3.jpg" alt="" style="display:none;visibility:hidden;"><noscript><img src="images/product-details/similar3.jpg" alt=""></noscript></a>
</div>
</div>

<a class="left item-control" href="#similar-product" data-slide="prev">
<i class="fa fa-angle-left"></i>
</a>
<a class="right item-control" href="#similar-product" data-slide="next">
<i class="fa fa-angle-right"></i>
</a>
</div>
</div>
<div class="col-sm-7">
<div class="product-information">
<img data-cfsrc="images/product-details/new.jpg" class="newarrival" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/product-details/new.jpg" class="newarrival" alt="" /></noscript>
<h2>Anne Klein Sleeveless Colorblock Scuba</h2>
<p>Web ID: 1089772</p>
<img data-cfsrc="images/product-details/rating.png" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/product-details/rating.png" alt="" /></noscript>
<span>
<span>US $59</span>
<label>Quantity:</label>
<input type="text" value="3" />
<button type="button" class="btn btn-fefault cart">
<i class="fa fa-shopping-cart"></i>
Add to cart
</button>
</span>
<p><b>Availability:</b> In Stock</p>
<p><b>Condition:</b> New</p>
<p><b>Brand:</b> GSI</p>
<a href="#"><img data-cfsrc="images/product-details/share.png" class="share img-responsive" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/product-details/share.png" class="share img-responsive" alt="" /></noscript></a>
</div>
</div>
</div>
<div class="category-tab shop-details-tab">
<div class="col-sm-12">
<ul class="nav nav-tabs">
<li><a href="#details" data-toggle="tab">Details</a></li>
<li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
<li><a href="#tag" data-toggle="tab">Tag</a></li>
<li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
</ul>
</div>
<div class="tab-content">
<div class="tab-pane fade" id="details">
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery1.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery1.jpg" alt="" /></noscript>
<h2>$56</h2>
<p>Easy Polo Black Edition</p>
<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
</div>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery2.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery2.jpg" alt="" /></noscript>
<h2>$56</h2>
<p>Easy Polo Black Edition</p>
<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
</div>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery3.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery3.jpg" alt="" /></noscript>
<h2>$56</h2>
<p>Easy Polo Black Edition</p>
<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
</div>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery4.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery4.jpg" alt="" /></noscript>
<h2>$56</h2>
<p>Easy Polo Black Edition</p>
<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
</div>
</div>
</div>
</div>
 </div>
<div class="tab-pane fade" id="companyprofile">
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery1.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery1.jpg" alt="" /></noscript>
<h2>$56</h2>
<p>Easy Polo Black Edition</p>
<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
</div>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery3.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery3.jpg" alt="" /></noscript>
<h2>$56</h2>
<p>Easy Polo Black Edition</p>
<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
</div>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery2.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery2.jpg" alt="" /></noscript>
<h2>$56</h2>
<p>Easy Polo Black Edition</p>
<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
</div>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery4.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery4.jpg" alt="" /></noscript>
<h2>$56</h2>
<p>Easy Polo Black Edition</p>
<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="tag">
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery1.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery1.jpg" alt="" /></noscript>
<h2>$56</h2>
<p>Easy Polo Black Edition</p>
<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
</div>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery2.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery2.jpg" alt="" /></noscript>
<h2>$56</h2>
<p>Easy Polo Black Edition</p>
<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
</div>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery3.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery3.jpg" alt="" /></noscript>
<h2>$56</h2>
<p>Easy Polo Black Edition</p>
<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
</div>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery4.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery4.jpg" alt="" /></noscript>
<h2>$56</h2>
<p>Easy Polo Black Edition</p>
<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
</div>
</div>
</div>
 </div>
</div>
<div class="tab-pane fade active in" id="reviews">
<div class="col-sm-12">
<ul>
<li><a href="#"><i class="fa fa-user"></i>EUGEN</a></li>
<li><a href="#"><i class="fa fa-clock-o"></i>12:41 PM</a></li>
<li><a href="#"><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
</ul>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
<p><b>Write Your Review</b></p>
<form action="#">
<span>
<input type="text" placeholder="Your Name" />
<input type="email" placeholder="Email Address" />
</span>
<textarea name=""></textarea>
<b>Rating: </b> <img data-cfsrc="images/product-details/rating.png" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/product-details/rating.png" alt="" /></noscript>
<button type="button" class="btn btn-default pull-right">
Submit
</button>
</form>
</div>
</div>
</div>
</div>
<div class="recommended_items">
<h2 class="title text-center">recommended items</h2>
<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
<div class="item active">
<div class="col-sm-4">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/recommend1.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/recommend1.jpg" alt="" /></noscript>
<h2>$56</h2>
<p>Easy Polo Black Edition</p>
<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/recommend2.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/recommend2.jpg" alt="" /></noscript>
<h2>$56</h2>
<p>Easy Polo Black Edition</p>
<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/recommend3.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/recommend3.jpg" alt="" /></noscript>
<h2>$56</h2>
<p>Easy Polo Black Edition</p>
<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="col-sm-4">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/recommend1.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/recommend1.jpg" alt="" /></noscript>
<h2>$56</h2>
<p>Easy Polo Black Edition</p>
<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/recommend2.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/recommend2.jpg" alt="" /></noscript>
<h2>$56</h2>
<p>Easy Polo Black Edition</p>
<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/recommend3.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/recommend3.jpg" alt="" /></noscript>
<h2>$56</h2>
<p>Easy Polo Black Edition</p>
<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
</div>
</div>
</div>
</div>
</div>
</div>
<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
<i class="fa fa-angle-left"></i>
</a>
<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
<i class="fa fa-angle-right"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</section>
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
<script src="js/price-range.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
</body>
</html>
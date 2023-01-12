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
<title>Checkout | GSI</title>
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
<li><a href="#"><i class="fa fa-envelope"></i> <span class="__cf_email__" data-cfemail="10797e767f50747f7d71797e3e737f7d">[email&#160;protected]</span></a></li>
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
window.__mirage2 = {petok:"64e3f616cd13b9ca7e03a33f95fb823c66ab0aa1-1664516664-1800"};
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
<li><a href="checkout.php" class="active">Pumps</a></li>
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
<section id="cart_items">
<div class="container">
<div class="breadcrumbs">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li class="active">Check out</li>
</ol>
</div>
<div class="step-one">
<h2 class="heading">Step1</h2>
</div>
<div class="checkout-options">
<h3>New User</h3>
<p>Checkout options</p>
<ul class="nav">
<li>
<label><input type="checkbox"> Register Account</label>
</li>
<li>
<label><input type="checkbox"> Guest Checkout</label>
</li>
<li>
<a href="cart.php"><i class="fa fa-times"></i>Cancel</a>
</li>
</ul>
</div>
<div class="register-req">
<p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
</div>
<div class="shopper-informations">
<div class="row">
<div class="col-sm-3">

</div>
<div>
<?php
					$stmt = $pdo->prepare("SELECT * FROM `xbuyer` WHERE GuestName = :user1");  
         			$stmt->bindParam('user1', $GuestName);
					$stmt->execute();
					$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
					foreach( $rows as $row ) {
					$xid = $row["id"];
					//$gTotal = round(($gQuant * $gPrice), 2);
				
	?>

<form method="POST" action="placeorder.php">
<input name="xid" type="hidden" value="<?php echo $row["id"] ?>" />
<div class="col-sm-5 clearfix">
<div class="bill-to">
<?php
	}
		?>
<p>Bill To</p>
<div class="form-group col-md-16">
<table width="178%" style="width:100%">
  <tr> <td width="49%"><input type="text" name="nCoyN" placeholder="Company Name" class="form-control" required></td> <td width="2%"></td> 
  <td width="49%"><input type="text" name="nZip" placeholder="Zip / Postal Code *" class="form-control" required></td> </tr>
  <tr><td><input type="text" name="nEmail" placeholder="Email*"  class="form-control" required></td> <td></td> <td><select name="nCountry"  class="form-control" required>
<option selected="selected" value="">-- Country --</option>
<option value="United States" >United States</option>
<option value="Bangladesh" >Bangladesh</option>
<option value="UK" >UK</option>
<option value="India" >India</option>
<option value="Pakistan" >Pakistan</option>
<option value="Ucrane" >Ucrane</option>
<option value="Canada" >Canada</option>
<option value="Dubai" >Dubai</option>
</select></td></tr>
  <tr><td><input type="text" name="nTitle" placeholder="Title"  class="form-control" ></td> <td></td> <td><input type="text" name="nState" placeholder="State / Province / Region"   class="form-control" required></td></tr>
 <tr> <td><input type="text" name="nFnom" placeholder="First Name *"  class="form-control" required></td> <td></td> <td><input type="text" name="nPhone" placeholder="Phone *"  class="form-control" ></td></tr>
 <tr><td><input type="text" name="nMidN" placeholder="Middle Name"  class="form-control" required></td> <td></td> <td><input type="text" name="nMobile" placeholder="Mobile Phone"  class="form-control" ></td></tr>
 <tr><td><input type="text" name="nLnom" placeholder="Last Name *"  class="form-control" required></td> <td></td> <td><input type="text" name="nFax" placeholder="Fax"  class="form-control" ></td></tr>
 <tr><td><input type="text" name="nAdd1" placeholder="Address 1 *"  class="form-control" required></td> <td></td> <td></td></tr>
 <tr><td><input type="text" name="nAdd2" placeholder="Address 2"  class="form-control" ></td> <td></td> <td></td></tr>
</table>
</div>

</div>
</div>
<div class="col-sm-4">
<div class="order-message">
<p>Shipping Order</p>
<textarea name="nNotes" placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
<label><input type="checkbox"> Shipping to bill address</label>
</div>
</div>
</div>
</div>
<div class="review-payment">
<h2>Review & Payment</h2>
</div>
<div class="table-responsive cart_info">
<table class="table table-condensed">
<thead>
<tr class="cart_menu">
<td class="image">Item</td>
<td class="description"></td>
<td class="price">Price</td>
<td class="quantity">Quantity</td>
<td class="total">Total</td>
</tr>
</thead>
<?php
					$stmt = $pdo->prepare("SELECT * FROM `wallet` WHERE GuestName = :user1 AND quantity > 0 ORDER BY `id` DESC");  
         			$stmt->bindParam('user1', $GuestName);
					$stmt->execute();
					$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
					foreach( $rows as $row ) {
					$item_price = $row["quantity"]*$row["ItemPrice"];
					$gQuant = intval($row['quantity']); 
					$gPrice = intval($row['ItemPrice']);
					//$gTotal = round(($gQuant * $gPrice), 2);
					
	?>
<tbody>
<tr>
<td class="cart_product">
<a href="#"><img data-cfsrc="<?php echo $row["nImages"]; ?>" height="80" width="100" alt="" style="display:none;visibility:hidden;"><noscript><img src="<?php echo $row["nImages"]; ?>" alt="" height="80" width="100"></noscript></a>
</td>
<td class="cart_description">
<h5><?php echo wordwrap($row['rCode'], 25,"<br>\n")?></h5>
</td>
<td class="cart_price">
<?php echo "$".number_format($row['ItemPrice'],2) ?>
</td>
<td class="cart_quantity">
<?php echo $row['quantity']?>
</td>
<td class="cart_total">
<?php echo "$".number_format("$item_price",2) ?>
</td>
        </tr>
		<?php
		$total_quantity += $row["quantity"];
		$total_price += ($row["ItemPrice"]*$row["quantity"]);
// CALCULATE SALES TAX USING Tennessee 9.55%  HIGHEST IN THE NATION
		$nSalesTax = '0.0955';
		$nTax = $nSalesTax*$total_price;
			}
		?>
<tr>
<td colspan="4">&nbsp;</td>
<td colspan="2">
<table class="table table-condensed total-result">
<tr>
<td>Cart Sub Total</td>
<td><?php echo "$".number_format("$total_price",2) ?></td>
</tr>
<tr>
<td>Exo Tax</td>
<td><?php echo "$".number_format("$nTax",2) ?></td>
</tr>
<tr class="shipping-cost">
<td>Shipping Cost</td>
<td><?php $ship = $total_quantity*"1000"; echo "$".number_format("$ship",2) ?></td>
</tr>
<tr>
<td>Total</td>
<td><h4><?php $gTotal = ($total_price+$ship+$nTax); echo "$".number_format("$gTotal",2) ?></h4></td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</div>
<div class="payment-options">
<span>
<label><input name="nPayMode" value="Direct Bank Transfer" type="checkbox"> Direct Bank Transfer</label>
</span>
<span>
<label><input name="nPayMode" value="Check Payment" type="checkbox"> Check Payment</label>
</span>
<span>
<label><input name="nPayMode" value="Paypal" type="checkbox"> Paypal</label>
</span>
<label><div><input type="submit" name="placeOrder" class="btn btn-default check_out" value="PLACE ORDER" style="font-size : 30px; width: 100%; height: 50px;"/></div></label>
</div></form>
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
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
</body>
</html>
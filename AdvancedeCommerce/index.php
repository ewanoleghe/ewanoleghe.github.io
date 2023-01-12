<?php

error_reporting(0);

include("conn/check.php");
?>
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
<title>Home | GSI</title>
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
<li><a href="#"><i class="fa fa-envelope"></i> <span class="__cf_email__" data-cfemail="8be2e5ede4cbefe4e6eae2e5a5e8e4e6">[email&#160;protected]</span></a></li>
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
window.__mirage2 = {petok:"a46c6e36b3f8a28e2b600c780d6063588562d32e-1664516644-1800"};
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
<li><a href="index.php" class="active">Home</a></li>
<li class="dropdown"><a href="#">Petroleum<i class="fa fa-angle-down"></i></a>
<ul role="menu" class="sub-menu">
<li><a href="#?shop.php">Agriculture</a></li>
<li><a href="#?product-details.php">Chemical </a></li>
<li><a href="checkout.php">Pumps</a></li>
<li><a href="#?cart.php">Filters</a></li>
<li><a href="login.php">DEF</a></li>
</ul>
</li>
<li class="dropdown"><a href="#">Industrial<i class="fa fa-angle-down"></i></a>
<ul role="menu" class="sub-menu">
<li><a href="#?blog.php">Air Compressors & Air Equipment</a></li>
<li><a href="#?blog-single.php">Drum Equipment</a></li>
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
<section id="slider">
<div class="container">
<div class="row">
<div class="col-sm-12">
<div id="slider-carousel" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
<li data-target="#slider-carousel" data-slide-to="1"></li>
<li data-target="#slider-carousel" data-slide-to="2"></li>
<li data-target="#slider-carousel" data-slide-to="3"></li>
<li data-target="#slider-carousel" data-slide-to="4"></li>
<li data-target="#slider-carousel" data-slide-to="5"></li>
<li data-target="#slider-carousel" data-slide-to="6"></li>
</ol>
<div class="carousel-inner">
<div class="item active">
<div class="col-sm-6">
<h1><span>GSI</span>-Steel</h1>
<h2>Petroleum Equipment</h2>
<h4>Western Global 727 Gallon TransCube Cab Tank w/Trailer Package</h4><p><table width="39%" style="width:80%">
  <tr> <td width="40%">SKU:</td>   <td width="60%">AWG27TCGCAB110VDR</td>  </tr>
<tr> <td>Manufacturer</td> <td><a href="#" itemprop="url"><span itemprop="name">Western Global</span></a></td> </tr>
<tr> <td>Size:</td> <td>727 Gallons</td> </tr>
<tr> <td>Type:</td> <td>55:1</td> </tr>
<tr> <td>Material:</td> <td>Carbon Steel</td> </tr>
<tr> <td>Weight:</td> <td>4,000.00 LBS</td> </tr>
<tr> <td><h2>$24,970.29</h2></td> <td></td> 
</tr> </table></p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Western Global 727 Gallon TransCube Cab Tank w/Trailer Package" />
<input name="rName" type="hidden" value="rProducT1" />
<input name="rPrice" type="hidden" value="24970.29" />
<input name="nImages" type="hidden" value="images/home/gsi1.jpg" />
<input name="update" type="submit" class="btn btn-default get" value="Get it now"/></form>
<?php 			
	if(ISSET($_POST['update'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
				  
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
<div class="col-sm-6">
<img data-cfsrc="images/home/gsi1.jpg" class="girl img-responsive" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gsi1.jpg" class="girl img-responsive" alt="" /></noscript>
</div>
</div>

<!-- -->
<div class="item">
<div class="col-sm-6">
<h1><span>GSI</span>-Steel</h1>
<h2>Agricultural & Farm Equipment</h2>
<h4>Graco NXT Check-Mate 55:1 Floor Standing Grease Pump</h4><p><table width="39%" style="width:80%">
  <tr> <td width="40%">SKU:</td>   <td width="60%">GR24E009</td>  </tr>
<tr> <td>Manufacturer</td> <td><a href="#" itemprop="url"><span itemprop="name">Graco</span></a></td> </tr>
<tr> <td>Size:</td> <td>400 lb Drum</td> </tr>
<tr> <td>Type:</td> <td>55:1</td> </tr>
<tr> <td>Material:</td> <td>Carbon Steel</td> </tr>
<tr> <td>Flow Rate:</td> <td>28 lbs/Min</td> </tr>
<tr> <td>Weight:</td> <td>145.00 LBS</td> </tr>
<tr> <td><h2>$16,224.74</h2></td> <td></td> 
</tr> </table>
</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Graco NXT Check-Mate 55:1 Floor Standing Grease Pump - GR24E009" />
<input name="rName" type="hidden" value="rProducT2" />
<input name="rPrice" type="hidden" value="16224.74" />
<input name="nImages" type="hidden" value="images/home/gsi2.jpg" />
<input name="update2" type="submit" class="btn btn-default get" value="Get it now"/></form>
<?php 			
	if(ISSET($_POST['update2'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
				  
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
<div class="col-sm-6">
<img data-cfsrc="images/home/gsi2.jpg" class="girl img-responsive" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gsi2.jpg" class="girl img-responsive" alt="" /></noscript>
</div>
</div>
<!-- -->
<div class="item">
<div class="col-sm-6">
<h1><span>GSI</span>-Steel</h1>
<h2>Chemical Handling Equipment</h2>
<h4>Dura-ABS Direct Injection System w/3 in. Carrier Line, 4 Dura ABS, 12 Volt</h4><p><table width="39%" style="width:80%">
  <tr> <td width="40%">SKU:</td>   <td width="60%">ADURDI3ABS412V</td>  </tr>
<tr> <td>Manufacturer</td> <td><a href="#" itemprop="url"><span itemprop="name">Dura Products</span></a></td> </tr>
<tr> <td>Size:</td> <td>3 in.</td> </tr>
<tr> <td>Power:</td> <td>12 Volt</td> </tr>
<tr> <td>Description:</td> <td>Reads Gallons, Liters and Ounces</td> </tr>
<tr> <td>Flow Rate:</td> <td>15 GPM/ 56 LPM</td> </tr>
<tr> <td>Weight:</td> <td>107.00 LBS</td> </tr>
<tr> <td><h2>$7,996.25</h2></td> <td></td> 
</tr> </table></p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Dura-ABS Direct Injection System w/3 in. Carrier Line, 4 Dura ABS, 12 Volt" />
<input name="rName" type="hidden" value="rProducT3" />
<input name="rPrice" type="hidden" value="7996.25" />
<input name="nImages" type="hidden" value="images/home/gsi3.jpg" />
<input name="update3" type="submit" class="btn btn-default get" value="Get it now"/></form>
<?php 			
	if(ISSET($_POST['update3'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
					  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
<div class="col-sm-6">
<img data-cfsrc="images/home/gsi3.jpg" class="girl img-responsive" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gsi3.jpg" class="girl img-responsive" alt="" /></noscript>
</div>
</div>

<!-- -->

<div class="item">
<div class="col-sm-6">
<h1><span>GSI</span>-Steel</h1>
<h2>Pumps</h2>
<h4>Graco SoloTech 30 Positive Displacement Hose Pump w/ Brushless DC Motor & 316 SS Hose Barb - 16 GPM</h4><p><table width="39%" style="width:80%">
  <tr> <td width="40%">SKU:</td>   <td width="60%">GR19Z099</td>  </tr>
<tr> <td>Manufacturer</td> <td><a href="#" itemprop="url"><span itemprop="name">Graco</span></a></td> </tr>
<tr> <td>Size:</td> <td>30 mm.</td> </tr>
<tr> <td>Flow-Rate:</td> <td>16 GPM</td> </tr>
<tr> <td>Material:</td> <td>Aluminum</td> </tr>
<tr> <td>Type:</td> <td>Positive Displacement</td> </tr>
<tr> <td>Weight:</td> <td>338.00 LBS</td> </tr>
<tr> <td><h2>$15,950.68</h2></td> <td></td> 
</tr> </table></p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Graco SoloTech 30 Positive Displacement Hose Pump w/ Brushless DC Motor & 316 SS Hose Barb - 16 GPM" />
<input name="rName" type="hidden" value="rProducT4" />
<input name="rPrice" type="hidden" value="15950.68" />
<input name="nImages" type="hidden" value="images/home/gsi4.jpg" />
<input name="update4" type="submit" class="btn btn-default get" value="Get it now"/></form>
<?php 			
	if(ISSET($_POST['update4'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
				  
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
<div class="col-sm-6">
<img data-cfsrc="images/home/gsi4.jpg" class="girl img-responsive" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gsi4.jpg" class="girl img-responsive" alt="" /></noscript>
</div>
</div>

<!-- -->

<div class="item">
<div class="col-sm-6">
<h1><span>GSI</span>-Steel</h1>
<h2>Filters & Filtration Systems</h2>
<h4>Donaldson Bulk Fluid Manifold - 12 Filters </h4><p><table width="39%" style="width:80%">
  <tr> <td width="40%">SKU:</td>   <td width="60%">DNDFF1012</td>  </tr>
<tr> <td>Manufacturer</td> <td><a href="#" itemprop="url"><span itemprop="name">Donaldson</span></a></td> </tr>
<tr> <td>Size:</td> <td>4 in. ANSI 150 lb Flange Manifold</td> </tr>
<tr> <td>Type:</td> <td>Manifold Filter Head</td> </tr>
<tr> <td>Material:</td> <td>Carbon Steel</td> </tr>
<tr> <td>Flow Rate:</td> <td>700 GPM</td> </tr>
<tr> <td>Weight:</td> <td>128.00 LBS</td> </tr>
<tr> <td><h2>$7,214.27</h2></td> <td></td> 
</tr> </table></p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Donaldson Bulk Fluid Manifold - 12 Filters" />
<input name="rName" type="hidden" value="rProducT5" />
<input name="rPrice" type="hidden" value="7214.27" />
<input name="nImages" type="hidden" value="images/home/gsi5.jpg" />
<input name="update5" type="submit" class="btn btn-default get" value="Get it now"/></form>
<?php 			
	if(ISSET($_POST['update5'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
				  
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
<div class="col-sm-6">
<img data-cfsrc="images/home/gsi5.jpg" class="girl img-responsive" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gsi5.jpg" class="girl img-responsive" alt="" /></noscript>
</div>
</div>

<!-- -->

<div class="item">
<div class="col-sm-6">
<h1><span>GSI</span>-Steel</h1>
<h2>Diesel Exhaust Fluid (DEF) Equipment</h2>
<h4>Liquidynamics 1 1/2 in. DEF Bulk Transfer Pump - 50 GPM</h4><p><table width="39%" style="width:80%">
  <tr> <td width="40%">SKU:</td>   <td width="60%">LD195250</td>  </tr>
<tr> <td>Manufacturer</td> <td><a href="#" itemprop="url"><span itemprop="name">Liquidynamics</span></a></td> </tr>
<tr> <td>Size:</td> <td>1 1/2 in.</td> </tr>
<tr> <td>Flow-Rate:</td> <td>50 GPM</td> </tr>
<tr> <td>Type:</td> <td>Gas Engine</td> </tr>
<tr> <td>Weight:</td> <td>62.00 LBS</td> </tr>
<tr> <td><h2>$7,477.02</h2></td> <td></td> 
</tr> </table></p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Liquidynamics 1 1/2 in. DEF Bulk Transfer Pump - 50 GPM" />
<input name="rName" type="hidden" value="rProducT6" />
<input name="rPrice" type="hidden" value="7477.02" />
<input name="nImages" type="hidden" value="images/home/gsi6.jpg" />
<input name="update6" type="submit" class="btn btn-default get" value="Get it now"/></form>
<?php 			
	if(ISSET($_POST['update6'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
				  
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
<div class="col-sm-6">
<img data-cfsrc="images/home/gsi6.jpg" class="girl img-responsive" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gsi6.jpg" class="girl img-responsive" alt="" /></noscript>
</div>
</div>

<!-- -->

<div class="item">
<div class="col-sm-6">
<h1><span>GSI</span>-Steel</h1>
<h2>Air Compressors & Air Equipment</h2>
<h4>Chicago Pneumatic QRS 7.5 HPD-1 TM Stationary Rotary Screw 60 Gal Air Compressor,  7.5 HP, Horizontal, 230V/ 1 Phase</h4><p><table width="39%" style="width:80%">
  <tr> <td width="40%">SKU:</td>   <td width="60%">CH4152054809</td>  </tr>
<tr> <td>Manufacturer</td> <td><a href="#" itemprop="url"><span itemprop="name">Chicago Pneumatic</span></a></td> </tr>
<tr> <td>Size:</td> <td>60 Gallons</td> </tr>
<tr> <td>Flow-Rate:</td> <td>26.1 CFM @ 145 PSI</td> </tr>
<tr> <td>Power:</td> <td>7.5 HP, 150 PSI</td> </tr>
<tr> <td>Type:</td> <td>Electric</td> </tr>
<tr> <td>Weight:</td> <td>683.00 LBS</td> </tr>
<tr> <td><h2>$9,477.02</h2></td> <td></td> 
</tr> </table></p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Chicago Pneumatic QRS 7.5 HPD-1 TM Stationary Rotary Screw 60 Gal Air Compressor,  7.5 HP, Horizontal, 230V/ 1 Phase" />
<input name="rName" type="hidden" value="rProducT7" />
<input name="rPrice" type="hidden" value="9477.02" />
<input name="nImages" type="hidden" value="images/home/gsi7.jpg" />
<input name="update7" type="submit" class="btn btn-default get" value="Get it now"/></form>
<?php 			
	if(ISSET($_POST['update7'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
<div class="col-sm-6">
<img data-cfsrc="images/home/gsi7.jpg" class="girl img-responsive" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gsi7.jpg" class="girl img-responsive" alt="" /></noscript>
</div>
</div>

<!-- -->


</div>
<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
<i class="fa fa-angle-left"></i>
</a>
<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
<i class="fa fa-angle-right"></i>
</a>
</div>
</div>
</div>
</div>
</section>
<section>
<div class="container">
<div class="row">
<div class="col-sm-3">
<div class="left-sidebar">
<h2>Filtration System</h2>
<div class="panel-group category-products" id="accordian">
<div class="panel panel-default">

<img data-cfsrc="images/home/gallery18.jpg" alt="" style="display:none;visibility:hidden;" />
</div>
 
</div>

<div class="price-range">
<h2>Price Range</h2>
<div class="well text-center">
<input type="text" class="span2" value="" data-slider-min="50" data-slider-max="100000" data-slider-step="50" data-slider-value="[250,450]" id="sl2"><br />
<b class="pull-left">$ 50</b> <b class="pull-right">$ 100K</b>
</div>
</div>
<div class="shipping text-center">
<img data-cfsrc="images/home/shipping.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/shipping.jpg" alt="" /></noscript>
</div>
</div>
</div>
<div class="col-sm-9 padding-right">
<div class="features_items">
<h2 class="title text-center">Features Items</h2>
<div class="col-sm-4">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/product1.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/product1.jpg" alt="" /></noscript>
<h2>$9,770.72</h2>
<p>Vestil High Duty Electric Drum Deheader</p>
<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
</div>

<div class="product-overlay">
<div class="overlay-content">
<h2>$9,770.72</h2>
<p>Vestil High Duty Electric Drum Deheader</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Vestil High Duty Electric Drum Deheader" />
<input name="rName" type="hidden" value="rProducT8" />
<input name="nImages" type="hidden" value="images/home/product1.jpg" />
<input name="rPrice" type="hidden" value="9770.72" />
<button type="submit" name="update8"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update8'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
<div class="choose">
<ul class="nav nav-pills nav-justified">
<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
</ul>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/product2.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/product2.jpg" alt="" /></noscript>
<h2>$5,349.94</h2>
<p>JME 250 Gallon FuelCell</p>
<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
</div>
<div class="product-overlay">
<div class="overlay-content">
<h2>$5,349.94</h2>
<p>JME 250 Gallon FuelCell</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="JME 250 Gallon FuelCell" />
<input name="rName" type="hidden" value="rProducT9" />
<input name="nImages" type="hidden" value="images/home/product2.jpg" />
<input name="rPrice" type="hidden" value="5349.94" />
<button type="submit" name="update9"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update9'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
<div class="choose">
<ul class="nav nav-pills nav-justified">
<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
</ul>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/product3.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/product3.jpg" alt="" /></noscript>
<h2>$12,340.95</h2>
<p>Quincy Compressor QGS 15 HPD-3</p>
<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
</div>
<div class="product-overlay">
<div class="overlay-content">
<h2>$12,340.95</h2>
<p>Quincy Compressor QGS 15 HPD-3</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Quincy Compressor QGS 15 HPD-3" />
<input name="rName" type="hidden" value="rProducT10" />
<input name="nImages" type="hidden" value="images/home/product3.jpg" />
<input name="rPrice" type="hidden" value="12340.95" />
<button type="submit" name="update10"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update10'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			  
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
<div class="choose">
<ul class="nav nav-pills nav-justified">
<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
</ul>
</div>
</div>
</div>

<div class="col-sm-4">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/product4.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/product4.jpg" alt="" /></noscript>
<h2>$9,477.02</h2>
<p>Chicago Pneumatic QRS 7.5 HPD-1 TM</p>
<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
</div>
<div class="product-overlay">
<div class="overlay-content">
<h2>$9,477.02</h2>
<p>Chicago Pneumatic QRS 7.5 HPD-1 TM</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Chicago Pneumatic QRS 7.5 HPD-1 TM" />
<input name="rName" type="hidden" value="rProducT11" />
<input name="nImages" type="hidden" value="images/home/product4.jpg" />
<input name="rPrice" type="hidden" value="9477.02" />
<button type="submit" name="update11"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update11'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
<img data-cfsrc="images/home/new.png" class="new" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/new.png" class="new" alt="" /></noscript>
</div>
<div class="choose">
<ul class="nav nav-pills nav-justified">
<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
</ul>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/product5.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/product5.jpg" alt="" /></noscript>
<h2> $15,133.20 </h2>
<p>Racor 600 Series 60 GPH</p>
<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
</div>
<div class="product-overlay">
<div class="overlay-content">
<h2>$15,133.20</h2>
<p>Racor 600 Series 60 GPH</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Racor 600 Series 60 GPH" />
<input name="rName" type="hidden" value="rProducT12" />
<input name="nImages" type="hidden" value="images/home/product5.jpg" />
<input name="rPrice" type="hidden" value="15133.20" />
<button type="submit" name="update12"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update12'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
<img data-cfsrc="images/home/sale.png" class="new" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/sale.png" class="new" alt="" /></noscript>
</div>
<div class="choose">
<ul class="nav nav-pills nav-justified">
<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
</ul>
</div>
</div>
</div>


</div>

<div class="category-tab">
<div class="col-sm-12">
<ul class="nav nav-tabs">
<li class="active"><a href="#tshirt" data-toggle="tab">Pumps</a></li>
<li><a href="#blazers" data-toggle="tab">Aviation Fueling</a></li>
<li><a href="#sunglass" data-toggle="tab">Storage Tank</a></li>
<li><a href="#kids" data-toggle="tab">Roll Groovers</a></li>
<li><a href="#poloshirt" data-toggle="tab">Filters</a></li>
</ul>
</div>
<div class="tab-content">
<div class="tab-pane fade active in" id="tshirt">
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery1.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery1.jpg" alt="" /></noscript>
<h2>$13,328.98</h2>
<p>Flux Pumps VISCOFLUX Lite Standard</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Flux Pumps VISCOFLUX Lite Standard" />
<input name="rName" type="hidden" value="rProducT13" />
<input name="nImages" type="hidden" value="images/home/gallery1.jpg" />
<input name="rPrice" type="hidden" value="13328.98" />
<button type="submit" name="update13"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update13'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery2.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery2.jpg" alt="" /></noscript>
<h2>$5,114.94</h2>
<p>AMT/Gorman Rupp 6 in. x 4 in. 1750 RPM</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="AMT/Gorman Rupp 6 in. x 4 in. 1750 RPM" />
<input name="rName" type="hidden" value="rProducT14" />
<input name="nImages" type="hidden" value="images/home/gallery2.jpg" />
<input name="rPrice" type="hidden" value="5114.94" />
<button type="submit" name="update14"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update14'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery3.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery3.jpg" alt="" /></noscript>
<h2>$6,767.00</h2>
<p>Gorman-Rupp VGH Series Heavy-Duty End Suction</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Gorman-Rupp VGH Series Heavy-Duty End Suction" />
<input name="rName" type="hidden" value="rProducT15" />
<input name="nImages" type="hidden" value="images/home/gallery3.jpg" />
<input name="rPrice" type="hidden" value="6767" />
<button type="submit" name="update15"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update15'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery4.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery4.jpg" alt="" /></noscript>
<h2>$9,505.29</h2>
<p>Gorman-Rupp 80 Series Pumps - GOR88B3B - 8 in</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Gorman-Rupp 80 Series Pumps - GOR88B3B - 8 in" />
<input name="rName" type="hidden" value="rProducT6" />
<input name="nImages" type="hidden" value="images/home/gallery4.jpg" />
<input name="rPrice" type="hidden" value="9505.29" />
<button type="submit" name="update16"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update16'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="blazers">
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery5.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery5.jpg" alt="" /></noscript>
<h2>$13,487.50</h2>
<p>GasTrailer Fuel Station FS 400 Skid DOT</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="GasTrailer Fuel Station FS 400 Skid DOT" />
<input name="rName" type="hidden" value="rProducT17" />
<input name="nImages" type="hidden" value="images/home/gallery5.jpg" />
<input name="rPrice" type="hidden" value="13487.50" />
<button type="submit" name="update17"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update17'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
</div>

<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery6.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery6.jpg" alt="" /></noscript>
<h2>$14,164.68</h2>
<p>Liquid Controls M60 Series 4 in. Flanged</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Liquid Controls M60 Series 4 in. Flanged" />
<input name="rName" type="hidden" value="rProducT18" />
<input name="nImages" type="hidden" value="images/home/gallery6.jpg" />
<input name="rPrice" type="hidden" value="14164.68" />
<button type="submit" name="update18"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update18'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery7.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery7.jpg" alt="" /></noscript>
<h2>$12,447.70</h2>
<p>Western Global 793 Gallon TransCube</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Western Global 793 Gallon TransCube" />
<input name="rName" type="hidden" value="rProducT19" />
<input name="nImages" type="hidden" value="images/home/gallery7.jpg" />
<input name="rPrice" type="hidden" value="12447.7" />
<button type="submit" name="update19"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update19'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery8.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery8.jpg" alt="" /></noscript>
<h2>$4,478.91</h2>
<p>Quincy Compressor 251C80VCBM23 QT</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Quincy Compressor 251C80VCBM23 QT" />
<input name="rName" type="hidden" value="rProducT20" />
<input name="nImages" type="hidden" value="images/home/gallery8.jpg" />
<input name="rPrice" type="hidden" value="4478.91" />
<button type="submit" name="update20"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update20'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="sunglass">
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery9.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery9.jpg" alt="" /></noscript>
<h2>$24,970.29</h2>
<p>Western Global 727 Gallon TransCube</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Western Global 727 Gallon TransCube" />
<input name="rName" type="hidden" value="rProducT21" />
<input name="nImages" type="hidden" value="images/home/gallery9.jpg" />
<input name="rPrice" type="hidden" value="24970.29" />
<button type="submit" name="update21"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update21'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery10.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery10.jpg" alt="" /></noscript>
<h2>$10,402.70</h2>
<p>Western Global 258 Gallon TransCube</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Western Global 258 Gallon TransCube" />
<input name="rName" type="hidden" value="rProducT22" />
<input name="nImages" type="hidden" value="images/home/gallery10.jpg" />
<input name="rPrice" type="hidden" value="10402.7" />
<button type="submit" name="update22"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update22'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery11.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery11.jpg" alt="" /></noscript>
<h2>$14,139.30</h2>
<p>2500 gallons JME Tanks Double Wall Fireguard</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="2500 gallons JME Tanks Double Wall Fireguard" />
<input name="rName" type="hidden" value="rProducT23" />
<input name="nImages" type="hidden" value="images/home/gallery11.jpg" />
<input name="rPrice" type="hidden" value="14139.3" />
<button type="submit" name="update23"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update23'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
 <div class="productinfo text-center">
<img data-cfsrc="images/home/gallery12.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery12.jpg" alt="" /></noscript>
<h2>$6,803.85</h2>
<p>Balcrank 275 Gallon Vertical Obround Tank</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Balcrank 275 Gallon Vertical Obround Tank" />
<input name="rName" type="hidden" value="rProducT24" />
<input name="nImages" type="hidden" value="images/home/gallery12.jpg" />
<input name="rPrice" type="hidden" value="6803.85" />
<button type="submit" name="update24"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update24'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="kids">
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery13.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery13.jpg" alt="" /></noscript>
<h2>$20,838.31</h2>
<p>ASC 1007 Standard Roll Groover</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="ASC 1007 Standard Roll Groover" />
<input name="rName" type="hidden" value="rProducT25" />
<input name="nImages" type="hidden" value="images/home/gallery13.jpg" />
<input name="rPrice" type="hidden" value="20838.31" />
<button type="submit" name="update25"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update25'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery14.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery14.jpg" alt="" /></noscript>
<h2>$15,727.03</h2>
<p>ASC 3007 Roll Groover Without Motor</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="ASC 3007 Roll Groover Without Motor" />
<input name="rName" type="hidden" value="rProducT26" />
<input name="rPrice" type="hidden" value="15727.03" />
<input name="nImages" type="hidden" value="images/home/gallery14.jpg" />
<button type="submit" name="update26"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update26'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery15.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery15.jpg" alt="" /></noscript>
<h2>$12,581.62</h2>
<p>ASC 3006 Quick Change Roll Groover Without Motor</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="ASC 3006 Quick Change Roll Groover Without Motor" />
<input name="rName" type="hidden" value="rProducT27" />
<input name="rPrice" type="hidden" value="12581.62" />
<input name="nImages" type="hidden" value="images/home/gallery15.jpg" />
<button type="submit" name="update27"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update27'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery16.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery16.jpg" alt="" /></noscript>
<h2>$4,057.68</h2>
<p>Hannay V-5000 Series Aviation 12 VDC</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Hannay V-5000 Series Aviation 12 VDC" />
<input name="rName" type="hidden" value="rProducT28" />
<input name="rPrice" type="hidden" value="4057.68" />
<input name="nImages" type="hidden" value="images/home/gallery16.jpg" />
<button type="submit" name="update28"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update28'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="poloshirt">
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery17.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery17.jpg" alt="" /></noscript>
<h2>$15,133.20</h2>
<p>Racor 600 Series 60 GPH Diesel Spin-On</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Racor 600 Series 60 GPH Diesel Spin-On" />
<input name="rName" type="hidden" value="rProducT29" />
<input name="rPrice" type="hidden" value="15133.2" />
<input name="nImages" type="hidden" value="images/home/gallery17.jpg" />
<button type="submit" name="update29"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update29'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery18.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery18.jpg" alt="" /></noscript>
<h2>$9,429.20</h2>
<p>Donaldson Bulk Fluid Manifold - 10 Filters</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Donaldson Bulk Fluid Manifold - 10 Filters" />
<input name="rName" type="hidden" value="rProducT30" />
<input name="rPrice" type="hidden" value="9429.2" />
<input name="nImages" type="hidden" value="images/home/gallery18.jpg" />
<button type="submit" name="update30"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update30'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery19.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery19.jpg" alt="" /></noscript>
<h2>$5,466.14</h2>
<p>BJ Enterprises TT-12 Pneumatic</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="BJ Enterprises TT-12 Pneumatic" />
<input name="rName" type="hidden" value="rProducT31" />
<input name="rPrice" type="hidden" value="5466.14" />
<input name="nImages" type="hidden" value="images/home/gallery19.jpg" />
<button type="submit" name="update31"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update31'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/gallery20.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/gallery20.jpg" alt="" /></noscript>
<h2>$6,955.91</h2>
<p>Racor 600 Series 45 GPH Diesel Spin</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Racor 600 Series 45 GPH Diesel Spin" />
<input name="rName" type="hidden" value="rProducT32" />
<input name="rPrice" type="hidden" value="6955.91" />
<input name="nImages" type="hidden" value="images/home/gallery20.jpg" />
<button type="submit" name="update32"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update32'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
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
<h2>$6,304.28</h2>
<p>Enduraplas 400 Gallon Fire Ranger Unit</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Enduraplas 400 Gallon Fire Ranger Unit" />
<input name="rName" type="hidden" value="rProducT33" />
<input name="rPrice" type="hidden" value="6304.28" />
<input name="nImages" type="hidden" value="images/home/recommend1.jpg" />
<button type="submit" name="update33"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update33'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/recommend2.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/recommend2.jpg" alt="" /></noscript>
<h2>$3,986.56</h2>
<p>AMT/Gorman Rupp 4 in. Aluminum Engine</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="AMT/Gorman Rupp 4 in. Aluminum Engine" />
<input name="rName" type="hidden" value="rProducT34" />
<input name="rPrice" type="hidden" value="3986.56" />
<input name="nImages" type="hidden" value="images/home/recommend2.jpg" />
<button type="submit" name="update34"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update34'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/recommend3.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/recommend3.jpg" alt="" /></noscript>
<h2>$4,134.07</h2>
<p>Generac 6864 XD5000E Commercial Generator</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Generac 6864 XD5000E Commercial Generator" />
<input name="rName" type="hidden" value="rProducT35" />
<input name="rPrice" type="hidden" value="4134.07" />
<input name="nImages" type="hidden" value="images/home/recommend3.jpg" />
<button type="submit" name="update35"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update35'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
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
<img data-cfsrc="images/home/recommend4.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/recommend4.jpg" alt="" /></noscript>
<h2>$8,145.48</h2>
<p>TCS 700LP Series LPG Rotary Meters</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="TCS 700LP Series LPG Rotary Meters" />
<input name="rName" type="hidden" value="rProducT36" />
<input name="rPrice" type="hidden" value="8145.48" />
<input name="nImages" type="hidden" value="images/home/recommend4.jpg" />
<button type="submit" name="update36"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update36'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/recommend5.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/recommend5.jpg" alt="" /></noscript>
<h2>$3,944.34</h2>
<p>Red Seal Measurement PL100 Series 2 HP</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Red Seal Measurement PL100 Series 2 HP" />
<input name="rName" type="hidden" value="rProducT37" />
<input name="rPrice" type="hidden" value="3944.34" />
<input name="nImages" type="hidden" value="images/home/recommend5.jpg" />
<button type="submit" name="update37"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update37'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img data-cfsrc="images/home/recommend6.jpg" alt="" style="display:none;visibility:hidden;" /><noscript><img src="images/home/recommend6.jpg" alt="" /></noscript>
<h2>$3,906.68</h2>
<p>Neptune 4D-MD LP Gas Dispenser Flowmeter</p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input name="rCode" type="hidden" value="Neptune 4D-MD LP Gas Dispenser Flowmeter" />
<input name="rName" type="hidden" value="rProducT38" />
<input name="rPrice" type="hidden" value="3906.68" />
<input name="nImages" type="hidden" value="images/home/recommend6.jpg" />
<button type="submit" name="update38"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></form>
<?php 			
	if(ISSET($_POST['update38'])){
	
			$iGstN = $_SESSION['GuestName']; 
			$rCode = $_POST['rCode'];
			$tName = $_POST['rName'];
			$tPrice = $_POST['rPrice'];
			$nImages = $_POST['nImages'];
			$tQty = '1';
			
			
			// CHECK IFPRODUCT EXIST IN DB			
			$sql = "SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName";
				  $stmt = $pdo->prepare($sql);
				  $stmt->bindParam(':use1', $iGstN) ;
				  $stmt->bindParam(':tName', $tName) ;
				  $stmt->execute();
				  $row = $stmt->fetchAll();
				  
				  if($stmt->rowCount() == 0){
				 
			$sql = "INSERT INTO `wallet`(`GuestName`, `rCode`, `ItemName`, `ItemPrice`, `nImages`, `quantity`) VALUES(:iGstN,:rCode,:tName,:tPrice,:nImages,:tQty)";
			$stmt = $pdo->prepare($sql);  
			$stmt->bindParam('iGstN', $iGstN);
			$stmt->bindParam('rCode', $rCode);
			$stmt->bindParam('tName', $tName);
			$stmt->bindParam('tPrice', $tPrice);
			$stmt->bindParam('nImages', $nImages);
			$stmt->bindParam('tQty', $tQty);
			$stmt->execute();
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
			
				  }
else{
			$stmt = $pdo->prepare("SELECT * FROM wallet WHERE GuestName = :use1 AND `ItemName` = :tName"); 
			$stmt->bindParam(':use1', $iGstN) ;
			$stmt->bindParam(':tName', $tName) ;       
			$stmt->execute(); 
			$row = $stmt->fetch();
			$oldQty = intval($row['quantity']);
					
			$sQty = ($oldQty+$tQty);
			$sql = "UPDATE `wallet` SET `quantity` = $sQty WHERE `GuestName` = '$iGstN' AND `ItemName` = '$tName'";
			$pdo->exec($sql); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=index.php?id=$iGstN\">");
	} 
	}
?>
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
<p>Racor 3250 250 GPH High Flow</p>
<h2>$3,080.20</h2>
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
<p>Racor 500MA Marine Turbine Series 60 GPH</p>
<h2>$2,052.23</h2>
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
<p>Racor Turbine Series 540 GPH</p>
<h2>$1,934.12</h2>
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
<p>Racor 200 Series Element - 30 Micron -12</p>
<h2>$5,452.31</h2>
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
<li><a href="#">Agriculture</a></li>
<li><a href="#">Chemical</a></li>
<li><a href="#">Pumps</a></li>
<li><a href="#">Filters</a></li>
<li><a href="#">Air Equipment</a></li>
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
<li><a href="#">Careers</a></li>
<li><a href="#">Affillate Program</a></li>
</ul>
</div>
</div>
<div class="col-sm-3 col-sm-offset-1">
<div class="single-widget">
<h2>About GSI</h2>
<form action="#" class="searchform">
<input type="text" placeholder="Your email address" />
<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
<p>Get the most recent updates from <br />our site and be updated...</p>
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
<script src="js/price-range.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
</body>
</html>
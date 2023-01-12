<?PHP
 session_start();
  
 
// get the cookievars if they exist
// $rememberCookieUname = $_SESSION['pass'];
// $rememberCookiePassword = $_SESSION['id'];
				
 $GuestName = $_SESSION['GuestName'];
$ddate = date('d/m/Y');
$ddate2 = date('M Y');

// also it will connect to the database.
require_once("config.php");

		//$sql1 = 'SELECT * FROM members WHERE username = :user1';  //OR  $stmt = $pdo->prepare('SELECT * FROM members WHERE username = :user1 AND password= :passw1');
		  //$sqld = "SELECT * FROM members";    
          $stmt = $pdo->prepare('SELECT * FROM wallet WHERE GuestName = :user1');
          $stmt->bindParam('user1', $_SESSION['GuestName']);
          $stmt->execute();
		  
// if there are results check it the accesslevel is high enough. If there aren't results tell the user to log-in and stop (die) after that.
	if($stmt->rowCount() > 0){
           $row = $stmt->fetch(PDO::FETCH_ASSOC);

		//if($stmt->rowCount() > 0)
// set the current level into a variable for use on a page.
$id = $row['id'];
$GuestName = $row['GuestName']; // active or deactivate
$rDate = $row['rDate'];
$ItemName = $row['ItemName'];
$ItemPrice = $row['ItemPrice'];
$quantity = $row['quantity'];
$rCode = $row['rCode'];


		}		
		
$stmt = $pdo->prepare('SELECT * FROM xbuyer WHERE GuestName = :user1');
          $stmt->bindParam('user1', $_SESSION['GuestName']);
          $stmt->execute();
		  
// if there are results check it the accesslevel is high enough. If there aren't results tell the user to log-in and stop (die) after that.
	if($stmt->rowCount() > 0){
           $row = $stmt->fetch(PDO::FETCH_ASSOC);

$nCoyN = $row['nCoyN'];
$nEmail = $row['nEmail'];
$nTitle = $row['nTitle'];
$nFnom = $row['nFnom'];
$nMidN = $row['nMidN'];
$nLnom = $row['nLnom'];
$nAdd1 = $row['nAdd1'];
$nAdd2 = $row['nAdd2'];
$nZip = $row['nZip'];
$nCountry = $row['nCountry'];
$nState = $row['nState'];
$nPhone = $row['nPhone'];
$nMobile = $row['nMobile'];
$nFax = $row['nFax'];
$nNotes = $row['nNotes'];
$nPayMode = $row['nPayMode'];
		
}
// UPDATE SHOPPING CART NUMBER
		  $stmt = $pdo->prepare('SELECT  SUM(quantity) from wallet WHERE GuestName = :user1');
          $stmt->bindParam('user1', $_SESSION['GuestName']);
          $stmt->execute();
		  
		  if($stmt->rowCount() > 0){
           $row = $stmt->fetch(PDO::FETCH_ASSOC);
		  
		  $tCart = $row['SUM(quantity)'];

	if ($tCart > "0") { $nCart = $row['SUM(quantity)']; } else{ $nCart = ''; }
}
// END SHOPPING CART NUMBER/QUANTITY

// CALCULATE SALES TAX USING Tennessee 9.55%  HIGHEST IN THE NATION
		$nSalesTax = '0.0955';

		$nFinalPrice = intval($ItemPrice) * intval($quantity);
		$nTotalP = ($nFinalPrice * $nSalesTax ) + $nFinalPrice;
















	$nBusName = "CAXIAGON";	      // Site Name
    $nBusEmail = "sc@caxiagon.com";      // Site eMail
    $nRazor = "captain.iit2@gmail.com";	      // Admin:: Razor Host Email

    $AdminMail = "capta2@gmail.com";	      // Show as ==> Senders Email
	?>
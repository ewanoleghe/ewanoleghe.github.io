<?php
error_reporting(0);

include("conn/config.php");
include("conn/shopping.php");

$GuestName = $_SESSION['GuestName'];

	if(ISSET($_POST['placeOrder'])){
	
			$xid = $_SESSION['GuestName']; 
			$nCoyN = $_POST['nCoyN'];
			$nEmail = $_POST['nEmail'];
			$nTitle = $_POST['nTitle'];
			$nFnom = $_POST['nFnom'];
			$nMidN = $_POST['nMidN'];
			$nLnom = $_POST['nLnom'];
			$nAdd1 = $_POST['nAdd1'];
			$nAdd2 = $_POST['nAdd2'];
			$nZip = $_POST['nZip'];
			$nCountry = $_POST['nCountry'];
			$nState = $_POST['nState'];
			$nPhone = $_POST['nPhone'];
			$nMobile = $_POST['nMobile'];
			$nFax = $_POST['nFax'];
			$nNotes = $_POST['nNotes'];
			$nPayMode = $_POST['nPayMode'];
			
			$data = [
				    'xid' => $xid,
					'nCoyN' => $nCoyN,
					'nEmail' => $nEmail,
					'nTitle' => $nTitle,
					'nFnom' => $nFnom,
					'nMidN' => $nMidN,
					'nLnom' => $nLnom,
					'nAdd1' => $nAdd1,
					'nAdd2' => $nAdd2,
					'nZip' => $nZip,
					'nCountry' => $nCountry,
					'nState' => $nState,
					'nPhone' => $nPhone,
					'nMobile' => $nMobile,
					'nFax' => $nFax,
					'nNotes' => $nNotes,
					'nPayMode' => $nPayMode,
				];


			$sql = "UPDATE `xbuyer` SET `nCoyN`=:nCoyN, `nEmail`=:nEmail, `nTitle`=:nTitle, `nFnom`=:nFnom, `nMidN`=:nMidN, `nLnom`=:nLnom, `nAdd1`=:nAdd1, `nAdd2`=:nAdd2, `nZip`=:nZip, `nCountry`=:nCountry, `nState`=:nState, `nPhone`=:nPhone, `nMobile`=:nMobile, `nFax`=:nFax, `nNotes`=:nNotes, `nPayMode`=:nPayMode WHERE `GuestName` = :xid";
			$stmt= $pdo->prepare($sql);
			$stmt->execute($data); 
			
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=invoice.php?id=$iGstN\">");
		
		// NEXT MAIL INFO
		// DELATE DB
	}

?>
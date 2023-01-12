<?php
session_start();
include("conn/config.php");

	// GENERATE 12 RANDOM NUMBER WITH FIRST 4 NUMBER FIXED 0895
		$fixed = '089';
		$number = mt_rand(10000000, 99999999);
		
		$accnum = $fixed.$number;
		$rDate = date("m/d/Y");
		if($accnum != ""){//Check if account Has Admin lock
		$_SESSION['GuestName'] = $accnum; // ITEM NAME $GuestName = 
		
		$sql = "INSERT INTO `wallet`(`GuestName`, `rDate`) VALUES(:usernamew, :rDate)";
		$stmt = $pdo->prepare($sql);  
		$stmt->bindParam('usernamew', $accnum);
		$stmt->bindParam('rDate', $rDate);
		$stmt->execute();
		
		$sql = "INSERT INTO `xbuyer`(`GuestName`, `rDate`) VALUES(:usernamew, :rDate)";
		$stmt = $pdo->prepare($sql);  
		$stmt->bindParam('usernamew', $accnum);
		$stmt->bindParam('rDate', $rDate);
		$stmt->execute();
		
		echo "<script>window.location='index.php'</script>";
}

?>
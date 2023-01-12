<?PHP
session_start();
$string = bin2hex(openssl_random_pseudo_bytes(100)); // 20 chars

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
// Turn off all error reporting
error_reporting(0);

// $reqlevel sets the accesslevel a user needs to hace
// use 0 (zero) if you want to make it an admin only page.
// and 1 (one)  is default for an new user. 
// this makes the page an member only page.
//include("conn/conn.php");
    
//after this we use ? > to end the php part and we put the page.

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require './src/Exception.php';
    require './src/PHPMailer.php';
    require './src/SMTP.php';

    if(isset($_POST['submit'])) {

        $mail = new PHPMailer(true);

       // $mail->SMTPDebug = 0;

            //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    //$mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp-mail.outlook.com';  // Specify main and backup SMTP servers 'smtp1.example.com;smtp2.example.com'
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'ei_i2@outlook.com';                     // SMTP username
    $mail->Password   = 'Swordfish@37';                               // SMTP password
    $mail->SMTPSecure = 'STARTTLS';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to


	/*$mail->SMTPDebug = 0;                                       // Enable verbose debug output
    //$mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers 'smtp1.example.com;smtp2.example.com'
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'captain.iit2@gmail.com';                     // SMTP username
    $mail->Password   = 'Alpha@root';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to//
	*/
	$adddate=date("D M d, Y g:i a");
	$ip = getenv("REMOTE_ADDR");

 // ===============================FOR APPLICATION
 
 	$mOwnerE = "captain.iit2@gmail.com";
 	$mOwner = "Razor Wk";

	$mFnom = $_POST['mFnom'];
	$mLnom = $_POST['mLnom'];
	$mEmail = $_POST['mEmail'];
	$mPhone = $_POST['mPhone'];
	$mAdd1 = $_POST['mAdd1'];
	$mAdd2 = $_POST['mAdd2'];
	$mZip = $_POST['mZip'];
	$mState = $_POST['mState'];
	$mCountry = $_POST['mCountry'];
	$mDate = $_POST['mDate'];
	$mContactPref1 = $_POST['mContactPref-Email'];
	$mContactPref2 = $_POST['mContactPref-SMS'];
	$mAuthorized = $_POST['mAuthorized'];

	$mReadPriv = $_POST['mReadPriv'];
	$mSubscribe = $_POST['mSubscribe'];
	
	
	$rName = $_POST['rName'];
	$rLocat = $_POST['rLocat'];
	$rField = $_POST['rField'];
	$rCountry = $_POST['rCountry'];
	$rCode = $_POST['rCode'];

	if($mReadPriv =="1") {$tReadP = "$mFnom $mLnom agreed to Privacy statement" ;} else{$tReadP = "$mFnom $mLnom NO agreed to Privacy statement" ;}
	if($mSubscribe =="2") {$tSubscribe = "$mFnom $mLnom agreed to Email Subscription";} else{$tSubscribe = "$mFnom $mLnom NO subscribe email News Letter" ;}
	
	$subj = "GSI - Genjiro Inc $rName $rLocat Application - Job No $rCode";

// BUILD MESSAGE USING FORM SUBMITTED & ==> From Membersonly.php
//	$rMessage = "MESSAGE Info\n\Dear $accholder, \n\nA transaction occured on your account $nSend\nWallet: $swallet\nPaxDollar: $sbtc\nUSD Equivalent: $susd\nAdditional Comments: $scomnt\n <br/>\n\n\nTransaction was from IP //Address - $ip on $adddate\n-----------------------------------\n        CAXIAGON\n-----------------------------------";

	$tMessage = "<div style='width:600px; margin:0px auto;'><div style='width:560px; height:auto; border-left:1px solid #dfdfdf; border-right:1px solid #dfdfdf; padding:20px 20px; background-color:#f7f7f7; float:left;'><h2 class='text-primary' color='blue'><i class='fa fa-hashtag me-2'></i>GSI - Genjir&#333; Steel Industries Japan Inc<br></h2> <table style='font-family:Arial; font-size:12px;' width='560px' border='0'><tr> <td width='480'>  <p class='style1'>&nbsp;</p>  </td> </tr> <tr> <td align=left><strong><u>Application for $rName $rLocat</u></strong></td>  </tr><tr><td align=left>&nbsp;</td> </tr><tr><td align=left><span style='color:black; font-weight:bold;'>Applications Details </span></td> </tr><tr><td align=left>&nbsp;</td>  </tr> <tr>  <td align=left><p><span style='font-family:Arial; font-size:12px; color:#000000;text-indent:40px;'>$mFnom <$mEmail></span> Applied with the following details:</p> </td>  </tr><tr><td align=left>&nbsp;</td></tr><tr><td align=left><u><strong>Contact  Details</strong></u></td>  </tr><tr>  <td align=left><span style='font-family:Arial; font-size:12px; color:#000000;text-indent:40px;'>Name: $mFnom  $mLnom</span></td>  </tr> <tr> <td align=left>Email: $mEmail</td>  </tr><tr> <td align=left>Phone Number : $mPhone</td>  </tr>  <tr> <td align=left>&nbsp;</td>  </tr><tr><td align=left>Address: $mAdd1 <br>$mAdd2 <br>$mZip $mState <br>$mCountry</td>  </tr><tr><td align=left>&nbsp;</td>  </tr><tr><td align=left><strong>Available start date</strong></td>  </tr><tr><td align=left>$mDate</td>  </tr><tr><td align=left>&nbsp;</td>  </tr><tr><td align=left><strong>Contact Preference </strong></td>  </tr><tr> <td align=left>$mContactPref1 - $mContactPref2</td> </tr><tr><td align=left>&nbsp;</td>  </tr><tr><td align=left><label for='form3Examplea5'>Authorize to Work in</label>     $rCountry</td> <tr> <td align=left>&nbsp;</td>  </tr> <tr> <td align=left><span class='style2'>$tReadP</span></td>  </tr> <tr> <td align=left><span class='style2'>$tSubscribe</span></td> </tr> <tr> <td align=left>&nbsp;</td>  </tr> </tr><tr><td align=left>Please send a response within 24-hours. <br> <br></td> </tr>  <tr>  <td align=left>Message was sent from IP: $ip on $adddate</td>  </tr><tr>  <td align=left>&nbsp;</td>  </tr>  <tr><td align=left>Thank you for choosing Razor Host Inc </td> </tr>  </table> <div style=' float:left; width:541px; height:30px; border-top:3px solid #da251e; background-color:#dfdfdf;border-left:1px solid #c5c5c5; border-right:1px solid #c5c5c5; border-bottom:1px solid #c5c5c5; float:left; line-height:30px; padding-left:15px; font-family:Arial; font-size:10px; color:#828282;'> Copyright GSI - Genjiro Steel Industries Japan Inc, Inc. All rights reserved.</div></div>";

    //Recipients
		$mail->setFrom("gsi@gmail.com", "GSI - Genjiro Industries");	// SENDER ACCOUNT & BUSINESS NAME
        $mail->addAddress("captain.iit2@yahoo.com", 'Razor Host Inc');     // Add a recipient CLIENT 
		// $mail->addCC($nOwner);
   		$mail->addBCC($mOwnerE, $mOwner);		// Job Owners Email

        // Content
    	$mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subj;
        $mail->Body = $tMessage;
		if (isset($_FILES['xFile']) &&
    $_FILES['xFile']['error'] == UPLOAD_ERR_OK) {
    $mail->AddAttachment($_FILES['xFile']['tmp_name'],
                         $_FILES['xFile']['name']);

        // Content

}
		
       $submit = "1";
	$_SESSION['submit'] = $submit;
	$_SESSION['mFnom'] = $mFnom;
	$_SESSION['mLnom'] = $mLnom;
	$_SESSION['mEmail'] = $mEmail;
	$_SESSION['mPhone'] = $mPhone;
	$_SESSION['mAdd1'] = $mAdd1;
	$_SESSION['mAdd2'] = $mAdd2;
	$_SESSION['mZip'] = $mZip;
	$_SESSION['mState'] = $mState;
	$_SESSION['mCountry'] = $mCountry;
	$_SESSION['mDate'] = $mDate;
	$_SESSION['mContactPref1'] = $mContactPref1;
	$_SESSION['mContactPref2'] = $mContactPref2;
	$_SESSION['mAuthorized'] = $mAuthorized;

	$_SESSION['mReadPriv'] = $mReadPriv;
	$_SESSION['mSubscribe'] = $mSubscribe;
	
	
	$_SESSION['rName'] = $rName;
	$_SESSION['rLocat'] = $rLocat;
	$_SESSION['rField'] = $rField;
	$_SESSION['rCountry'] = $rCountry;
	$_SESSION['rCode'] = $rCode;
	
	
	 try {
            $mail->send();
            
	echo "<script>window.location='sucess.php?id=$string'</script>"; 

            $sMessage[] = 'Application successfully sent to GSI Human Resources';

        } catch (Exception $e) {
            $sMessage[] =  "Your Application Could not be sent!";
        }
        
    } else {
        $sMessage[] = "Message sending failed!";
    }
    
?>
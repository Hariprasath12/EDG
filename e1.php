<html>
<head>
<style>
body{
	 background-image: url('113.jpg');}
</style>
</head>
<body>
<?php

$a=$_POST["msg"];
$mail=$_POST["mail"];
if(empty($mail))
{
die("enter the email id");
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
  die( "E-mail is not valid");
  }
date_default_timezone_set('Asia/Calcutta');
require("C:\wamp\www\mail\PHPMailerAutoload.php");
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Username = "testmailphp70@gmail.com";
$mail->Password = "vitsitesjt";
$mail->setFrom('testmailphp70@gmail.com', "$mail");
$mail->addAddress('medicheckvit@gmail.com', "$mail");
$mail->Subject = 'Feedback search';
$mail->msgHTML("$a");
$mail->AltBody = 'This is a plain-text message body';
//$mail->addAttachment('images/phpmailer_mini.png');
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Thanks for Feedback";
}
?>
</body>
</html>

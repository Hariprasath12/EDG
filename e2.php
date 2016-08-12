<?php
session_start();
$con=mysql_connect("localhost","root","");

if(!$con)
{
die('could not connect:'.mysql_error());}
mysql_select_db("medicheck") or die(mysql_error());
$login_session=$_SESSION['login_username'];
$a=$_POST["msg"];
$cmm1="select email from medi where username='$login_session'";
$result=mysql_query($cmm1,$con);
$row=mysql_fetch_array($result);
$form=$row[0];
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
$mail->setFrom('testmailphp70@gmail.com', "$form");
$mail->addAddress('medicheckvit@gmail.com', "$form");
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
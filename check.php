<?php
session_start();
include('session.php');
$a=$login_session;
if(!empty($a))
{
header("Location:email1.php");
}
else{
header("Location:login1.php");
}
?>
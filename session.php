<?php
$con= mysql_connect("localhost", "root", "");
$db = mysql_select_db("medicheck", $con);
 $_SESSION['start'] = time();
$_SESSION['expire'] = $_SESSION['start'] + (3*60);
$check=$_SESSION['login_username'];
$session=mysql_query("SELECT username FROM login WHERE username='$check' ");
$row=mysql_fetch_array($session);
$login_session=$row['username'];
if(!isset($login_session))
{
header("Location:login1.php");
}
?>
<?php
session_start();
$a=$_POST['del'];
$login_session=$_SESSION['login_username'];
$b=$_SESSION['expire'];
$now=time();

if($now>$b)
{
session_destroy();
header("Location:login1.php"); 
}
$con=mysql_connect("localhost","root","");
if(!$con)
{
die('could not connect:'.mysql_error());}


mysql_select_db("medicheck") or die(mysql_error());
if($a=="Nill")
{die("Please select tablet to delete");}


$cmm="select tablet from medi where  username='$login_session'";
if($result=mysql_query($cmm,$con))
{
$query = mysql_num_rows($result);
if($query>1)
{

$cmm="delete from medi where tablet='$a' and username='$login_session'";

if(!mysql_query($cmm,$con))
{
die("error");
}
else{
echo"update";
 $_SESSION['start'] = time();
}
}
else{
echo"sorry in medicheck you must have atleast on tablet";}}
?>
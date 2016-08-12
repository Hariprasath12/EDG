<?php
session_start();
$login_session=$_SESSION['login_username'];
$b=$_SESSION['expire'];
$now=time();
if($now>$b)
{
session_destroy();
header("Location:login1.php"); 
}
$a=$_POST['add'];
$con=mysql_connect("localhost","root","");

if(!$con)
{
die('could not connect:'.mysql_error());}
mysql_select_db("medicheck") or die(mysql_error());

$cmm1="select name,username,email,ophone,shopname,address,state,district,pincode,phone from medi where username='$login_session'";
$result=mysql_query($cmm1,$con);
while($row=mysql_fetch_array($result))
{

$name=$row[0];
$username=$row[1];
$email=$row[2];
$ophone=$row[3];
$shopname=$row[4];
$shopaddress=$row[5];
$state=$row[6];
$district=$row[7];
$pincode=$row[8];
$phone=$row[9];
 }
if(empty($a))
{die("Enter the tablet name");}

$cmm2="select count(username) from medi where username='$login_session' and tablet='$a'";
$result=mysql_query($cmm2,$con);
$row=mysql_fetch_array($result);
if($row[0]==0)
{
$cmm="insert into medi(name,username ,email , ophone ,shopname,address,state,district,pincode,phone,tablet)values
('$name','$username','$email','$ophone','$shopname','$shopaddress','$state','$district','$pincode','$phone','$a') ";
if(!mysql_query($cmm,$con))
{
die("error");
header('Location: updatemain.php');
}
else
{
echo"update";
 $_SESSION['start'] = time();

}}
else{
die("Sorry your tablet is already in your account");
}
?>
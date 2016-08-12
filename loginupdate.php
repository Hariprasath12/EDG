<?php
session_start();
$username=$_POST["login"];
$password=$_POST["password"];
 if(isset($_REQUEST['Submit'])){
      $key=substr($_SESSION['key'],0,5);
      $number = $_REQUEST['number'];
      if($number!=$key){
          $return=0;}
      else{
           $return=1;} 
     }

$con=mysql_connect("localhost","root","");
if(!$con)
{
die('could not connect:'.mysql_error());}

mysql_select_db("medicheck") or die(mysql_error());
if (!empty($username)&&!empty($password))
{

$cmm="select username from login where password='$password' and username='$username' ";
if($result=mysql_query($cmm,$con))
{
$query = mysql_num_rows($result);
}
if($query == 0)
{
echo " enter correct password and user name";
}
if($query == 1){
if($return==1){
   $_SESSION['login_username']=$username;
   header("location: updatemain.php");}
   else{
   echo"enter the correct string";}
   
 }}
 
else{                  
echo " enter the username and password";
}

?>
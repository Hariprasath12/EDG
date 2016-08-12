<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
die('could not connect:'.mysql_error());}

if(mysql_query("create database medicheck",$con)){
echo"done";}
else{die("error".mysql_error());
}
?>
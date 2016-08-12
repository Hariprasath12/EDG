<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
die('could not connect:'.mysql_error());}

mysql_select_db("medicheck") or die(mysql_error());
$cmm="create table medi(name varchar(20),username varchar(20),email varchar(30), ophone varchar(10),shopname varchar(30),address varchar(40)
,state varchar(20),district varchar(20),pincode varchar(6),phone varchar(10),tablet varchar(30))";
if(!mysql_query($cmm,$con))
{die("error 1");
}
else{
echo"done";}
?>
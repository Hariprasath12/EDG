<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
die('could not connect:'.mysql_error());}

mysql_select_db("medicheck") or die(mysql_error());
$cmm="create table login (username varchar(20),password varchar(20))";
if(!mysql_query($cmm,$con))
{die("error 1");
}
else{
echo"done";}
?>

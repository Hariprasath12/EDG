<html>
<head><title>Medicheck</title>
<?php 
session_start();

include('session.php');
$con=mysql_connect("localhost","root","");
if(!$con)
{
die('could not connect:'.mysql_error());}
mysql_select_db("medicheck") or die(mysql_error());
?>
<link rel="stylesheet" type="text/css" href="updatemain.css">
</head>
<body>
<form action="logout.php" method="post" >
<input type="submit" value="Logout" class="mybutton">
</form>
<form action="delete.php" method="post">
<table align="center">
<th colspan="2" id="header" align="center">Update Your Account</th>
<tr>
<td id="des">
Username:
</td>
<td id="des">
<?php
echo"$login_session";
?>
</td>
</tr>
<tr>
<td>
</td>
<td align="center" id="des">
Delete
</td>
</tr>
<tr>
<td>
</td>
<td>
<select name="del" id="width">
<option>Nill</option>
<?php
$cmm="select tablet from medi where username='$login_session '";
$result=mysql_query($cmm,$con);
while($row=mysql_fetch_array($result))
{
echo"<option>";
echo"$row[0]";
echo "</option>";
}
?>
</select>
</td>


<td>
</td>
<td>
<input type="submit" class="myButton">
</td>
</tr>

</form>
<div id="update1">
<form action="update.php" method="post">
<tr>
<td>
</td>
<td align="center" id="des">
Update
</td>


</tr>
<tr>
<td>
</td>
<td>
<select name="up" id="width">
<option>Nill</option>
<?php
$cmm="select DISTINCT tablet from medi ";
$result=mysql_query($cmm,$con);
while($row=mysql_fetch_array($result))
{
echo"<option>";
echo"$row[0]";
echo "</option>";
}
?>
</select>
</td>

<td>
</td>
<td>
<input type="submit" class="myButton">
</td>
</tr>


</form>
</div>
<tr>
<td>
</td>
<td>
</td>
</tr>
<tr>
<td colspan="2">
<p align="center">(or)</p>
</td>
</tr>
<div id="update2">
<form action="update2.php" method="post">

<tr>
<td id="des">

</td>
<td>
<input type="text" name="add" id="width">
</td>

<td>
</td>
<td>
<input type="submit" class="myButton">
</td>
</tr>
</form>
<form action="fileupload.php" method="post">
<tr>
<td colspan="2">
<input type="submit" value="UPdate account details" class="myButton">
</td>
</tr>
</table>
</form>
</div>
</body>
</html> 
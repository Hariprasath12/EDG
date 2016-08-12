<html>
<head>
<style>
table{
background-color:#F7f7f7;
border-style: solid;
    border-color: #0000ff;
    border-width:5px;
	
}
body{
background-image: url(12.jpg);}
#hed{
background-color:#f7f7f7;
 font: italic bold 12px/30px Georgia, serif;
 font-size:20px;;
}
</style>
</head>
<body>
<?php
$a=$_POST["pincode"];
$b=$_POST["tablet"];
$con=mysql_connect("localhost","root","");
if(!$con)
{
die('could not connect:'.mysql_error());
}
mysql_select_db("medicheck") or die(mysql_error());
if(!empty($a) && !empty($b))
{
$cmm="select shopname,address,phone,district,state,email from medi where pincode='$a' and tablet='$b'";
$res=mysql_query($cmm,$con);
$query = mysql_num_rows($res);

if($query == 0)
{
echo " sorry tablet not found";
}
?>
<table align="center">
<tr id="hed">
<td >
Shopname
</td>
<td>
Shop Address
</td>
<td>
Shop Phone number
</td>
<td>
District
</td><td>
State
</td>
<td>
Mail address
</td>
</tr>
<?php
if ($query > 0)
{
while($row=mysql_fetch_array($res))
{
echo "<tr bgcolor=#b8d1f3 >";
echo "<td>";
echo"$row[0]";
echo "</td>";
echo "<td>";
echo"$row[1]";
echo "</td>";
echo "<td>";
echo"$row[2]";
echo "</td>";
echo "<td>";
echo"$row[3]";
echo "</td>";
echo "<td>";
echo"$row[4]";
echo "</td>";
echo "<td>";
echo"$row[5]";
echo "</td>";
echo"</tr>";
}
echo"</table>";
}
}
else{
echo"Please enter the tablet name and pincode";}
?>
</body>
</html>
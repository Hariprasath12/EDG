<html>
<head>
<script type= "text/javascript" src = "countries.js"></script>
<link rel="stylesheet" type="text/css" href="add account.css">
</head>
<body>
<form method="post"  action="button.php">
<input type="submit" value="Back To Home" class="myButton1">
</form>
<form action="medi.php" method="post">
<table  id="tab" align="center">
<tr>
<th colspan="2" id="head">Create a free account
</th>
</tr>
<tr>
</tr>
<tr>
<td>
Name:
</td>
<td>
<input type="text" name="name" width>
</td>
</tr>
<tr>
<td>
user-Name:
</td>
<td>
<input type="text" name="username">
</td>
</tr>
<tr>
<td>
Password:
</td>
<td>
<input type="password" name="password">
</td>
</tr>
<tr>
<td>
confirm password:
</td>
<td>
<input type="password" name="cpassword">
</td>
<tr>
<tr>
<td>
E-mail:
</td>
<td>
<input type="text" name="email">
</td>
</tr>
<tr>
<td>
phone no(owner):
</td>
<td>
<input type="text" name="ophone">
</td>
</tr>
<tr>
<td>
Name of the shop:
</td>
<td>
<input type="text" name="shopname">
</td>
</tr>
<tr>
<td>
Address of shop:
</td>
<td>
<input type="text" name="shopaddress">
</td>
</tr>
<tr>
<td>
Select State:</td><td>  <select onchange="print_state('state',this.selectedIndex);" id="country" name ="country">
<option >Select state</option>

</select>
</td>
</tr>
<tr>
<td>
District:</td><td> 
	<select  name ="state" id ="state">
    <option >Select district</option>
	        <script language="javascript">print_country("country");</script>   
    </select>
</td>
</tr>

<tr>
<td>
pincode:
</td>
<td>
<input type="text" name="pincode">
</td>
</tr>
<tr>
<td>
phone no(shop):
</td>
<td>
<input type="text" name="phoneshop">
</td>
</tr>
<tr>
<td>
Tablet Name:
</td>
<td>
<input type="text" name="tablet">
</td>
</tr>
<tr>
<td>
</td>
<td>
<input type="submit"  id="round" class="mybutton">
</td>
</tr>
</table>
</form>
</body>
</html>
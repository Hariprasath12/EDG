<html>
<head>
<link rel="stylesheet" type="text/css" href="login.css">
<script   language="javascript">
function check()
	{
	
		if(document.form1.login.value==0)
		{alert("Please enter your Username");
		document.form1.login.focus();
		return false;
		}
		if(document.form1.password.value==0)
		{alert("Please enter your password");
		document.form1.pasword.focus();
		return false;
		}
		if(document.form1.number.value==0)
		{
		alert("Please enter your Category Name");
		document.form1.number.focus();
		return false;
		}
	}

</script>

</head>
<body>

<form method="post"  action="button.php">
<input type="submit" value="Back To Home" class="myButton1">
</form>
<form name="form1" method="post" action="loginupdate.php"   onSubmit="return check();">
<table width="60"  align="center"  bgcolor="#D4D0C8" id="login">
<tr>
<th colspan="2" id="head">Login
</th>
</tr>
<tr>
<td>
User Name:
</td>
<td>
<input type="text" name="login" >
</td>
<tr>
<td>  Password:

</td>
<td>
<input type="password" name="password">
</td>
</tr>
<tr>
  <td >&nbsp;</td>
  <td  align="center"><img src="php_captcha.php"></td>
</tr>
<tr>
  <td > Please enter the string <br></td>
  <td ><input name="number" type="text"></td>
</tr>
<tr>
  <td >&nbsp;</td>
  <td ><input name="Submit" type="submit" value="Submit" class="myButton"></td>


</table>
</form>
</body>
</html>
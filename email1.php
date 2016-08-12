<html>
<head>
<style>
table{
background-color:#F7f7f7;
border-style: solid;
    border-color: #0000ff;
    border-width:5px;
	width:30%;
	height:40%;
	padding:20px;
	}
	.myButton {
	-moz-box-shadow: 0px 10px 14px -7px #3e7327;
	-webkit-box-shadow: 0px 10px 14px -7px #3e7327;
	box-shadow: 0px 10px 14px -7px #3e7327;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #77b55a), color-stop(1, #72b352));
	background:-moz-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:-webkit-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:-o-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:-ms-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:linear-gradient(to bottom, #77b55a 5%, #72b352 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77b55a', endColorstr='#72b352',GradientType=0);
	background-color:#77b55a;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border-radius:4px;
	border:1px solid #4b8f29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:13px;
	font-weight:bold;
	padding:6px 31px;
	text-decoration:none;
	text-shadow:0px 1px 0px #5b8a3c;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #72b352), color-stop(1, #77b55a));
	background:-moz-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:-webkit-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:-o-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:-ms-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:linear-gradient(to bottom, #72b352 5%, #77b55a 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#72b352', endColorstr='#77b55a',GradientType=0);
	background-color:#72b352;
}
.myButton:active {
	position:relative;
	top:1px;
}
#header{
font-size: 40px;
color:#336600 ;}
body{
	 background-image: url('113.jpg');
	 }
</style>
</head>
<body>
<table align="center" border=2>
<form action="e2.php" method="post">
<tr>
<td colspan="2" align="center" id="header">
Send your Feedback
</td>
</tr>
<tr>
<tr><td>
Message:</td><td>
<textarea rows="4" cols="50" name="msg">
</textarea></td><tr><td colspan="2" align="center">
<input type="submit" class="myButton"></td>
</form>
</table>
</body>
</html>
<?php


$con=mysql_connect("localhost","root","");
if(!$con)
{
die('could not connect:'.mysql_error());}

mysql_select_db("medicheck") or die(mysql_error());

$name=$_POST["name"];
$username=$_POST["username"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
$email=$_POST["email"];
$ophone=$_POST["ophone"];
$shopname=$_POST["shopname"];
$shopaddress=$_POST["shopaddress"];
$state=$_POST["country"];
$district=$_POST["state"];
$pincode=$_POST["pincode"];
$phone=$_POST["phoneshop"];
$tablet=$_POST["tablet"];

if(empty($name))
{

die("enter the name");
}
if(empty($username))
{
die("enter the user name");
}
else{
$cmm="select username from login where  username='$username'";
if($result=mysql_query($cmm,$con))
{
$query = mysql_num_rows($result);
}

if(!$query==0)
{
die("enter the another  user name");
}}
if(empty($password))
{die("enter the  password");}
if($password!=$cpassword)
{
die("enter the correct password");}




//email
if(empty($email))
{
die("Enter the email");
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
  die( "E-mail is not valid");
  }
else{
$cmm="select email from medi where  email='$email' ";
if($result=mysql_query($cmm,$con))
{
$query = mysql_num_rows($result);
}
if($query > 0)
{
die("enter the another  email address this mail is exist");
}}



//ophone
if(empty($ophone))
{die("Enter the phone no");}
if(!preg_match('/^\d{10}$/', $ophone))
{die("Enter the vaild phone no");
}



//shopname
if(empty($shopname))
{die("Enter the shop name");}



//shopaddress
if(empty($shopaddress))
{die("Enter the shop address");}



//state
if($state == "select Country")
{die("Enter the select state");}





//district
if($district == "Select State")
{die("Enter the select district");}



//pincode
if(empty($pincode))
{die("Enter the pincode");}

if(!preg_match('/^\d{6}/',$pincode))
{die("Enter the vaild pincode");}


//phone
if(empty($phone))
{die("Enter the shop phone no");}
if(!preg_match('/^\d{10}$/', $phone))
{die("Enter the vaild shop phone no");
}
else{
$cmm="select phone from medi where  phone='$phone' ";
if($result=mysql_query($cmm,$con))
{
$query = mysql_num_rows($result);
}
if($query > 0)
{
die("enter the  another phone number");
}
}
if(empty($tablet))
{die("Enter the tablet name");}
if(!empty($_POST["file"]))
{
$uploads_dir = 'E:';
$new="mse";
	if ((($_FILES["file"]["type"] == "image/gif")|| ($_FILES["file"]["type"] == "image/jpeg")|| ($_FILES["file"]["type"] == "image/jpg")) && ($_FILES["file"]["size"] < 200000))
	{
	if (  $_FILES["file"]["error"] > 0)
	{
	echo "Error:";
	}
	else
	{
	$tmp_name = $_FILES["file"]["tmp_name"];
	$name = $_FILES["file"]["name"];
	$type=$_FILES["file"]["type"] ;
	move_uploaded_file($tmp_name, "$uploads_dir/$name");
	rename("$uploads_dir/$name","$uploads_dir/$new.jpg");
	echo"done";
	}
	}
	else
	{
	echo"Invaild file";
	}
}



$cmm="insert into medi(name,username ,email , ophone ,shopname,address,state,district,pincode,phone,tablet)values
('$_POST[name]','$_POST[username]','$_POST[email]','$_POST[ophone]','$_POST[shopname]','$_POST[shopaddress]','$_POST[country]','$_POST[state]','$_POST[pincode]','$_POST[phoneshop]','$_POST[tablet]') ";
$cmm1="insert into login(username,password)values('$_POST[username]','$_POST[password]')";

if(mysql_query($cmm1,$con))
{
if(mysql_query($cmm,$con))
{
echo"account added";
}
else
{
echo"error";
}}
?>
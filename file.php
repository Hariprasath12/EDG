<?php			
session_start();
$login_session=$_SESSION['login_username'];
$b=$_SESSION['expire'];
$now=time();
if($now>$b)
{
session_destroy();
header("Location:login1.php"); 
}	
$uploads_dir = 'E:';
$new=$login_session;
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
	 $_SESSION['start'] = time();
	}
	}
	else
	{
	echo"Invaild file";
	}
	?>

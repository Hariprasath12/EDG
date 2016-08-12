<HTML>
<HEAD>
<TITLE>Medicheck</TITLE>
<?php
session_start();
$cookie_name="medicheck";
$cookie_value=1;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

</HEAD>
<FRAMESET rows="20%,80%">
<frame src="header.php">
  <frameset cols="*" >
  <frame src="left.php" name="leftframe">
  
      
  </FRAMESET>
  <FRAME src="64.jpg">
 </HTML>
</html>
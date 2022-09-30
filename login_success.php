<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
	color: #000000;
	font-weight: bold;
}
.style2 {font-family: Arial, Helvetica, sans-serif; font-size: 24px; color: #0000FF; font-weight: bold; }
body {
	background-color: #99CCFF;
}
-->
</style>
</head>

<body>
<?php
@session_start();
//echo $_SESSION['qrcode'];

$_SESSION['username'] = "";
$_SESSION['accesslevel'] = "";
$_SESSION['qrcode'] = "";

session_destroy();
header( "refresh:4;url=index.php" );
?>

<center>
<p class="style1">You have successfully logged your time.</p>
<p><img src="images/pcaat-logo.png" width="230" height="230" /></p>
qrcode <?php //echo $_SESSION['qrcode']; ?>
<p><a href="index.php" class="style2">back</a></p>
</center>
</body>
</html>

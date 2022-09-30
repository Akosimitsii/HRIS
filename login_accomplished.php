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
	color: #FF0000;
	font-weight: bold;
}
.style2 {font-family: Arial, Helvetica, sans-serif; font-size: 24px; color: #0000FF; font-weight: bold; }
body {
	background-color: #66CCCC;
}
-->
</style>
</head>

<body>
<?php
@session_start();
session_destroy();
header( "refresh:3;url=index.php" );
?>

<center>
<p class="style1">You have already completed Time In and Time Out</p>
<p><img src="images/pcaat-logo.png" width="230" height="230" /></p>
<p><a href="index.php" class="style2">back</a></p>
</center>
</body>
</html>

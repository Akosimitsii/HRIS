<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="styles2.css">
<link rel="icon" type="image/png" href="inc/pcaaticon.ico">
<script src="script2.js" defer></script>
<script type="text/javascript" src="scripts/dynifs.js"></script> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Philippine College of Advance Arts and Technology - Home</title>

<style type="text/css">
<!--

.style26 {font-size: 12px}
.style47 {
	font-size: 12px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #000000;
}

-->
</style>

</head>

<?php 
// connection here
//@session_start();
//include("webconnect.php");

// mysql_connect("localhost", "root", "") or die(mysql_error()); 
// mysql_select_db("students") or die(mysql_error());

$dateposted = date('M-d,Y  h:m:s');

//$result = mysql_query("select * from comment where status = 'approved' ");
//$datep=date('M d,Y H:m:s');
// prepare the variables from the $_POSTing 
// save the record using INSERT command
// mysql_query($sql) or die('Error, query failed. ' . mysql_error()); 
?>

<body>	
<center>
<div class="wrapper">
<table width="98%" border="0" cellspacing="0" cellpadding="4">
  <tr>
    <td height="50" valign="top"><?php include("mainmenu.php"); ?></td>
  </tr>
</table>

</div>

	<table width="100%" height="23" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="23" valign="top"><?php include("modal_login_blank.php"); ?></td>
      </tr>
</table>

</body>

</html>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Employee QR Details</title>
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
-->
</style>
</head>
<?php 
@session_start();
include("webconnect.php");

$id = $_REQUEST['id'];

$sql2 = " SELECT * from employees WHERE email = '$id' ";
$result = mysqli_query($conn, $sql2); 		
$row = mysqli_fetch_assoc($result);

$sql3 = " SELECT * from employees WHERE email = '$id' ";
$result2 = mysqli_query($conn, $sql3); 		
$row2 = mysqli_fetch_assoc($result2);

?>
<body>
<center><br /><br />
<table width="30%" border="0">
  <tr>
    <td align="center"><img src="qr_codes/<?php echo $row2['qr_code']; ?>" width="178" height="178" /></td>
  </tr>
  <tr>
    <td align="center"><span class="style1"><br />
        <?php echo $row['fname']; ?>&nbsp;<?php echo $row['mname']; ?>.&nbsp;<?php echo $row['lname']; ?><br />
		<?php echo $row['emp_num']; ?>&nbsp;<br />
		<?php echo $row['email']; ?></span>
        <br />
        <br />
        <br />
        <br />
        <br />
		<img src="avatar/<?php echo $row['photo']; ?>" width="170" height="170" /><br /><br /><br /><br /><br />
      <input type="submit" name="Submit" value=" Print this page " onclick="window.print(); return false"/> 
      &nbsp;&nbsp;<a href="employees_master.php">Back</a></td>
  </tr>
</table>
</center>
</body>
</html>

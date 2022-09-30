<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css.css" type="text/css" />
<script type="text/javascript" src="scripts/dynifs.js"></script> 
<script type="text/javascript" src="scripts/validNum.js"></script> 

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Employees Masterlist</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
body {
	background-image: url();
}
.style31 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
}
.style35 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style38 {font-size: 12px}
.style41 {font-size: 14px}
.style46 {color: #0000FF; font-size: large;}
.style47 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #0000FF;
	font-weight: bold;
	font-size: 12px;
}
.style49 {
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style51 {font-size: 12px; font-weight: bold; }
.style53 {font-size: 12px; font-weight: bold; color: #0000FF; }
.style61 {color: #FFFF00; font-size: 10px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style63 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style65 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
}
.style66 {font-family: Arial, Helvetica, sans-serif}
.style67 {font-size: 12}
.style69 {
	font-size: 12px;
	color: #FFFF00;
	font-weight: bold;
}
-->
</style>
</head>
<SCRIPT Language = Javascript>
<!--
function validateMe() {
frm1 = document.form4;
if(frm1.fname.value == '') {
alert("Please enter First Name!");
frm1.fname.focus();
return false;
}
if(frm1.mi.value == '') {
alert("Please enter Middle Name!");
frm1.mi.focus();
return false;
}
if(frm1.lname.value == '') {
alert("Please enter Last Name!");
frm1.lname.focus();
return false;
}
if(frm1.position.value == '') {
alert("Please enter the position");
frm1.position.focus();
return false;
}
if(frm1.salaryrate.value == '') {
alert("Please enter salary rate");
frm1.salaryrate.focus();
return false;
}
if(frm1.address.value == '') {
alert("Please enter address");
frm1.address.focus();
return false;
}
// next item to be validated
return true;
}
// End -->
</SCRIPT>
<script>
function addNumbers()
{
      var val1 = parseInt(document.getElementById("salaryrate").value);
      var val2 = document.getElementById("wtax");
      val2.value = val1 * 0.12;
 }
</script>
<script>
	function addHyphen (element) {
	let ele = document.getElementById(element.id);
	ele = ele.value.split('-').join(''); 

	let finalVal = ele.match(/.{1,3}/g).join('-');
	document.getElementById(element.id).value = finalVal;
}
</script>
<?php
@session_start();
include("webconnect.php");

$sql1 = " select * from students order by lastname, strand ASC";
$result2 = mysqli_query($conn, $sql1);
//$row2 = mysql_fetch_array($result2);

// ==== begin editing ==
@$rid = $_REQUEST['id'];
if($rid!="") {
$sql2b = " SELECT * from students where id = '$rid' ";
$result3 = mysqli_query($conn, $sql2b);
if (mysqli_num_rows($result3) > 0) {
//$result2 = mysqli_query($conn, $sql2b);
$row3 = mysqli_fetch_assoc($result3); 
@$age = date_diff(date_create($bday), date_create('now'))->y;
$rid = $row3['id'];
//$wtax = $row3['wtax'];
 } else {
// $row3 = ""; 
 }
}

// -- START of SAVING 
if(isset($_POST['Submit'])) 
{
$username = $_POST['username'];
$password= $_POST['password'];
$fname= $_POST['fname'];
$mi= $_POST['mi'];
$lname = $_POST['lname'];

$sql2 = " SELECT * from students WHERE username='$username' and password='$password' and lastname = '$lname' AND firstname = '$fname' " ; 
$result = mysqli_query($conn, $sql2);
$row = mysqli_fetch_assoc($result);
if (mysqli_num_rows($result)==0) {
// begin the actual saving (evaluating record is only optional) 
$sql = "INSERT INTO students (username,password,firstname,mi,lastname,emailaddress,strand)  VALUES('$username','$password','$fname','$mi','$lname','$emailaddress','$strand' )";

mysqli_query($conn, $sql); 
$sql3 = " SELECT * from students";
$result = mysqli_query($conn,$sql3);
// end of saving records
?>
<SCRIPT Language=Javascript>
<!--
	alert("New Employee Records has been saved!");
// End -->
</SCRIPT>
<SCRIPT Language=Javascript>
<!--
 location.href="index.php";
// End -->
</SCRIPT>
<SCRIPT Language=Javascript>
<!--
	alert("You have successfully registered!");
// End -->
</SCRIPT>
<SCRIPT Language=Javascript>
<!--
// location.href="employees.php";
// End -->
</SCRIPT>
<?php
 }    // end of the JAVASCRIPT warning message
}  // end of the if(isset($_POST['Submi']))
?>

<body>
<p>
</p>
<table width="100%" border="0" align="center" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td width="539" height="30" align="center" valign="middle" bgcolor="#FFFFFF" class="style65">PCAAT Student's Registration Page  </td>
  </tr>
</table>
<center>
<table width="79%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCE1E1">
    <tr>
      <td width="1044" height="292" align="left" valign="top"><table width="101%" border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td height="31" valign="middle"><span class="style47">Username</span></td>
          <td width="75%" valign="middle"><input name="username" type="text" id="username" size="20"/>
          &nbsp;&nbsp;</td>
        </tr>
        <tr>
          <td height="31" valign="middle"><span class="style41 style35  style46"><span class="style51">Password</span></span></td>
          <td valign="middle"><span class="style41 style35  style46"><span class="style51">
            <input name="password" type="text" id="password" onkeyup="addHyphen(this)" size="20" maxlength="15"/>
          </span></span></td>
        </tr>
        <tr>
          <td width="25%" height="39" valign="middle"><span class="style41 style35  style46"><span class="style51">Firstname</span></span></td>
          <td valign="middle"><input name="fname" type="text" id="fname" size="25"/>
              <span class="style41 style35  style46"><span class="style51"> &nbsp;&nbsp;&nbsp;&nbsp;</span></span></td>
        </tr>
        <tr>
          <td height="39" valign="middle"><span class="style41 style35  style46"><span class="style51">Middle Initial</span></span></td>
          <td valign="middle"><span class="style41 style35  style46"><span class="style51">
            <input name="mi" type="text" id="mi" size="20"/>
          </span></span></td>
        </tr>
        <tr>
          <td height="39" valign="middle"><span class="style47">Last Name:</span></td>
          <td valign="middle"><input name="lname" type="text" id="lname" size="25"/>
            &nbsp; <span class="style51">
              <input name="mi2" type="hidden" id="mi2" size="5" value="<?php echo @$age?>" />
              <?php echo @$rid; ?></span></td>
        </tr>
        <tr>
          <td height="39" valign="middle"><span class="style47">Email Address </span></td>
          <td valign="middle"><input name="emailaddress" type="text" id="emailaddress" size="20"/></td>
        </tr>
        <tr>
          <td height="39" valign="middle"><span class="style41 style35  style46"><span class="style51">Strand </span></span></td>
          <td valign="middle"><span class="style41 style35  style46"><span class="style51">
            <input name="strand" type="text" id="strand" onkeyup="addHyphen(this)" size="20" maxlength="15"/>
          </span></span></td>
        </tr>
        <tr class="style47">
          <td height="25" colspan="2" align="center" valign="middle" class="style47"><?php } ?>
              <input type="submit" name="Submit" value="  Save  " />
              <input type="reset" name="Submit2" value="Cancel" /></td>
        </tr>
      </table></td>
    </tr>
</table>

    <center>
      <?php } ?>
      <br />
    </center>	
</body>

</html>

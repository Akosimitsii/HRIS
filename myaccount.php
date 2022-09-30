<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="icon" type="image/png" href="inc/pcaaticon.ico">
<title>Add Employee and their QR codes</title>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style13 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; font-size: 12px; }
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #FFFFFF;
}
.style49 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; font-size: 14px; color: #0000FF; }
.style51 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style53 {font-size: 12px}
.style54 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }

-->
</style>

</head>
<SCRIPT Language=Javascript>
<!--
function validateMe() {
frm2 = document.form2;
if(frm2.email.value == '') {
alert("Please enter employee email address");
frm2.email.focus();
return false;
}

if(frm2.fname.value == '') {
alert("Please enter employee first name");
frm2.fname.focus();
return false;
}

if(frm2.lname.value == '') {
alert("Please enter employee last name");
frm2.lname.focus();
return false;
}

if(frm2.contactnum.value == '') {
alert("Please enter employee last name");
frm2.contactnum.focus();
return false;
}


// next item to be validated
return true;
}
// End -->
</SCRIPT>


<?php 
@session_start();
include("webconnect.php");

if(@$_SESSION['accesslevel'] != "Employee" || @$_SESSION['accesslevel'] != "Admin" ) { ?>
<SCRIPT Language=Javascript>
<!--
	//	alert("You are not logged -in or you have no authorization to view this page!");
// End -->
</SCRIPT>

<SCRIPT Language=Javascript>
<!--
	//	history.back();
// End -->
</SCRIPT>
<?php
} 
		
@$p_username = $_SESSION['username'];
$datep=date('M d, Y H:i:s');

/*
ini_set("post_max_size","128M");
ini_set("session.gc_maxlifetime","10800"); 
ini_set("upload_max_filesize", "200M");
*/
$email = $_REQUEST['email']; 
if($email == '') {
$email = $_SESSION['username'];
} else { 
$email = $_REQUEST['email']; 
}

$sql2 = " SELECT * from employees WHERE email = '$email' ";
$result = mysqli_query($conn, $sql2); 		
//$row = mysqli_fetch_assoc($result);
$count = mysqli_num_rows($result);

if($count>0) {
$row1 = mysqli_fetch_assoc($result);

$sql3 = " SELECT * from qr_codes WHERE email = '$email' ";
$result2 = mysqli_query($conn, $sql3); 		
$row2 = mysqli_fetch_assoc($result2);
$qrimage = $row2['qr_image'];

}

if(isset($_POST['Submit'])) 
{
 
$fle=$_FILES['file']['name'];
$uploaddir 	= "profilepic"; 		// sets the folder for picture
$emp_num 	= $_POST['emp_num'];	// where the qr code file /name will come from
$firstname 	= $_POST['fname'];
$mi 	  	= $_POST['mi'];
$lastname 	= $_POST['lname'];
@$_SESSION['imgfile'] = $ename.".png";
$imagefile 	= $_SESSION['imgfile'];
@$email 	= $_SESSION['email'];
$department = $_POST['department'];
$gender 	= $_POST['gender'];
$status 	= $_POST['status'];
$contactnumber = $_POST['contactnum']; 
$address 	= $_POST['address'];
$sss 		= $_POST['sss'];
$philhealth  = $_POST['philhealth'];
$tin 		= $_POST['tin'];
$pagibig 	= $_POST['pagibig'];
$taxcategory = $_POST['taxcategory'];
$salary 	= $_POST['salary'];

//$position 	= $_POST['position'];

// ... more variable up to address (except the photo file
  
if($fle == "") {		// check if there's no selected photo
?>
<SCRIPT Language=Javascript>
<!--
//	alert("You have not selected any photo!");
// End -->
</SCRIPT>

<SCRIPT Language=Javascript>
<!--
//	history.back();
// End -->
</SCRIPT>

<?php
} else  { 
$fle=$_FILES['file']['name'];

//----- initialize file for upload
$uploaddir = "profilepic"; 
@$limit_size=3000;				// limits file size to 3MB
        $fle = rand(1000,100000)."-".$_FILES['file']['name'];
        $pic_loc = $_FILES['file']['tmp_name'];
        $folder="profilepic/";
        if(move_uploaded_file($pic_loc,$folder.$fle))
        {
 }
 
$sql = "UPDATE employees SET "  // prepares the table and datafields for insertion
	. "email = '$email', "					// employee number and the basis for QR code
	. "fname = '$firstname', "						// firstname
	. "mname = '$mi', "						// middle name
	. "lname = '$lastname', "						//   --- add the other textfields here...
	. "department = '$department', "
	. "gender = '$gender', "
	. "civil_status = '$status', "
	. "cnum = '$contactnumber', "
	. "address = '$address', "
	. "sss = '$sss', "
	. "philhealth = '$philhealth', "
	. "tin = '$tin', "
	. "pagibig = '$pagibig', "
	. "taxcategory = '$taxcategory', "
	. "salary = '$slary', "
	. "photo = '$fle' WHERE id = '$id' " ;
mysqli_query($conn, $sql);
}


/*
$sql2b = " SELECT * from qr_codes WHERE email = '$p_username' ";
$result2b = mysqli_query($conn, $sql2b); 		
//$row = mysqli_fetch_assoc($result);
$count2 = mysqli_num_rows($result2b);

if($count2==0) {
// saves qr details to qr_codes table
$sql3 = "INSERT into qr_codes ( "
	. "email, "
	. "qr_image) "
  . " VALUES ('$email', "
	. "'$imagefile') ";
mysqli_query($conn, $sql3);
}

$sql2c = " SELECT * from users WHERE username = '$email' ";
$result2c = mysqli_query($conn, $sql2c); 		
//$row = mysqli_fetch_assoc($result);
$count3 = mysqli_num_rows($result2c);

if($count3==0) {
// saves data to USERS table
$sql4 = "INSERT into users ( "
	. "username, "
	. "password,  "
	. "accesslevel) "
  . " VALUES ('$email', "
	. "'pcaat12345', "
	. "'Employee') ";
mysqli_query($conn, $sql4);
}
?>
*/
}
?>

<body>
<?php include("mainmenu.php"); ?>
<center>
<table width="98%" border="0" align="center" bgcolor="#DDE0EE">
  <tr>
    <td height="475" align="center" valign="middle"><br />
	<form id="form2" name="form2" method="post" enctype="multipart/form-data" onSubmit="return validateMe(this.fname.value);">
	  <table width="99%" height="638" border="0" align="center" cellspacing="5" bordercolor="#333333" bgcolor="#FFFFFF">
        <tr>
          <td height="27" colspan="3" valign="top"><p class="style49">Employee Account Details: </p>            </td>
          </tr>
        <tr>
          <td height="21" valign="top" class="style13">Employee  PCAAT Email </td>
          <td width="417" valign="top"><input name="email" type="text" id="email" value="<?php echo $row1['email']; ?>" size="35" readonly /></td>
          <td width="326" rowspan="8" align="left" valign="top"><img src="avatar/<?php echo $row1['photo']; ?>" width="180" height="180" /></td>
        </tr>
        <tr>
          <td height="24" class="style13">Employee Number</td>
          <td><input name="emp_num" type="text" id="emp_num" value="<?php echo $row1['emp_num']; ?>" size="35" readonly /></td>
          </tr>
        <tr>
          <td height="24" class="style13">First Name </td>
          <td><input name="fname" type="text" id="fname" value="<?php echo $row1['fname']; ?>" size="35" /></td>
          </tr>
        <tr>
          <td height="24" class="style13">Middle Name </td>
          <td><input name="mi" type="text" id="mi" value="<?php echo $row1['mname']; ?>" size="35" /></td>
        </tr>
        <tr>
          <td width="168" height="24" class="style13">Lastname</td>
          <td><input name="lname" type="text" id="lname" value="<?php echo $row1['lname']; ?>" size="35" /></td>
          </tr>
        <tr>
          <td height="29" valign="top" class="style13">Gender</td>
          <td valign="top"><select name="gender" id="gender">
            <option value="<?php echo $row1['gender']; ?>" selected="selected"><?php echo $row1['gender']; ?></option>
            <option value="">Select </option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
                              </select></td>
          </tr>
        <tr>
          <td height="24" class="style13">Civil Status </td>
          <td><select name="status" id="status">
            <option value="<?php echo $row1['civil_status']; ?>" selected="selected"><?php echo $row1['civil_status']; ?></option>
            <option value="">Select</option>
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Widow">Widow</option>
            <option value="Separated">Separated</option>
                              </select></td>
        </tr>
        <tr>
          <td height="28" class="style13">Department</td>
          <td><?php include("inc/department.inc"); ?>&nbsp;</td>
        </tr>
        <tr>
          <td height="28" class="style13">Employment Status </td>
          <td><select name="employment_status" id="employment_status">
            <option value="" selected="selected">Select</option>
            <option value="Regular">Regular</option>
            <option value="Probation">Probation</option>
            <option value="Full Time">Full Time</option>
            <option value="Separated">Part Time</option>
          </select></td>
          <td rowspan="9" valign="top"><?php if($qrimage != '') { ?>
            <img src="qr_codes/<?php echo $row2['qr_image']; ?>" width="180" height="180">
            <?php } else { ?>
            <img src="images/pcaat-logo.png" width="150" height="150">
            <?php } ?>
            &nbsp;</td>
        </tr>
        <tr>
          <td height="28" class="style13">Contact Number </td>
          <td><input name="contactnum" type="text" id="contactnum" value="<?php echo $row1['cnum']; ?>" size="35" /> </td>
          </tr>
        <tr>
          <td height="37" valign="top" class="style13"><span class="style13">Address </span></td>
          <td valign="top"><textarea name="address" cols="32" rows="2" id="address"><?php echo $row1['address']; ?></textarea></td>
          </tr>

        <tr>
          <td height="26" valign="top" class="style13">SSS Number </td>
          <td valign="top"><input name="sss" type="number" id="sss" value="<?php echo $row1['sss']; ?>" size="40" /></td>
          </tr>
        <tr>
          <td height="26" valign="top" class="style13">PhilHealth Number </td>
          <td valign="top"><input name="philhealth" type="number" id="philhealth" value="<?php echo $row1['philhealth']; ?>" size="40" /></td>
          </tr>
        <tr>
          <td height="26" valign="top" class="style13">TIN Number</td>
          <td valign="top"><input name="tin" type="number" id="tin" value="<?php echo $row1['tin']; ?>" size="40" /></td>
          </tr>
        <tr>
          <td height="26" valign="top" class="style13">PAGIBIG Number </td>
          <td valign="top"><input name="pagibig" type="number" id="pagibig" value="<?php echo $row1['pagibig']; ?>" size="40" /></td>
          </tr>
        <tr>
          <td height="26" valign="top" class="style13">Tax Category </td>
          <td valign="top"><input name="taxcategory" type="text" id="taxcategory" value="<?php echo $row1['taxcategory']; ?>"  size="30" /></td>
          </tr>
        <tr>
          <td height="26" valign="top" class="style13">Salary </td>
          <td valign="top"><input name="salary" type="number" id="salary" value="<?php echo $row1['salary']; ?>"  size="40" /></td>
          </tr>
        <tr>
          <td height="26" valign="top" class="style13"><span class="style13">Select a Photo: </span></td>
          <td colspan="2" valign="top"><input name="file" type="file" size="50" /></td>
        </tr>

       <tr>
        <td height="33">&nbsp;</td>
        <td colspan="2" valign="top"><input type="submit" name="Submit" value="  Update " /> 
        <input name="Cancel" type="reset" id="Cancel" value="   Cancel    " /></td>
        </tr>
      </table>
	  <br />
	</form></td>
  </tr>
</table>
<center><br />
</center>
<p>&nbsp;</p>

</body>
</html>


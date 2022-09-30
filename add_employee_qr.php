<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="icon" type="image/png" href="inc/pcaaticon.ico">
<title>Add Employee and their QR codes</title>
<style type="text/css">
<!--
.style13 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; font-size: 12px; }
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #FFFFFF;
}
.style49 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; font-size: 16px; color: #0000FF; }

-->
</style>

</head>
<SCRIPT Language=Javascript>
<!--
function validateMe(mail) {	
frm2 = document.form2;
if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form2.email.value)))
{
alert("You have entered an invalid email address!");
frm2.email.focus();
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

if(@$_SESSION['accesslevel']!="Admin") { ?>
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
		

$datep=date('M d, Y H:i:s');

/*
ini_set("post_max_size","128M");
ini_set("session.gc_maxlifetime","10800"); 
ini_set("upload_max_filesize", "200M");
*/

$sql1 = " SELECT * from employees order by lname ASC ";
$result = mysqli_query($conn, $sql1) ; 

if(isset($_POST['Submit5'])) 
{
// -- initiate the QR generation
$ename = $_POST['email'];
if($ename != '') {
$path = 'qr_codes/';
$imgname = $path.$ename.".png";
$data = isset($_GET['data']) ? $_GET['data'] : $ename;
$logo = isset($_GET['logo']) ? $_GET['logo'] : 'logo.png';
$sdir = explode("/",$_SERVER['REQUEST_URI']);
$dir = str_replace($sdir[count($sdir)-1],"",$_SERVER['REQUEST_URI']);
$_SESSION['imgfile'] = $ename.".png";
$_SESSION['email'] = $ename;

// === Create qrcode image
include('phpqrcode/qrlib.php');
QRcode::png($data,$imgname,QR_ECLEVEL_L,11.45,0);

// === Adding image to qrcode
$QR = imagecreatefrompng($imgname);
if($logo !== FALSE){
	$logopng = imagecreatefrompng($logo);
	$QR_width = imagesx($QR);
	$QR_height = imagesy($QR);
	$logo_width = imagesx($logopng);
	$logo_height = imagesy($logopng);
	
	list($newwidth, $newheight) = getimagesize($logo);
	$out = imagecreatetruecolor($QR_width, $QR_width);
	imagecopyresampled($out, $QR, 0, 0, 0, 0, $QR_width, $QR_height, $QR_width, $QR_height);
	imagecopyresampled($out, $logopng, $QR_width/2.65, $QR_height/2.65, 0, 0, $QR_width/4, $QR_height/4, $newwidth, $newheight);
	
}
imagepng($out,$imgname);
imagedestroy($out);

// === Change image color
$im = imagecreatefrompng($imgname);
$r = 44;$g = 62;$b = 80;
for($x=0;$x<imagesx($im);++$x){
	for($y=0;$y<imagesy($im);++$y){
        $index 	= imagecolorat($im, $x, $y);
        $c   	= imagecolorsforindex($im, $index);
        if(($c['red'] < 100) && ($c['green'] < 100) && ($c['blue'] < 100)) { // dark colors
            // here we use the new color, but the original alpha channel
            $colorB = imagecolorallocatealpha($im, 0x12, 0x2E, 0x31, $c['alpha']);
            imagesetpixel($im, $x, $y, $colorB);
        }
	}
}
imagepng($im,$imgname);
imagedestroy($im);

// === Convert Image to base64
$type = pathinfo($imgname, PATHINFO_EXTENSION);
$data = file_get_contents($imgname);
$imgbase64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

// === Show image
//echo "<img src='$imgbase64' style='position:relative;display:block;width:240px;height:240px;margin:160px auto;'>";
}
// == END of QR generation 
 
$fle=$_FILES['file']['name'];
$uploaddir 	= "profilepic"; 		// sets the folder for picture
$emp_num 	= $_POST['emp_num'];	// where the qr code file /name will come from
$firstname 	= $_POST['fname'];
$mi 	  	= $_POST['mi'];
$lastname 	= $_POST['lname'];
@$_SESSION['imgfile'] = $ename.".png";
$imagefile 	= $_SESSION['imgfile'];
@$email 	= $_SESSION['email'];
$department = $_POST['department'];   // position
$employment_status = $_POST['employment_status'];
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
  
if($fle=="") {		// check if there's no selected photo
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
} 

$sql2 = " SELECT * from employees WHERE email = '$email' ";
$result = mysqli_query($conn, $sql2); 		
//$row = mysqli_fetch_assoc($result);
$count = mysqli_num_rows($result);

if($count==0) {
$sql = "INSERT INTO employees ( "  // prepares the table and datafields for insertion
	. "email, "					// employee number and the basis for QR code
	. "fname, "						// firstname
	. "mname, "						// middle name
	. "lname, "						//   --- add the other textfields here...
	. "department, "
	. "gender, "
	. "civil_status, "
	. "cnum, "
	. "address, "
	. "position, "	
	. "employment_status, "	
	. "sss, "
	. "philhealth, "
	. "tin, "
	. "pagibig, "
	. "taxcategory, "
	. "salary, "
	. "photo) "	
 . " VALUES( "
	. " '$email', "		// pass the actual data from the email textfield 
	. " '$firstname', "
	. " '$mi', "
	. " '$lastname', "
	. " '$department', "
	. " '$gender', "
	. " '$status', "
	. " '$contactnumber', "
	. " '$address', "
	. " '$position', "
	. " '$employment_status', "	
	. " '$sss', "
	. " '$philhealth', "
	. " '$tin', "
	. " '$pagibig', "
	. " '$taxcategory', "
	. " '$salary', "
	. " '$fle' )";	
mysqli_query($conn, $sql);
?>
<SCRIPT Language=Javascript>
<!--
	alert("New Employee record successfully added!");
// End -->
</SCRIPT>
<?php
} else {
?>
<SCRIPT Language=Javascript>
<!--
	alert("Record Already exists. Please try again!");
// End -->
</SCRIPT>
<?php
}
$sql2b = " SELECT * from qr_codes WHERE email = '$email' ";
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
	
if($fle!="") {					//check if there's a selected photo
$fle=$_FILES['file']['name'];

//----- initialize file for upload
$uploaddir = "profilepic"; 
@$limit_size=3000;				// limits file size to 3MB
        $fle = rand(1000,100000)."-".$_FILES['file']['name'];
        $pic_loc = $_FILES['file']['tmp_name'];
        $folder="profilepic/";
        if(move_uploaded_file($pic_loc,$folder.$fle))
        {
?>

<SCRIPT Language=Javascript>
<!--
   alert("Photo and its description has been successfully uploaded!");
// End -->
</SCRIPT>
<SCRIPT Language=Javascript>
<!--
  //   location.href="add_employee_qr.php";
// End -->
</SCRIPT>

<?php
  }
 }
 session_destroy();
}
?>

<body>
<?php include("mainmenu.php"); ?>
<center>
<table width="98%" border="0" align="center" bgcolor="#DDE0EE">
  <tr>
    <td height="461" align="center" valign="middle"><br />
	<form id="form2" name="form2" method="post" enctype="multipart/form-data" onSubmit="return validateMe(this.fname.value);">
	  <table width="99%" height="637" border="0" align="center" cellspacing="5" bordercolor="#333333" bgcolor="#FFFFFF">
        <tr>
          <td height="29" colspan="3" valign="top"><p class="style49">Employee Details: </p>            </td>
          </tr>
        <tr>
          <td height="21" valign="top" class="style13">Employee PCAAT Email </td>
          <td width="417" valign="top"><input name="email" type="text" id="email" size="35"  /></td>
          <td width="326" rowspan="8" align="left" valign="top"><?php if(@$imgbase64 != '') {  echo "<img src='$imgbase64' style='position:left;display:block;width:150px;height:150px;margin:10px auto;'>"; ?><?php } else { ?><img src="images/pcaat-logo.png" width="150" height="150"  /><?php } ?>&nbsp;</td>
        </tr>
        <tr>
          <td height="24" class="style13">Employee Number </td>
          <td><input name="emp_num" type="text" id="emp_num" size="35" /></td>
        </tr>
        <tr>
          <td height="24" class="style13">First Name</td>
          <td><input name="fname" type="text" id="fname" size="35" required/></td>
          </tr>
        <tr>
          <td height="24" class="style13">Middle Name </td>
          <td><input name="mi" type="text" id="mi" size="35" /></td>
        </tr>
        <tr>
          <td width="168" height="24" class="style13">Lastname</td>
          <td><input name="lname" type="text" id="lname" size="35" required/></td>
          </tr>
        <tr>
          <td height="28" valign="top" class="style13">Gender</td>
          <td valign="top"><select name="gender" id="gender" required>
            <option value="" selected="selected">Select </option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select></td>
          </tr>
        <tr>
          <td height="24" class="style13">Civil Status </td>
          <td><select name="status" id="status">
            <option value="" selected="selected">Select</option>
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
          <td height="28" class="style13">Employment Status</td>
          <td colspan="2"><select name="employment_status" id="employment_status">
            <option value="" selected="selected">Select</option>
            <option value="Regular">Regular</option>
            <option value="Probation">Probation</option>
            <option value="Full Time">Full Time</option>
            <option value="Separated">Part Time</option>
                              </select></td>
        </tr>
        <tr>
          <td height="28" class="style13">Contact Number </td>
          <td colspan="2"><input name="contactnum" type="text" id="contactnum" size="35" /></td>
        </tr>
        <tr>
          <td height="37" valign="top" class="style13"><span class="style13">Address </span></td>
          <td colspan="2" valign="top"><textarea name="address" cols="32" rows="2" id="address"></textarea></td>
        </tr>

        <tr>
          <td height="26" valign="top" class="style13">SSS Number </td>
          <td colspan="2" valign="top"><input name="sss" type="number" id="sss" size="40" /></td>
        </tr>
        <tr>
          <td height="26" valign="top" class="style13">PhilHealth Number </td>
          <td colspan="2" valign="top"><input name="philhealth" type="number" id="philhealth" size="40" /></td>
        </tr>
        <tr>
          <td height="26" valign="top" class="style13">TIN Number</td>
          <td colspan="2" valign="top"><input name="tin" type="number" id="tin" size="40" /></td>
        </tr>
        <tr>
          <td height="26" valign="top" class="style13">PAGIBIG Number </td>
          <td colspan="2" valign="top"><input name="pagibig" type="number" id="pagibig" size="40" /></td>
        </tr>
        <tr>
          <td height="26" valign="top" class="style13">Tax Category </td>
          <td colspan="2" valign="top"><select name="select" id="select" required="required">
            <option value="" selected="selected">Select </option>
            <option value="<?php echo @$row1['taxcategory']; ?>"><?php echo @$row1['taxcategory']; ?></option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="c">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
            <option value="F">F</option>
            <option value="G">G</option>
          </select></td>
        </tr>
        <tr>
          <td height="26" valign="top" class="style13">Salary </td>
          <td colspan="2" valign="top"><input name="salary" type="number" id="salary" size="40" /></td>
        </tr>
        <tr>
          <td height="26" valign="top" class="style13"><span class="style13">Select a Photo: </span></td>
          <td colspan="2" valign="top"><input name="file" type="file" size="50" /></td>
        </tr>

       <tr>
        <td height="31">&nbsp;</td>
        <td colspan="2" valign="top"><input type="submit" name="Submit" value="  Submit    " /> 
        <input name="Cancel" type="reset" id="Cancel" value="   Cancel    " /></td>
        </tr>
      </table>
	  <br />
	</form></td>
  </tr>
</table>
<center>
 <?php include("employees_masterlist.php"); ?> <br />
</center>
</body>
</html>


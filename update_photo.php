<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee Photo</title>
	<link rel="shortcut icon" href="inc/pcaaticon.ico" type="image/x-icon" />	
    <link rel="stylesheet" href="loginstyle.css">

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
<!--
body {
	background-color: #465BC1;
}
-->
</style></head>
<?php
// Your connection to the database
// == TO ENABLE SESSION VARIABLES IN HOST DOMAIN
//php_flag output_buffering on;
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
} else {
		

$datep=date('M d, Y H:i:s');
//ini_set("post_max_size","128M");
//ini_set("session.gc_maxlifetime","100800"); 
//ini_set("upload_max_filesize", "200M");

$emp_email = $_REQUEST['email'];

$sql1 = " SELECT * from employees where email = '$emp_email' ";
$result = mysqli_query($conn, $sql1) ; 
$count = mysqli_num_rows($result);
if($count>0) {
$row2 = mysqli_fetch_assoc($result);

}

if(isset($_POST['Submit'])) 
{
$fle=$_FILES['file']['name'];
$uploaddir = "profilepic"; 

$empnumber = $_POST['employeenumber'];
$firstname = $_POST['firstname'];
$mi= $_POST['mi'];
$lastname = $_POST['lastname'];
$position = $_POST['position'];

if($fle=="") {
?>
<SCRIPT Language=Javascript>
<!--
	alert("You have not selected any file!");
// End -->
</SCRIPT>

<SCRIPT Language=Javascript>
<!--
	history.back();
// End -->
</SCRIPT>
<?php
} 

if($fle!="") {
$fle=$_FILES['file']['name'];
//----- initialize file for upload
$uploaddir = "profilepic"; 
//@$limit_size=100000;

        $fle = $_FILES['file']['name'];
        $pic_loc = $_FILES['file']['tmp_name'];
        $folder="profilepic/";
        if(move_uploaded_file($pic_loc,$folder.$fle))
        {

	$sql = "UPDATE employees SET photo = '$fle' where email = '$emp_email' )";
	mysqli_query($conn, $sql);
	?>
	<SCRIPT Language=Javascript>
	<!--
	alert("Employee photo successfully updated!");
	// End -->
	</SCRIPT>

	<SCRIPT Language=Javascript>
	<!--
      location.href="employees_masterlist.php";
	// End -->
	</SCRIPT>
 <?php
 } else {
?>
<SCRIPT Language=Javascript>
<!--
	alert("Cannot upload that file. Please try again!");
// End -->
</SCRIPT>

<SCRIPT Language=Javascript>
<!--
 history.back();
// End -->
</SCRIPT>

<?php
  }
  }
 }
}

?>

  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Update Employee Photo </span></div>
		<form action="" method="post" enctype="multipart/form-data" name="form1" onSubmit="return validateMe(this.textfield.value);">
          <div class="row">
            <i class="fas fa-user"></i>
            <input name="employeenumber" type="text" value="<?php echo @$row2['email']; ?>"  placeholder="Employee Number" readonly >
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="firstname" value="<?php echo @$row2['fname']; ?>"  placeholder="First Name" readonly>
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="mi"  value="<?php echo @$row2['mname']; ?>" placeholder="Middle Initial" readonly>
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="lastname"  value="<?php echo @$row2['lname']; ?>" placeholder="Last Name" readonly>
          </div>

          <div class="row">
          <i class="fas fa-user"></i>
          <label>
          <input name="file" type="file" size="50" ">
          </label>
          </div>
          <div class="row button">
            <input type="submit" value="Submit" name="Submit">
          </div>

          <div class="signup-link"><a href="login.php">Login</a> <a href="signup.php"></a>| &nbsp;<a href="index.php">Home</a></div>
        </form>
      </div>
    </div>

  </body>

</body>
</html>


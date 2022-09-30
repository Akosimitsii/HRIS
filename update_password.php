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
		
$datep=date('M d, Y H:i:s');
//ini_set("post_max_size","128M");
//ini_set("session.gc_maxlifetime","100800"); 
//ini_set("upload_max_filesize", "200M");

$emp_email = $_SESSION['username'];

$sql1 = " SELECT * from users where username = '$emp_email' ";
$result = mysqli_query($conn, $sql1) ; 
$count = mysqli_num_rows($result);

if($count>0) {
$row2 = mysqli_fetch_assoc($result);



if(isset($_POST['Submit'])) 
{
$uploaddir = "profilepic"; 

$email = $_POST['email'];
$newpasss = $_POST['newpass2'];


	$sql = "UPDATE users SET password = '$newpass' where username = '$emp_email' )";
	mysqli_query($conn, $sql);
	?>
	<SCRIPT Language=Javascript>
	<!--
	alert("Employee passsword successfully updated!");
	// End -->
	</SCRIPT>

	<SCRIPT Language=Javascript>
	<!--
      location.href="index.php";
	// End -->
	</SCRIPT>
 <?php
  }
 } else {
?>
<SCRIPT Language=Javascript>
<!--
	alert("Cannot update password. Please try again!");
// End -->
</SCRIPT>

<SCRIPT Language=Javascript>
<!--
 history.back();
// End -->
</SCRIPT>

<?php
  }
?>

  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Update Employee Photo </span></div>
		<form action="" method="post" enctype="multipart/form-data" name="form1" onSubmit="return validateMe(this.textfield.value);">
          <div class="row">
            <i class="fas fa-user"></i>
            <input name="email" type="text" value="<?php echo @$row2['username']; ?>"  placeholder="Email Addressr" readonly >
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="password" value="<?php echo @$row2['password']; ?>"  placeholder="Current Password" readonly>
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="newpass" id="newpass" placeholder="Enter New Password" readonly>
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="newpass2" id="newpass2"   placeholder="Confirm New Password" readonly>
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


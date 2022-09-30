<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PCAAT Login credentials</title>
    <link rel="stylesheet" href="loginstyle.css">

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
<!--
body {
	background-color: #0066CC;
}
.style2 {font-size: 20px}
-->
  </style></head>

<?php
// Your connection to the database
// == TO ENABLE SESSION VARIABLES IN HOST DOMAIN
//php_flag output_buffering on;

@session_start();
date_default_timezone_set("Asia/Singapore");
//echo date_default_timezone_get();

//include("webconnect.php");

$servername = "localhost";
$database = "pcaat_dtr";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

@$p_username = $_SESSION['username'];
@$p_password = $_SESSION['password'];

if(@$_SESSION['username']=='') {
 ?>
	<SCRIPT Language=Javascript>
	<!--
	//	alert("You are not logged in. Please login to use this page ");
	//  End -->
	</script>			 
	<SCRIPT Language=Javascript>
	<!--
	//location.href="index.php";
	//  End -->
	</script>			 

	<?php 
	
	}
//$empname = $fname + " " + $mi + " " + $lname;
$dateposted = date('Y-m-d  H:i:s');
$datein = date('Y-m-d');
$dateout = date('Y-m-d');
$day = date('l');
$timein = date("H:i:s");
$timeout = date("H:i:s");
$current_time = date("h:i:s a");

// -- the evaluation query, to check whether the username and password exists in the table USERS
$sql2 = "SELECT * FROM employees WHERE employeenumber ='$p_username'  ";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2); 
$fname= $row2['firstname'];
$mi= $row2['mi'];
$lname= $row2['lastname'];
$position= $row2['position'];

$sql3 = "SELECT * from timelogs where employeenumber = '$p_username' AND login_date = '$datein' ";
$result3 = mysqli_query($conn, $sql3);
$row1b = mysqli_fetch_assoc($result3);
$s_timein = $row1b['timein'];
$s_timeout = $row1b['timeout'];
if(($s_timein !='') AND ($s_timeout) != '') {
?>
	<SCRIPT Language=Javascript>
	<!--
		location.href="login_accomplished.php";
	//  End -->
	</script>			 
<?php
}
// -- The TIME-IN button event
if(isset($_POST['Submit'])) {
// -- the evaluation query, to check whether the username and password exists in the table USERS

$sql2 = "SELECT * from timelogs where employeenumber = '$p_username' AND login_date = '$datein' AND timein ='' AND timeout ='' ";
$result = mysqli_query($conn, $sql2);
$row1 = mysqli_fetch_assoc($result);
$p_timein = $row1['timein'];
$p_timeout = $row1['timeout'];

if (mysqli_num_rows($result) < 1) {
  //  if(($p_timein == '') AND ($p_timeout =='')) {
	$sql = "INSERT into timelogs(employeenumber,firstname,mi,lastname,position,time_in,login_date,day,timein) "
		. "VALUES('$p_username','$fname','$mi','$lname','$position','$dateposted','$datein','$day','$timein') ";

 if(mysqli_query($conn, $sql)) {
 ?>
	<SCRIPT Language=Javascript>
	<!--
		alert("TIME IN successfully recorded ");
	//  End -->
	</script>			 
	<SCRIPT Language=Javascript>
	<!--
	location.href="login_success.php";
	//  End -->
	</script>			 

	<?php 
	
	} else{
	?>

	<SCRIPT Language=Javascript>
	<!--
		alert("Error. Could not save records!");
	// End -->
	</SCRIPT>	
	<SCRIPT Language=Javascript>
	<!--
	//	history.back();
	//  End -->
	</script>			 
 <?php
 }
}  // end of the TIME OUT
}

// -- The TIME-OUT button event
if(isset($_POST['Submit2'])) {
// -- the evaluation query, to check whether the username and password exists in the table USERS

$sql2b = "SELECT * from timelogs where employeenumber = '$p_username' AND login_date = '$datein' AND timein !='' AND timeout ='' ";
$result5 = mysqli_query($conn, $sql2b);
$row1c = mysqli_fetch_assoc($result5);
$p_timein = $row1c['timein'];
$p_timeout = $row1c['timeout'];

if (mysqli_num_rows($result5) > 0) {
  //  if(($p_timein == '') AND ($p_timeout =='')) {
  //	$sql = "INSERT into timelogs(employeenumber,firstname,mi,lastname,position,timelog,login_date,day,timein) "
  //		. "VALUES('$p_username','$fname','$mi','$lname','$position','$dateposted','$datein','$day','$timein') ";

  $sql6 = "UPDATE timelogs set timeout = '$timeout', time_out='$dateposted' where employeenumber = '$p_username' AND login_date = '$datein' ";
		
 if(mysqli_query($conn, $sql6)) {
 ?>
	<SCRIPT Language=Javascript>
	<!--
		alert("TIME IN successfully recorded ");
	//  End -->
	</script>			 
	<SCRIPT Language=Javascript>
	<!--
		location.href="login_success.php";
	//  End -->
	</script>			 

	<?php 
	
	} else{
	?>

	<SCRIPT Language=Javascript>
	<!--
		alert("Error. Could not save records!");
	// End -->
	</SCRIPT>	
	<SCRIPT Language=Javascript>
	<!--
	//	history.back();
	//  End -->
	</script>			 
 <?php
 }
}  // end of the TIME OUT
}
?>


  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><img src="images/pcaat-logo.png" width="86" height="86" align="absmiddle"><span class="style2">PCAAT Employee DTR</span> &nbsp;<img src="avatar/<?php echo $row2['photo']; ?>" width="86" height="86" hspace="5" vspace="5" align="absmiddle"></div>
		<form name="form1" action="" method="post" >
          <div class="row">
            <i class="fas fa-user"></i>
            <input name="textfield5" type="text" value="Scan barcode." onMouseOver="this.focus();" readonly>
          </div>          
		  <div class="row">
            <i class="fas fa-user"></i>
            <input name="textfield" type="text" value="<?php echo $p_username; ?>" onMouseOver="this.focus();" readonly>
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input name="textfield2" type="text" value="<?php echo $fname;?> <?php echo $mi;?>. <?php echo $lname;?>" readonly >
          </div>
           <div class="row">
            <i class="fas fa-user"></i>
            <input name="textfield3" type="text" value="<?php echo $position;?>" readonly >
          </div>
		  <center><span class="style96"><strong><span id='ct6' style="background-color: #FFFFFF"></strong></span></span></center><br>		  
         
		  <?php if (($s_timein == '') AND ($s_timeout == '')) { ?>
          <div class="row button">
            <input type="submit" value="TIME IN" name="Submit"> 
          </div>
		  <?php } ?>
		  <?php if (($s_timein != '') AND ($s_timeout == '')) { ?>
          <div class="row button">
            <input type="submit" value="TIME OUT" name="Submit2"> 
          </div>
		  <?php } ?>

          <div class="signup-link"><a href="index.php">Back to Home</a>&nbsp;</div>
        </form>
      </div>
    </div>

  </body>

</body>
</html>


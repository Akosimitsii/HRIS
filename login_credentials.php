<?php @session_start(); ?>
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

date_default_timezone_set("Asia/Manila");
//echo date_default_timezone_get();

include("webconnect.php");

//$servername = "localhost";
//$database = "pcaat_dtr";
//$username = "root";
//$password = "";

//$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

@$p_username = $_SESSION['username'];
@$p_password = $_SESSION['password'];
@$qrcode = $_SESSION['qrcode'];

if(@$_SESSION['username']=='') {
?>
	<SCRIPT Language=Javascript>
	<!--
		alert("You are not logged in. Please login to use this page ");
	//  End -->
	</script>			 
	<SCRIPT Language=Javascript>
	<!--
	location.href="index.php";
	//  End -->
	</script>			 
<?php 
	
}
//$empname = $fname + " " + $mi + " " + $lname;
$dateposted = date('Y-m-d  H:i:s');
$datein = date('m/d/Y');
$dateout = date('m/d/Y');
$day = date('l');
$timein = date("H:i:s");
$timeout = date("H:i:s");
$current_time = date("h:i:s a");

// -- the evaluation query, to check whether the username and password exists in the table USERS
$sql2 = "SELECT * FROM employees WHERE email ='$qrcode'  ";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2); 
$fname	= $row2['fname'];
$mi		= $row2['mname'];
$lname	= $row2['lname'];
$position= $row2['position'];

$sql3 = "SELECT * from timelogs where qr_code = '$qrcode' AND login_date = '$datein' ";
$result3 = mysqli_query($conn, $sql3);
$row1b 	= mysqli_fetch_assoc($result3);
$s_timein = @$row1b['timein'];
$s_timeout = @$row1b['timeout'];
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

$sql2 = "SELECT * from timelogs where qr_code = '$qrcode' AND login_date = '$datein' ";
$result = mysqli_query($conn, $sql2);
$row1 = mysqli_fetch_assoc($result);
$p_timein = @$row1['timein'];
$p_timeout = @$row1['timeout'];

if ((mysqli_num_rows($result) < 1) AND ($p_timein =='') AND ($p_timein =='')) {
  //  if(($p_timein == '') AND ($p_timeout =='')) {
 }

if(mysqli_query($conn, $sql)) {
?>
	<SCRIPT Language=Javascript>
	<!--
		alert("Your Time has been successfully recorded ");
	//  End -->
	</script>			 
	<SCRIPT Language=Javascript>
	<!--
	 location.href="index.php";
	//  End -->
	</script>			 

<?php 
	 
	} else {
?>

	<SCRIPT Language=Javascript>
	<!--
		alert("Error. Could not save records!");
	// End -->
	</SCRIPT>	
	<SCRIPT Language=Javascript>
	<!--
		history.back();
	//  End -->
	</script>			 
<?php
  
 }  // end of the TIME OUT
}
?>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><?php if(@$_SESSION['accesslevel']=='Admin') { ?><a href="timelog.php"><img src="images/pcaat-logo.png" width="86" height="86" align="absmiddle"></a><?php } else {?><img src="images/pcaat-logo.png" width="86" height="86" align="absmiddle"><?php }?><span class="style2">PCAAT Employee DTR</span> &nbsp;<?php if(@$_SESSION['username']!='') { ?><img src="avatar/<?php echo $row2['photo']; ?>" width="86" height="86" hspace="5" vspace="5" align="absmiddle"><?php } else {?><img src="images/philipines_wm.gif" width="86" height="86" align="absmiddle"><?php }?></div>
		<form name="form1" action="" method="post" >
          <div class="row">
            <i class="fas fa-user"></i>
            <input name="textfield" type="text" value="<?php echo $p_username; ?>"  readonly>
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input name="textfield2" type="text" value="<?php echo $fname;?> <?php echo $mi;?>. <?php echo $lname;?>" readonly >
          </div>
           <div class="row">
            <i class="fas fa-user"></i>
            <input name="textfield3" type="text" value="<?php echo $position;?>" readonly >
          </div>
		  <center><span class="style96"><strong><span id='ct6' style="background-color: #FFFFFF"></strong></span></center><br>
		  <div class="row button">
            <input type="submit" value="TIME IN" name="Submit" id="submit" hidden> 
          </div>
		  <div class="signup-link"><a href="qr_login.php">Back to Home</a>&nbsp;</div>
        </form>
      </div>
    </div>

<script>
function display_ct6() {
var x = new Date()
var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
hours = x.getHours( ) % 12;
hours = hours ? hours : 12;
var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear(); 
x1 = x1 + " - " +  hours + ":" +  x.getMinutes() + ":" +  x.getSeconds() + ampm;
document.getElementById('ct6').innerHTML = x1;
display_c6();
 }
 function display_c6(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct6()',refresh)
}
display_c6()
</script>

</body>
</html>

<script type="text/javascript">
	var f = document.getElementById("submit"); //form1 is the form ID
    f.click();	
</script>

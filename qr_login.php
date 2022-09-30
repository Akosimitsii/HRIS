<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PCAAT Login Form</title>
    <link rel="stylesheet" href="loginstyle.css">
	<link rel="icon" type="image/png" href="inc/pcaaticon.ico">
	<script src="html5-qrcode.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
<!--
body {
	background-color: #003399;
}

  .result{
    background-color: #000000;
    color:#000000;
	font-family:Arial, Helvetica, sans-serif;
    padding:20px;
  }
  .row{
    display:flex;
  }

-->
</style></head>

<?php

// Your connection to the database
// == TO ENABLE SESSION VARIABLES IN HOST DOMAIN
//php_flag output_buffering on;

@session_start();
//include("webconnect.php");

$servername = "localhost";
$database = "pcaat_dtr";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


// -- The Login button event

if(isset($_POST['Submit'])) {

// -- the POSTING variables from the form textfields
@$qrcode	=	$_POST['text'];
@$password	=	$_POST['textfield2'];

// -- the evaluation query, to check whether the username and password exists in the table USERS

//$sql = "SELECT * FROM users WHERE username ='$username' AND password ='$password' ";
$sql = "SELECT * FROM users WHERE username ='$qrcode' ";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
$row1 = mysqli_fetch_assoc($result); 
$_SESSION['username'] = $row1['username'];
$_SESSION['accesslevel'] = $row1['accesslevel'];
$_SESSION['qrcode'] = $qrcode;

?>

<script type="text/javascript">
<!--
    location.href="login_credentials.php";
//  End -->
</script>			 

<?php   
} else {
?>

<script type="text/javascript">
<!--
    alert("No Record found for that Username and Password.  Please try again!  ");
//  End -->
</script>			 

<?php 
//mysqli_close($conn);
//exit();
  }
 }
?>

  <body>
     <div class="container">
      <div class="wrapper">
        <div class="title"><span><img src="images/pcaat-logo.png" width="81" height="81" hspace="3" vspace="0" align="absmiddle">&nbsp;PCAAT DTR Form</span></div>
		<form name="form" id="form" method="POST">

			<table width="100%" border="0">
			  <tr>
				<td align="center"><div style="width:350px;" id="reader"></div>&nbsp;</td>
			  </tr>
			  <tr>
				<td align="center"><div id="result">&nbsp;</div></td>
			  </tr>
			  <tr>
				<td align="center"><input type="text" name="text" id="text" size="40" hidden></td>
			  </tr>
			</table>
			<center>
            <input type="submit" id="submit" value="Login" name="Submit" hidden>
			</center>
		<div class="signup-link"><a href="index.php">Back to Home</a>&nbsp;</div>		  
        </form>
     </div>
	 </div>
  </body>
</body>
</html>

<script type="text/javascript">
function onScanSuccess(qrCodeMessage) {
    document.getElementById('result').innerHTML = '<span class="result">'+qrCodeMessage+'</span>';
	document.getElementById("text").value = qrCodeMessage;//Now you get the js variable inside your form elem	
	var f = document.getElementById("submit");  
    f.click();	
	//var audio = new Audio("audio/beep.mp3");
	//audio.play();	
}
function onScanError(errorMessage) {
  //handle scan error
}
var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess, onScanError);
</script>


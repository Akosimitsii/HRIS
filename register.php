<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PCAAT Modules Uploading</title>
    <link rel="stylesheet" href="registerstyle.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
<!--

body {
	margin-top: 1px;
}

-->
</style></head>
<SCRIPT LANGUAGE=JavaScript>
<!-- Begin
function ignoreSpaces(string) {
var temp = "";
string = '' + string;
splitstring = string.split(" ");
for(c = 0; c < splitstring.length; c++)
temp += splitstring[c];
return temp;
}

//  End -->
</script>


<SCRIPT language=JavaScript>
<!--

function checkPassword(str)
 {
  var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
  return re.test(str);
 }

function validate() {
  frm = document.form1;
  if(frm.email.value == '') {
    alert("Please enter the Username");
    frm.email.focus();
	return false;
  }

    re = /^\w+$/;
    if(!re.test(frm.email.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      frm.email.focus();
      return false;
    }

    if(frm.textfield.value != "" && frm.textfield.value == frm.textfield2.value) {
      if(frm.textfield.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        frm.textfield.focus();
        return false;
      }

      re = /[0-9]/;

      if(!re.test(frm.textfield2.value)) {
        alert("Error: password must contain at least one number (0-9)!");
       frm.textfield2.focus();
        return false;
      }

      re = /[A-Z]/;
      if(!re.test(frm.textfield3.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        frm.textfield3.focus();
        return false;
      }

    if(frm.textfield.value != "" && frm.textfield.value == frm.textfield2.value) {
      if(!checkPassword(frm.textfield2.value)) {
        alert("The password you have entered is not valid!");
        frm.textfield.focus();
        return false;
      }
    }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      frm.textfield2.focus();
      return false;
    }


  if(frm.firstname.value == "") {
    alert("Please enter your First Name");
    frm.firstname.focus();
	return false;
  }

  if(frm.lastname.value == "") {
    alert("Please enter your Last Name");
    frm.lastname.focus();
	return false;
  }

  if(frm.strand.value == "") {
    alert("Please select your Strand");
    frm.strand.focus();
	return false;
  }

// If we've gotten this far, everything's valid!
return true;

}
//  End -->
</script>

<?php
// Your connection to the database
// == TO ENABLE SESSION VARIABLES IN HOST DOMAIN
//php_flag output_buffering on;

@session_start();
include("webconnect.php");

if(isset($_POST['Submit'])) {
$username 	= $_POST['email'];
$password	= $_POST['textfield2'];
$firstname	= $_POST['firstname'];
$mi			= $_POST['mi'];
$lastname 	= $_POST['lastname'];
$strand 	= $_POST['strand'];
$emailaddress	= $_POST['email'];

$sql = "INSERT INTO students (username,password,firstname,mi,lastname,strand,emailaddress) "
   . "  VALUES('$username','$password','$firstname','$mi','$lastname','$strand','$emailaddress')";

	$sql2 = "INSERT INTO users (username,password,accesslevel) "
	 . "  VALUES('$username','$password','Student' )";
	$result = mysqli_query($conn, $sql2); 

   if(mysqli_query($conn, $sql)) {
    $_SESSION['username'] = '$username';
    $_SESSION['accesslevel'] = 'Student';
	?>

	<SCRIPT Language=Javascript>
	<!--
		alert("New Employee Records has been saved!");
	// End -->
	</SCRIPT>	
	<SCRIPT language="JavaScript">

	<!--
		location.href="index.php";
	//  End -->
	</script>			 

	<?php
	} else{
	?>

	<SCRIPT Language=J avascript>
	<!--
		alert("Error. Could not save records!");
	// End -->
	</SCRIPT>	
	<SCRIPT language="JavaScript">
	<!--
		history.back();
	//  End -->
	</script>			 
 <?php
	} 
}  // end of the if(isset($_POST['Submi']))

?>
 

  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title">Registration Area </div>
		<form " method="post" name="form1" id="form1" onSubmit="return validate(this);">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="email"  placeholder="Your PCAAT Email address" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input name="textfield" type="password" placeholder="Enter your Password" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input name="textfield2" type="password" placeholder="Re-type Password" required>
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="firstname"  placeholder="Your First name" required>
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="mi"  placeholder="Your Middle Name" required>
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="lastname"  placeholder="Your Lastname" required>
          </div>

          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="strand"  placeholder="Strand" required>
          </div>
          <div class="row button">
            <input type="submit" value="Signup" name="Submit">
          </div>
          <div class="signup-link">Already a member? <a href="login.php">Login</a> |&nbsp;<a href="index.php">Home</a></div>
        </form>
      </div>
    </div>

  </body>

</body>
</html>


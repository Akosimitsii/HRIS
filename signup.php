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

  if(frm.textfield4.value == '') {
    alert("Please enter the Username");
    frm.textfield4.focus();
	return false;
  }

    re = /^\w+$/;
    if(!re.test(frm.textfield4.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      frm.textfield4.focus();
      return false;
    }
    if(frm.textfield3.value != "" && frm.textfield3.value == frm.textfield2.value) {
      if(frm.textfield3.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        frm.textfield3.focus();
        return false;
      }
      if(frm.textfield3.value == frm.textfield4.value) {
        alert("Error: Password must be different from Username!");
        frm.textfield3.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(frm.textfield3.value)) {
        alert("Error: password must contain at least one number (0-9)!");
       frm.textfield3.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(frm.textfield3.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        frm.textfield3.focus();
        return false;
      }
    if(frm.textfield3.value != "" && frm.textfield3.value == frm.textfield2.value) {
      if(!checkPassword(frm.textfield3.value)) {
        alert("The password you have entered is not valid!");
        frm.textfield3.focus();
        return false;
      }
    }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      frm.textfield3.focus();
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

  if((frm.gender[0].checked == false ) && (frm.gender[1].checked == false )) {
	alert("Please select your gender!");
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



<style type="text/css">
<!--
.style51 {font-size: 14px; font-weight: bold; }
.style52 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: large;
}
.style53 {font-size: 14px}
-->
</style>
<?php
session_start();
include("webconnect.php");

// -- START of SAVING 
if(isset($_POST['Submit'])) {
$username 	= $_POST['textfield4'];
$password	= $_POST['textfield2'];
$firstname	= $_POST['firstname'];
$mi			= $_POST['mi'];
$lastname 	= $_POST['lastname'];
$strand 	= $_POST['strand'];
$gender 	= $_POST['gender'];
$emailaddress	= $_POST['emailaddress'];

// begin the actual saving (evaluating record is only optional) 

$sql = "INSERT INTO students (username,password,$firstname,mi,lastname,gender,strand,emailaddress) "
 . "  VALUES('$username','$password','$firstname','$mi','$lastname','$gender','$strand','$emailaddress')";

	$sql2 = "INSERT INTO users (username,password,accesslevel) "
	 . "  VALUES('$username','$password','Student' )";
	$result = mysqli_query($conn, $sql2); 

   if(mysqli_query($conn, $sql)) {
	?>
	<SCRIPT Language=J avascript>
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
	  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	} 
}  // end of the if(isset($_POST['Submi']))

?>
<html>
<title>PCAAT - Register page</title><body><center>
<p><img src="images/pcaatHQ.jpg" width="80" height="80" align="center" /><span class="style52">Welcome to PCAAT Student </span><br />
<font face="Verdana, Arial, Helvetica, sans-serif" color="#000000">Complete all necessary and valid entry</font></p>
<p>&nbsp;</p>
</p>
<table width="436" height="269" border="0" bordercolor="#cccccc" cellspacing="0" cellpadding="0">
  <tr>
    <td width="436" height="269" valign="top" bordercolor="#cccccc"><form " method="post" name="form1" id="form1" onsubmit="return validate(this);">
      <table width="99%" border="0" cellspacing="0" cellpadding="1">
        <tr>
          <td width="30%" height="23" valign="middle"><span class="style53"><font face="Arial">Username</font></span></td>
          <td width="70%" valign="middle"><span class="style53"><font face="Arial">
            <input type="text" name="textfield4" size="27" />
          </font></span></td>
        </tr>
        <tr>
          <td height="27" valign="middle"><span class="style53"><font face="Arial">Password&nbsp;</font></span></td>
          <td valign="middle"><span class="style53"><font face="Arial">
            <input name="textfield3" type="password" id="textfield3"  size="27" maxlength="30" />
          </font></span></td>
        </tr>
        <tr>
          <td height="24" valign="middle"><span class="style53"><font face="Arial">Confirm
            Password</font></span></td>
          <td valign="middle"><span class="style53"><font face="Arial">
            <input name="textfield2" type="password" id="textfield2" size="27" maxlength="30" />
          </font></span></td>
        </tr>
        <tr>
          <td height="24" valign="middle"><span class="style53">Firstname</span></td>
          <td valign="middle"><span class="style53"><font face="Arial">
            <input name="firstname" type="text" id="firstname" size="27" maxlength="30" />
          </font></span></td>
        </tr>
        <tr>
          <td height="24" valign="middle"><span class="style53">Middle Initial </span></td>
          <td valign="middle"><span class="style53"><font face="Arial">
            <input name="mi" type="text" id="mi" size="27" maxlength="30" />
          </font></span></td>
        </tr>
        <tr>
          <td height="24" valign="middle"><span class="style53">Last Name </span></td>
          <td valign="middle"><span class="style53"><font face="Arial">
            <input name="lastname" type="text" id="lastname" size="27" maxlength="30" />
          </font></span></td>
        </tr>
        <tr>
          <td height="28" valign="middle"><span class="style53"><font face="Arial">Gender</font></span></td>
          <td valign="middle"><span class="style53">
            <input type="radio" value="Admin" name="gender" />
            <b><font face="Tahoma">Male</font><font face="Arial">&nbsp;</font></b><font face="Arial">&nbsp;&nbsp; </font>
            <input type="radio" value="Staff" name="gender" />
            <b><font face="Tahoma">Female&nbsp;</font></b></span></td>
        </tr>
        <tr>
          <td height="31" valign="middle"><span class="style53"><font face="Arial">Strand</font></span></td>
          <td valign="middle"><span class="style51">
            <select name="strand" id="strand">
              <option value="TVL">TVL</option>
              <option value="ICT">ICT</option>
              <option value="HUMSS">HUMSS</option>
              <option value="ABM">ABM</option>
              <option value=" ">Select Strand</option>
                                                            </select>
          </span></td>
        </tr>
        <tr>
          <td height="36" valign="middle"><span class="style53"><font face="Arial"> Email Address &nbsp;&nbsp;&nbsp;</font></span></td>
          <td valign="middle"><span class="style53"><font face="Arial">
            <input name="emailaddress" type="text" id="emailaddress" size="27" />
          </font></span></td>
        </tr>
        <tr>
          <td height="26" colspan="2" align="center"><input name="Submit" type="submit" id="Submit" value="Submit" />
            <input type="reset" value="Reset" name="B2" /></td>
          </tr>
      </table> 
  </form></td>
  </tr>
</table>
<p><a href="index.php">home</a></p>
</center>
</body>
</html>
<?php
@session_destroy();
?>

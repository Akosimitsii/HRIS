<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PCAAT Enrollment Form</title>
    </head>
	
	<SCRIPT Language=Javascript>
	<!--
	function ValidateEmail(mail) 
	{
	 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form1.email.value))
	  {
		alert("You have entered an invalid email address!")
		return (true)
	  }
		return (false)
	}
	// End -->
	</SCRIPT>
	
	<style type="text/css">
	<!--	
	
	*, *:before, *:after {
	 -moz-box-sizing: border-box;
	 -webkit-box-sizing: border-box;
	 box-sizing: border-box;
	}
	
	body {
	  font-family: 'Nunito', sans-serif;
	  color: #384047;
	}
	
	form {
	  max-width: 300px;
	  margin: 10px auto;
	  padding: 10px 20px;
	  background: #f4f7f8;
	  border-radius: 8px;
	}
	
	h1 {
	  margin: 0 0 30px 0;
	  text-align: center;
	}
	
	input[type="text"],
	input[type="password"],
	input[type="date"],
	input[type="datetime"],
	input[type="email"],
	input[type="number"],
	input[type="search"],
	input[type="tel"],
	input[type="time"],
	input[type="url"],
	textarea,
	select {
	  background: rgba(255,255,255,0.1);
	  border: none;
	  font-size: 16px;
	  height: auto;
	  margin: 0;
	  outline: 0;
	  padding: 9px;
	  width: 100%;
	  background-color: #e8eeef;
	  color: #8a97a0;
	  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	  margin-bottom: 20px;
	}
	
	input[type="radio"],
	input[type="checkbox"] {
	  margin: 0 4px 8px 0;
	}
	
	select {
	  padding: 6px;
	  height: 32px;
	  border-radius: 2px;
	}
	
	button {
	  padding: 19px 32px 13px 32px;
	  color: #FFF;
	  background-color: #4bc970;
	  font-size: 18px;
	  text-align: center;
	  font-style: normal;
	  border-radius: 5px;
	  width: 100%;
	  border: 1px solid #3ac162;
	  border-width: 1px 1px 3px;
	  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
	  margin-bottom: 10px;
	}
	
	fieldset {
	  margin-bottom: 15px;
	  border: none;s
	}
	
	legend {
	  font-size: 1.4em;
	  margin-bottom: 8px;
	}
	
	label {
	  display: block;
	  margin-bottom: 8px;
	}
	
	label.light {
	  font-weight: 300;
	  display: inline;
	}
	
	.number {
	  background-color: #5fcf80;
	  color: #fff;
	  height: 30px;
	  width: 30px;
	  display: inline-block;
	  font-size: 0.8em;
	  margin-right: 4px;
	  line-height: 30px;
	  text-align: center;
	  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
	  border-radius: 100%;
	}
	
	@media screen and (min-width: 480px) {
	
	  form {
		max-width: 480px;
	  }
	
	}
	-->
	</style>
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
$id = @$_REQUEST['id'];
/*
ini_set("post_max_size","128M");
ini_set("session.gc_maxlifetime","10800"); 
ini_set("upload_max_filesize", "200M");
*/

$sql = "SELECT * from deduction_rates where id = '$id' " ;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result); 

if(isset($_POST['Submit']) ) 
{
 
$sss 		 = $_POST['sss'];
$philhealth  = $_POST['philhealth'];
$tin 		 = $_POST['tin'];
$pagibig 	 = $_POST['pagibig'];
$taxcategory = $_POST['taxcategory'];
$salary 	 = $_POST['salary'];

//$position 	= $_POST['position'];

$sql = "UPDATE deduction_rates SET "  // prepares the table and datafields for insertion
	. "sss = '$sss', "
	. "philhealth = '$philhealth', "
	. "wtax = '$wtax', "
	. "pagibig = '$pagibig', "
	. "taxcategory = '$taxcategory', "
	. "salary_range = '$salary'  WHERE id = '$id' " ;
mysqli_query($conn, $sql);
}

?>
<body>

      <form name="form1" id="form1" method="post" enctype="multipart/form-data" onSubmit="return validateMe(this.lname.value);" >
      
        <h1><a href="index.php"></a>Update Deductions Rates </h1>
        
        <fieldset>
          <label for="name"><strong>Tax Category *</strong></label>
        <select id="taxcategory" name="taxcategory" required>
            <option value="">Select</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
            <option value="F">F</option>
            <option value="<?php echo $row['taxcategory']; ?>" selected><?php echo $row['taxcategory']; ?></option>
        </select>
		 <br>	<br>
          <label for="name"><strong>Salary Rage - (Example: 20000)</strong></label>
          <input name="salary" type="number" id="salary" value="<?php echo $row['salary_range']; ?>" required>          
         
          <label for="name"><strong>SSS Contribution * (Multipled by percentage. Ex. 0.05):</strong></label>
          <input name="sss" type="number" id="sss" value="<?php echo $row['sss']; ?>" required>          
          
          <label for="name"><strong>PhilHealth Contribution -  (Fixed amount. Ex: 150):</strong> </label>
          <input name="philhealth" type="number" id="philhealth" value="<?php echo $row['philhealth']; ?>" required>
		  
          <label for="name"><strong>Withholding Tax (Multipled by percentage. Ex. 0.12):</strong></label>
          <input name="wtax" type="number" id="wtax" value="<?php echo $row['wtax']; ?>" required>
        <br>
          <label for="name"><strong>Pagibig Contribution - (Fixed amount. Ex: 100):</strong></label>
          <input name="pagibig" type="number" id="pagibig" value="<?php echo $row['pagibig']; ?>" required>
		 <br> 
		 <center>
            <input type="submit" value="  Submit  " name="Submit">&nbsp;&nbsp;<input type="reset" value="  Clear  " name="clear">
		</center>
        </fieldset>
      </form>
      
    </body>
</html>
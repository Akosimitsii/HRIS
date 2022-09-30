<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>My Timelogs</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<link rel="icon" type="image/png" href="inc/pcaaticon.ico">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<style type="text/css">
<!--
body {
	background-image: url();
	margin-top: 0px;
}

.inline{   
     display: inline-block;   
     float: right;   
     margin: 20px 0px;   
   }            
input, button{   
     height: 24px;   
 }    

.tr:nth-child(odd) {
	background-color: #ffffff;
}
.pagination {
	list-style-type: none;
	padding: 10px 0;
	display: inline-flex;
	justify-content: space-between;
	box-sizing: border-box;
}
.pagination li {
	box-sizing: border-box;
	padding-right: 10px;
}
.pagination li a {
	box-sizing: border-box;
	background-color: #e2e6e6;
	padding: 8px;
	text-decoration: none;
	font-size: 12px;
	font-weight: bold;
	color: #616872;
	border-radius: 4px;
}
.pagination li a:hover {
	background-color: #d4dada;
}
.pagination .next a, .pagination .prev a {
	text-transform: uppercase;
	font-size: 12px;
}
.pagination .currentpage a {
	background-color: #518acb;
	color: #fff;
}
.pagination .currentpage a:hover {
	background-color: #518acb;
}

.style116 {color: #000000}
.style5 {font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style6 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style7 {color: #FF0000; font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style8 {
	font-size: 16px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
-->
</style>

</head>
<script>
$(function() {
$( "#txtDate" ).datepicker();
});
</script>

<script>
$(function() {
$( "#txtDate2" ).datepicker();
});
</script>

<script language="javascript">
function addNumbers()
{
      var val1 = parseInt(document.getElementById("amount").value);
      var val2 = document.getElementById("input_tax");
      val2.value = val1 * 0.12;
      var result = parseInt(val1) + parseInt(document.getElementById("input_tax").value);
      if (!isNaN(result)) {
         document.getElementById("amount2").value = result;
      }	  
 }
</script>

<?php
@session_start();

 include("webconnect.php");
if(@$_SESSION['accesslevel'] == "") { ?>
<SCRIPT Language=Javascript>
 <!--
//  alert("You are not logged -in or you have no authorization to view this page!");
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
@$q_date = "";
@$q_date = "";
$totals = "";

// === STARTS THE QUERIES FOR THE PAGINATION ========
// Number of results to show on each page.
if (!isset ($_GET['page']) ) {  
    $page_number = 1;  
  } else {  
    $page_number = $_GET['page'];  
 }  
 $limit = 75;  
 $redirect = "mytimelogs.php"; 
 $email = $_SESSION['username']; 

 // get the initial page number
 $initial_page = ($page_number-1) * $limit; 

 // query to retrieve all rows from the table Countries

 $getQuery = "SELECT * from timelogs where qr_code = '$email' ORDER by time_in DESC, lname ASC ";  
 // get the result
 $result = mysqli_query($conn, $getQuery);  
 $total_rows = mysqli_num_rows($result); 
 // get the required number of pages
 $total_pages = ceil ($total_rows / $limit);  
	
 $getQuery = "SELECT * FROM timelogs where qr_code = '$email' ORDER by time_in DESC, lname ASC LIMIT " . $initial_page . ',' . $limit;  
 $result = mysqli_query($conn, $getQuery);      
 //display the retrieved result on the webpage  
 // ==== END OF QUERIES FOR THE PAGINATION 
 
//$mysqli = mysqli_connect('localhost', 'root', '', 'pcaat_dtr');
$email = $_SESSION['username']; 

$sql26 = "SELECT * from timelogs where qr_code = '$email' ORDER by time_in DESC, lname ASC ";
$result = mysqli_query($conn, $sql26);


// //-- search by inclusive dates
if(isset($_POST['Submit2'])) 
{
  $date4 = $_POST['date1'];
  $date5 = $_POST['date2'];
 
  if(($date4 == '') && ($date5 =='')) {
   $sql26 = "SELECT * from timelogs where qr_code = '$email' ORDER by time_in DESC, lname ASC ";
   $result = mysqli_query($conn, $sql26);
  } else {
 //if($criteria2 == "description") {
   $sql27 = "SELECT * from timelogs where qr_code = '$email' AND login_date >= '$date4' AND  login_date <= '$date5' ORDER by time_in DESC " ;
   $result = mysqli_query($conn, $sql27);
 //$row2 = mysqli_fetch_assoc($result);
 }
}
?>

<body>
<?php if(@$_SESSION['accesslevel']!="" ) { ?>
<?php include("mainmenu.php"); ?>
<center>

<table width="98%" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td width="30%" height="28" valign="middle" bgcolor="#FFFFFF"> <span class="style116">Welcome: <?php echo $email; ?></span></td>
    <td width="70%" valign="middle" bgcolor="#FFFFFF">
		<form id="form4" name="form4" method="post">
		<span class="style8">My Time Logs</span>&nbsp;Incl. Dates: 
	      From 
		  <input type="text" name="date1" id="txtDate" />
	      to 
	      <input type="text" name="date2" id="txtDate2" /></div>
     &nbsp;<input type="submit" name="Submit2" id="Submit2" value=" Submit " >
		</form></td>
  </tr>
</table>
<center>
  <table width="99%" height="69" border="0" cellpadding="3" cellspacing="1" bordercolor="#99CCCC" align="center">
    <tr bgcolor="#000033">
      <td width="220" height="32" bgcolor="#6699CC" class="style85 style77 style68"><span class="style93 style116">Employee Email Address </span></td>
      <td width="253" bgcolor="#6699CC" class="style85 style77 style68"><span class="style93 style116">Employee Name </span></td>
      <td width="251" align="left" bgcolor="#6699CC" class="style85 style77 style68"><span class="style93 style116">Position / Department</span></td>
      <td width="121" align="center" bgcolor="#6699CC" class="style68 style77 style85"><span class="style116"><strong>Date</strong></span></td>
      <td width="110" align="center" bgcolor="#6699CC" class="style85 style77 style68"><span class="style116"><strong>Day</strong></span></td>
      <td width="97" align="center" bgcolor="#6699CC" class="style68 style77 style85"><span class="style116"><strong>Time In </strong></span></td>
      <td width="95" align="center" bgcolor="#6699CC" class="style68 style77 style85"><span class="style116"><strong>Time Out </strong></span></td>
      <td width="78" align="center" bgcolor="#6699CC" class="style68 style77 style85"><span class="style116"><strong>Duration</strong></span></td>
      <td width="73" align="center" bgcolor="#6699CC" class="style85 style77 style68"><span class="style93 style116">Late (h) </span></td>
      <td width="86" align="center" bgcolor="#6699CC" class="style68 style77 style85"><span class="style116"><strong>UT</strong></span> (h) </td>
    </tr>

  <?php
	$late = 0;
	$ut = 0;

	 while($row2 = mysqli_fetch_assoc($result)) {
	// while ($row2 = $result->fetch_assoc()):
		
  	$start_time = new DateTime('08:00:00');
	$end_time = new DateTime('17:00:00');
			  
	$date1 = $row2['timein'];
	$date2 = $row2['timeout'];
			  
	$time1 = new DateTime($date1);
	$time2 = new DateTime($date2);
	$timediff = $time1->diff($time2);
			  
	 if($date2 =='') {
	  $elapsed_time = '';	
	  } else {
	  $elapsed_time = $timediff->format('%h.%i');	
	  }
	 if($date2 > '13:00:00') {
	  $elapsed_time = $timediff->format('%h.%i')-1;	
	 }
			  	
	if($date1 > '08:00:00') {
	 $timediff2 = $start_time->diff($time1);
	  $late = $timediff2->format('%h.%i');
	  } else {
	  $late = 0;	
	 }

	if($date2 < '17:00:00') {
	 $timediff3 = $time2->diff($end_time);
	  $ut = $timediff3->format('%h.%i');
	  } else {
	  $ut = 0;	
	 }
	 if($date2 =='') {
	  $ut='';
	 }
			 
	// --- alternating row colors
	if(@$color == "#EBEAE9") {
     	@$color = "#DEEFE9";
		} else {
		@$color = "#EBEAE9";
  		}			
		
?>

    <tr bordercolor="#996633" bgcolor="#FFCCFF" class="style68">
      <td height="22" valign="top" bgcolor="<?php echo $color; ?>"><span class="style5"><?php echo $row2['emp_num']; ?></span></td>
      <td height="22" valign="top" bgcolor="<?php echo $color; ?>"><span class="style5"><?php echo $row2['lname']; ?>,&nbsp;<?php echo $row2['fname']; ?>&nbsp;<?php echo $row2['mname']; ?>.</strong></span></td>
      <td align="left" valign="top" bgcolor="<?php echo $color; ?>"><span class="style5"><?php echo $row2['position']; ?></span></td>
      <td align="center" valign="top" bgcolor="<?php echo $color; ?>"><span class="style5"><?php echo $row2['login_date']; ?></span></td>
      <td align="left" valign="top" bgcolor="<?php echo $color; ?>"><span class="style5"><?php echo $row2['day']; ?></span></td>
      <td align="center" valign="top" bgcolor="<?php echo $color; ?>"><span class="style5"><?php echo $row2['timein']; ?></span></td>
      <td align="center" valign="top" bgcolor="<?php echo $color; ?>"><span class="style5"><?php echo $row2['timeout']; ?></span><span class="style6"></span></span></td>
      <td align="center" valign="top" bgcolor="<?php echo $color; ?>"><span class="style5"><?php echo $elapsed_time; ?></span><span class="style6"></span></span></td>
      <td align="center" valign="top" bgcolor="<?php echo $color; ?>"><span class="style7"><?php echo $late; ?></span><span class="style6"></span></span></td>
      <td align="center" valign="top" bgcolor="<?php echo $color; ?>"><span class="style7"><?php echo $ut; ?></span></td>
    </tr>

     <?php
	     //  @mysqli_close($conn);
		 // endwhile; 
		 }
		}
	 ?>
  </table>
  <?php include("pagination.php"); ?>
</center>
</body>
</html>


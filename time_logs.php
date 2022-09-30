<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PCAAT Employee time_logs_2</title>
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

s.style114 {font-size: 14}
.style116 {color: #000000}
.style11 {font-family: Geneva, Arial, Helvetica, sans-serif}
.style12 {color: #FF0000; font-size: 12px; font-family: Geneva, Arial, Helvetica, sans-serif; }
.style13 {font-size: 12px}
.style14 {color: #FF0000}
.style17 {font-size: 14px}
.style18 {color: #000000; font-family: Geneva, Arial, Helvetica, sans-serif; font-weight: bold; font-size: 14px; }
.style19 {color: #0000FF}
-->
</style>

</head>

<SCRIPT Language=Javascript>
<!--
function validateMe() {
frm2 = document.form2;
if(frm2.empl_number.value == '') {
 alert("Please enter employee username!");
frm2.empl_number.focus();
return false;
}

if(frm2.date1.value == '') {
 alert("Please select Start date!");
frm2.date1.focus();
return false;
}

if(frm2.date2.value == '') {
 alert("Please select End date!");
frm2.date2.focus();
return false;
}

// next item to be validated
return true;
}
// End -->
</SCRIPT>

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
if(@$_SESSION['accesslevel']!="Admin") { ?>
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

//$mysqli = mysqli_connect('localhost', 'root', '', 'pcaat_dtr');

// === STARTS THE QUERIES FOR THE PAGINATION ========
// Number of results to show on each page.
if (!isset ($_GET['page']) ) {  
    $page_number = 1;  
  } else {  
    $page_number = $_GET['page'];  
 }  
 $limit = 75;  
 // get the initial page number
 $initial_page = ($page_number-1) * $limit; 

 // query to retrieve all rows from the table Countries

 $getQuery = "SELECT * from timelogs ORDER by time_in DESC, lname ASC ";  
 // get the result
 $result = mysqli_query($conn, $getQuery);  
 $total_rows = mysqli_num_rows($result); 
 // get the required number of pages
 $total_pages = ceil ($total_rows / $limit);  
	
 $getQuery = "SELECT * FROM timelogs ORDER by time_in DESC, lname ASC LIMIT " . $initial_page . ',' . $limit;  
 $result = mysqli_query($conn, $getQuery);      
 //display the retrieved result on the webpage  
 // ==== END OF QUERIES FOR THE PAGINATION 

//$sql3 = "SELECT DISTINCT username from users";
$sql3 = "SELECT DISTINCT qr_code from timelogs";
$results1 = mysqli_query($conn, $sql3);
		
// //-- SEARCH by individual
if(isset($_POST['btnSearch2'])) 
{
   $criteria2 = $_POST['criteria'];
   $variable2 = $_POST['textsearch2'];

if($variable2 =="") {
  $sql25 = "SELECT * from timelogs ORDER by time_in DESC, lname ASC ";
  $result = mysqli_query($conn, $sql25);
//$row2 = mysqli_fetch_assoc($result);

 } else {

 //if($criteria2 == "description") {
   $sql27 = "SELECT * from timelogs where $criteria2 LIKE '$variable2%%' ORDER by time_in DESC, lname ASC " ;
   $result = mysqli_query($conn, $sql27);
 //$row2 = mysqli_fetch_assoc($result);
 }
}

// //-- search by Employee QR and Inclusive dates
if(isset($_POST['Submit2'])) 
{
 $date1 = $_POST['date1'];
 $date2 = $_POST['date2'];
 $variable1 = $_POST['empl_number'];
 
 $_SESSION['date1'] = $date1;
 $_SESSION['date2'] = $date2;
 $_SESSION['empnumber'] = $_POST['empl_number'];


 if( ($variable1 =="") && ($date1 =='') && ($date2 =='') ) {
  $sql25 =" SELECT * from timelogs ORDER by time_in DESC, lname ASC ";
  $result = mysqli_query($conn, $sql25);
 //$row2 = mysqli_fetch_assoc($result);
  } else {
 //if($criteria2 == "description") {
 $sql27 = "SELECT * from timelogs where qr_code = '$variable1' AND DATE(login_date) >= '$date1' AND DATE(login_date) <= '$date2' ORDER by time_in DESC, lname ASC " ;
// $sql27 = "SELECT * from timelogs where qr_code = '$variable1' AND DATE(login_date) BETWEEN '$date1' AND '$date2' ORDER by time_in DESC, lname ASC " ;

 // SELECT * FROM users
 // WHERE DATE(last_update)
 // BETWEEN "2021-08-01" AND "2021-08-02"
  
 $result = mysqli_query($conn, $sql27);
//$row2 = mysqli_fetch_assoc($result);
 }
}

if(isset($_POST['Submit4'])) 
{
 //if($criteria2 == "description") {
   $sql28 = "SELECT * from timelogs ORDER by time_in DESC, lname ASC " ;
   $result = mysqli_query($conn, $sql28);
 //$row2 = mysqli_fetch_assoc($result);
}

?>

<body>
<?php include("mainmenu.php"); ?>
<center>
<table width="99%" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td width="31%" height="28" valign="middle" bgcolor="#99CCFF"> <form id="form3" name="form3" method="post" > 
		<span class="style92">Search by:</span>
      <select name="criteria" id="criteria">
        <option selected="selected">Select</option
        >
        <option value="emp_num">Emp. Number</option>
        <option value="lname">Lastname</option>
      </select>

      <input name="textsearch2" type="text" id="textsearch2" size="6" />
      <input name="btnSearch2" type="submit" id="btnSearch2" value="GO" />
      <input name="Submit4" type="submit" id="Submit4" value=" All" />
    </form></td>
    <td width="69%" align="right" valign="middle" bgcolor="#CCFFCC">
	<form id="form2" name="form2" method="post" enctype="multipart/form-data" onSubmit="return validateMe(this.empl_number.value);">
	    <span class="style85">
	    <select name="empl_number" id="empl_number">
	      <option value="" selected="selected">Emp. Email</option>
		<?php while($row3 = mysqli_fetch_assoc($results1)) { ?>
	      <option value="<?php echo $row3['qr_code']; ?>"><?php echo $row3['qr_code']; ?></option>
		<?php } ?>
		</select>
	    Payd</span>ates: 
	      <input type="text" name="date1" id="txtDate" />
	      =&gt; 
	      <input type="text" name="date2" id="txtDate2" /></div>
     &nbsp;<input type="submit" name="Submit2" id="Submit2" value="Go" >

 	</form> </td>
  </tr>
</table>
<center>
  <table width="99%" height="52" border="0" cellpadding="3" cellspacing="1" bordercolor="#99CCCC" align="center">
    <tr bgcolor="#000033">
      <td width="190" height="24" bgcolor="#6699CC" class="style85 style77 style68"><span class="style17 style11 style116 style93"><strong>Email Address  </strong></span></td>
      <td width="187" bgcolor="#6699CC" class="style85 style77 style68"><span class="style17 style11 style116 style93"><strong>Employee Name </strong></span></td>
      <td width="161" align="left" bgcolor="#6699CC" class="style85 style77 style68"><span class="style17 style11 style116 style93"><strong>Position / Department</strong></span></td>
      <td width="89" align="center" bgcolor="#6699CC" class="style68 style77 style85"><span class="style18">Date</span></td>
      <td width="61" align="center" bgcolor="#6699CC" class="style85 style77 style68"><span class="style18">Day</span></td>
      <td width="74" align="center" bgcolor="#6699CC" class="style68 style77 style85"><span class="style18">Time In </span></td>
      <td width="82" align="center" bgcolor="#6699CC" class="style68 style77 style85"><span class="style18">Time Out </span></td>
      <td width="60" align="center" bgcolor="#6699CC" class="style68 style77 style85"><span class="style18">Status</span></td>
      <td width="60" align="center" bgcolor="#6699CC" class="style68 style77 style85"><span class="style18">Duration</span></td>
      <td width="54" align="center" bgcolor="#6699CC" class="style85 style77 style68"><span class="style93 style116 style11 style17">Late (h) </span></td>
      <td width="46" align="center" bgcolor="#6699CC" class="style68 style77 style85 style11 style17"><span class="style116"><strong>UT</strong></span><strong> (h) </strong></td>
      <td width="53" align="center" bgcolor="#6699CC" class="style68 style77 style85 style11 style17">**</td>
    </tr>

  <?php
	$late = 0;
	$ut = 0;
	$total = 0;
	$deductions = 0;
	$total_salary = 0;
	$total_time = 0;

	// ---- while($row2 = mysqli_fetch_assoc($result)) {
    while ($row2 = mysqli_fetch_assoc($result)) {  
	$emp_qr = $row2['qr_code'];
	$count2 = mysqli_num_rows($result);		// estimated total days counted (RAW)

	//===== provide data for computation ===============
    $sql27c = "SELECT * from employees where email = '$emp_qr' "; ;
    $resultc = mysqli_query($conn, $sql27c);
	$row2c = mysqli_fetch_assoc($resultc);
	$emp_taxcategory = @$row2c['taxcategory'];
	$emp_salary = @$row2c['salary'];

    $sql27d = "SELECT * from deduction_rates where taxcategory = '$emp_taxcategory' "; ;
    $resultd = mysqli_query($conn, $sql27d);
	$row2d = mysqli_fetch_assoc($resultd);

	$emp_sss = @$row2d['sss'];
	$emp_philhealth = @$row2d['philhealth'];
	$emp_wtax = @$row2d['wtax'];
	$emp_pagibig = @$row2d['pagibig'];

	$sss = $emp_salary * $emp_sss;
	$wtax = ($emp_salary/2) * $emp_wtax;
	
	$deductions = $emp_pagibig + $emp_philhealth + $wtax + $sss;
	$total_salary =  ((@$emp_salary/2 )- ($emp_pagibig + $emp_philhealth + $wtax + $sss)); 
				
  	// ============
	
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

	$total_time = $total_time + $elapsed_time;		// overall total divided by the 8 hours
				  	
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

	// === COMPUTE Salary ===========
	
	
	// ==============================
			 
	// --- alternating row colors
	if(@$color == "#EBEAE9") {
     	@$color = "#DEEFE9";
		} else {
		@$color = "#EBEAE9";
  		}			
		
?>

    <tr bordercolor="#996633" bgcolor="#FFCCFF" class="style68">
      <td height="24" valign="top" bgcolor="<?php echo $color; ?>" class="style114"><span class="style114 style11 style13"><?php echo $row2['qr_code']; ?></span></td>
      <td height="24" valign="top" bgcolor="<?php echo $color; ?>" class="style114"><span class="style114 style11 style13"><?php echo $row2['lname']; ?>,&nbsp;<?php echo $row2['fname']; ?>&nbsp;<?php echo $row2['mname']; ?>.</strong></span></td>
      <td align="left" valign="top" bgcolor="<?php echo $color; ?>" class="style114"><span class="style114 style11 style13"><?php echo $row2['position']; ?></span></td>
      <td align="center" valign="top" bgcolor="<?php echo $color; ?>" class="style114"><span class="style114 style11 style13"><?php echo $row2['login_date']; ?></span></td>
      <td align="left" valign="top" bgcolor="<?php echo $color; ?>" class="style114"><span class="style114 style11 style13"><?php echo $row2['day']; ?></span></td>
      <td align="center" valign="top" bgcolor="<?php echo $color; ?>" class="style114"><span class="style114 style11 style13"><?php echo $row2['timein']; ?></span></td>
      <td align="center" valign="top" bgcolor="<?php echo $color; ?>" class="style114 style11 style13"><span class="style114 "><?php echo $row2['timeout']; ?></span></span></td>
      <td align="center" valign="top" bgcolor="<?php echo $color; ?>" class="style114 style11 style13 style19"></span><span class="style114 "><?php echo $row2['status']; ?></span></td>
      <td align="center" valign="top" bgcolor="<?php echo $color; ?>" class="style114 style11 style13"><span class="style114 "><?php echo $elapsed_time; ?></span></td>
      <td align="center" valign="top" bgcolor="<?php echo $color; ?>" class="style114 style11 style13"><span class="style14"><?php echo $late; ?></span></span></td>
      <td align="center" valign="top" bgcolor="<?php echo $color; ?>" class="style114"><span class="style12"><?php echo $ut; ?></span></td>
      <td align="center" valign="top" bgcolor="<?php echo $color; ?>"><a href="update.php?id=<?php echo $row2['id']; ?>"><img src="buttons/001_18.png" width="16" height="16" border="0" onClick="return confirm('Do you really want to consider employee's timelog?');"></a></td>
    </tr>

     <?php
	     //  @mysqli_close($conn);
		 // endwhile; 
		 // <input type="button" name="confirm" id="confirm"  onClick="confirm('do you really want this')" value="click">
 	  }
	 ?>
  </table>

<?php if (ceil($total_rows / $limit) > 0): ?>
<ul class="pagination">
	<?php if ($page_number > 1): ?>
	<li class="prev"><a href="time_logs.php?page=<?php echo $page_number-1 ?>">Prev</a></li>
	<?php endif; ?>

	<?php if ($page_number > 3): ?>
	<li class="start"><a href="timelogs.php?page=1">1</a></li>
	<li class="dots">...</li>
	<?php endif; ?>

	<?php if ($page_number-2 > 0): ?><li class="page"><a href="time_logs.php?page=<?php echo $page_number-2 ?>"><?php echo $page_number-2 ?></a></li><?php endif; ?>
	<?php if ($page_number-1 > 0): ?><li class="page"><a href="time_logs.php?page=<?php echo $page_number-1 ?>"><?php echo $page_number-1 ?></a></li><?php endif; ?>

	<li class="currentpage"><a href="time_logs.php?page=<?php echo $page_number ?>"><?php echo $page_number ?></a></li>

	<?php if ($page_number+1 < ceil($total_rows / $limit)+1): ?><li class="page"><a href="time_logs.php?page=<?php echo $page_number+1 ?>"><?php echo $page_number+1 ?></a></li><?php endif; ?>
	<?php if ($page_number+2 < ceil($total_rows / $limit)+1): ?><li class="page"><a href="time_logs.php?page=<?php echo $page_number+2 ?>"><?php echo $page_number+2 ?></a></li><?php endif; ?>

	<?php if ($page_number < ceil($total_rows / $limit)-2): ?>
	<li class="dots">...</li>
	<li class="end"><a href="time_logs.php?page=<?php echo ceil($total_rows / $limit) ?>"><?php echo ceil($total_rows / $limit) ?></a></li>
	<?php endif; ?>

	<?php if ($page_number < ceil($total_rows / $limit)): ?>
	<li class="next"><a href="time_logs.php?page=<?php echo $page_number+1 ?>">Next</a></li>
	<?php endif; ?>
</ul>
<?php endif; ?>


</div>    
<div class="inline">   
<input id="page" type="number" min="1" max="<?php echo $total_pages?>"   
placeholder="<?php echo $page_number."/".$total_pages; ?>" required>   
<button onClick="go2Page();">Go</button>   
</div>    
</div>   
</center>   

<p>
  <script>   
 function go2Page()   
 {   
    var page = document.getElementById("page").value;   
    page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
    window.location.href = 'timelogs.php?page='+page;   
 }   
 </script>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php if (@$emp_taxcategory !='') { ?>
<p> Days/Time  = <?php echo $count2; ?>&nbsp;/&nbsp;<?php echo $total_time; ?> </p>
<p> Gross Salary  = <?php echo $emp_salary; ?> 
<br /> sss = <?php echo $sss; ?> 
<br /> pagibig = <?php echo $emp_pagibig; ?> 
<br /> philhealth = <?php echo $emp_philhealth; ?> 
<br /> WTax = <?php echo $wtax; ?> 
<br /> Total Deductions = <?php echo $deductions; ?> 
<br /> Net Computation = <?php echo $total_salary; ?> 
<?php } ?>
</center>
</body>
</html>


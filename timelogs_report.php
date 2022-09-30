<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PCAAT Employee Timelogs</title>
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
.style13 {font-size: 12px}
.style14 {color: #FF0000}
.style17 {font-size: 14px}
.style18 {color: #000000; font-family: Geneva, Arial, Helvetica, sans-serif; font-weight: bold; font-size: 14px; }
.style19 {color: #0000FF}
.style20 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style23 {color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; }
.style24 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; }
.style25 {font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 14px; }
-->
</style>

</head>


<?php
@session_start();

include("webconnect.php");


// $date1 = $_POST['date1'];
// $date2 = $_POST['date2'];
// $variable1 = $_POST['empl_number'];

 @$date1 = $_SESSION['date1'];
 @$date2 =  $_SESSION['date2'];
 @$variable1 = $_SESSION['empnumber'];

   $sql27 = "SELECT * from timelogs where emp_num = '$variable1' AND login_date >= '$date1' AND login_date <= '$date2' ORDER by time_in DESC, lname ASC " ;
   $result = mysqli_query($conn, $sql27);
   $row2 = mysqli_fetch_assoc($result);


?>

<body>
<span class="style25"><span class="style116 style93"><strong> &nbsp;</strong></span><?php echo @$row2['position']; ?></span><br />
<table width="80%" border="0">
  <tr>
    <td width="19%"><span class="style85 style77 style68"><span class="style17 style11 style116 style93"><strong>Employee Name </strong></span></span><span class="style25">: </span></td>
    <td width="37%"><span class="style25"><?php echo @$row2['lname']; ?>,&nbsp;<?php echo @$row2['fname']; ?>&nbsp;<?php echo @$row2['mname']; ?>.</span></td>
    <td width="12%"><span class="style85 style77 style68"><span class="style17 style11 style116 style93"><strong>Pay Period  </strong></span></span><span class="style25">: </span></td>
    <td width="32%">&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style25"><span class="style116 style93"><strong>Employee Email Address </strong></span>:</span></td>
    <td><span class="style25"><?php echo @$row2['emp_num']; ?></span></td>
    <td><span class="style85 style77 style68"><span class="style17 style11 style116 style93"><strong>Tax Bracket </strong></span></span><span class="style25">: </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style25"><span class="style116 style93"><strong>Position / Department</strong></span>: </span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<br />
<table width="80%" height="53" border="0" cellpadding="3" cellspacing="1" bordercolor="#99CCCC" bgcolor="#999999">
    <tr bgcolor="#000033">
      <td width="207" height="24" bgcolor="#CCCCCC" class="style23"><span class="style68 style77 style85"><span class="style18 style17 style20">Date</span></span></td>
      <td width="145" bgcolor="#CCCCCC" class="style23"><span class="style18 style17 style20">Day</span></td>
      <td width="108" align="left" bgcolor="#CCCCCC" class="style23"><span class="style68 style77 style85"><span class="style18 style17 style20">Time In </span></span></td>
      <td width="102" align="left" bgcolor="#CCCCCC" class="style23"><span class="style18 style17 style20">Time Out </span></td>
      <td width="100" align="left" bgcolor="#CCCCCC" class="style23"><span class="style68 style77 style85"><span class="style18 style17 style20">Status</span></span></td>
      <td width="93" align="left" bgcolor="#CCCCCC" class="style23"><span class="style18 style17 style20">Duration</span></td>
      <td width="102" align="left" bgcolor="#CCCCCC" class="style23"><span class="style85 style77 style68"><span class="style93 style116 style17 style20">Late (h)</span></span></td>
      <td width="98" align="left" bgcolor="#CCCCCC" class="style23"><span class="style68 style77 style85 style17 style20"><strong>UT (h)</strong></span></td>
    </tr>

  <?php
	$late = 0;
	$ut = 0;

	//	while($row2 = mysqli_fetch_assoc($result)) {
    while ($row2 = mysqli_fetch_array($result)) {  
		
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
      <td height="25" valign="top" bgcolor="#FFFFFF" class="style116"><span class="style114 style20 style17"><?php echo $row2['login_date']; ?></span></td>
      <td height="25" valign="top" bgcolor="#FFFFFF" class="style116"><span class="style114 style20 style17"><?php echo $row2['day']; ?></span></td>
      <td align="left" valign="top" bgcolor="#FFFFFF" class="style116"><span class="style114 style20 style17"><?php echo $row2['timein']; ?></span></td>
      <td align="left" valign="top" bgcolor="#FFFFFF" class="style116"><span class="style114 style11 style13"><span class="style114  style20 style17"><?php echo $row2['timeout']; ?></span></span></td>
      <td align="left" valign="top" bgcolor="#FFFFFF" class="style116"><span class="style114 style11 style13 style19"><span class="style114  style20 style17"><?php echo $row2['status']; ?></span></span></td>
      <td align="left" valign="top" bgcolor="#FFFFFF" class="style116"><span class="style114 style11 style13"><span class="style114  style20 style17"><?php echo $elapsed_time; ?></span></span></td>
      <td align="left" valign="top" bgcolor="#FFFFFF" class="style23"></span><span class="style14"><?php echo $late; ?></span></td>
      <td align="left" valign="top" bgcolor="#FFFFFF" class="style23"><span class="style114"><span class="style14"><?php echo $ut; ?></span></span></span></td>
    </tr>

     <?php
	     //  @mysqli_close($conn);
		 // endwhile; 
		 // <input type="button" name="confirm" id="confirm"  onClick="confirm('do you really want this')" value="click">
 	  }
	 ?>
</table>
  <br />
  <a href="index.php">Back to Home</a>
</center>
</body>
</html>


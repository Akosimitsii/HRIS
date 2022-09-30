<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Deduction Rates</title>
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
.style17 {font-size: 14px}
.style18 {color: #000000; font-family: Geneva, Arial, Helvetica, sans-serif; font-weight: bold; font-size: 14px; }
.style117 {font-size: 16px}
.style118 {color: #000000; font-family: Geneva, Arial, Helvetica, sans-serif; font-weight: bold; font-size: 16px; }
.style119 {font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 16px; }
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

 $getQuery = "SELECT * from deduction_rates ORDER by taxcategory ASC ";  
 // get the result
 $result = mysqli_query($conn, $getQuery);  
 $total_rows = mysqli_num_rows($result); 
 // get the required number of pages
 $total_pages = ceil ($total_rows / $limit);  
	
 $getQuery = "SELECT * FROM  deduction_rates ORDER by taxcategory  ASC LIMIT " . $initial_page . ',' . $limit;  
 $result = mysqli_query($conn, $getQuery);      
 //display the retrieved result on the webpage  
 // ==== END OF QUERIES FOR THE PAGINATION 
		
// //-- SEARCH by individual
if(isset($_POST['btnSearchB'])) 
{
   $criteria2 = $_POST['criteria'];
   $variable2 = $_POST['textsearch2'];

if($variable2 =="") {
  $sql25 = "SELECT * from deduction_rates ORDER by taxcategory  ASC  ";
  $result = mysqli_query($conn, $sql25);
//$row2 = mysqli_fetch_assoc($result);

 } else {

 //if($criteria2 == "description") {
   $sql27 = "SELECT * from deduction_rates where $criteria2 LIKE '$variable2%%' ORDER by taxcategory DESC " ;
   $result = mysqli_query($conn, $sql27);
 //$row2 = mysqli_fetch_assoc($result);
 }
}


if(isset($_POST['Submit4B'])) 
{
 //if($criteria2 == "description") {
   $sql28 = "SELECT * from taxcategory ORDER by taxcategory  ASC " ;
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
        <option value="taxcategory">Tax Category</option>
        <option value="salary_range">Salary Range</option>
      </select>

      <input name="textsearch2" type="text" id="textsearch2" size="6" />
      <input name="btnSearch2" type="submit" id="btnSearch2" value="GO" />
      <input name="Submit4" type="submit" id="Submit4" value=" All" />
    </form></td>
    <td width="69%" align="left" valign="middle" bgcolor="#CCFFCC">&nbsp;&nbsp;<a href="add_deductions_rates.php">Add Deduction  Rates</a>  </td>
  </tr>
</table>
<center>
  <table width="99%" height="80" border="0" cellpadding="3" cellspacing="2" bordercolor="#99CCCC" align="center">
    <tr bgcolor="#000033">
      <td height="24" colspan="2" align="center" valign="middle" bgcolor="#6699CC" class="style85 style77 style68"><strong>Salary Range </strong></td>
      <td width="105" align="left" bgcolor="#6699CC" class="style85 style77 style68"><span class="style17 style11 style116 style93"><strong>Tax Category </strong></span></td>
      <td width="169" align="center" bgcolor="#6699CC" class="style68 style77 style85"><span class="style85 style77 style68"><span class="style17 style11 style116 style93"><strong>Withholding Tax </strong></span></span></td>
      <td width="143" align="center" bgcolor="#6699CC" class="style85 style77 style68"><span class="style17 style11 style116 style93"><strong>SSS Contribution </strong></span></td>
      <td width="157" align="center" bgcolor="#6699CC" class="style68 style77 style85"><span class="style18">PhilHealth Contribution </span></td>
      <td width="148" align="center" bgcolor="#6699CC" class="style68 style77 style85"><span class="style85 style77 style68"><span class="style18">PagIbig Contribution </span></span></td>
      <td width="68" align="center" bgcolor="#6699CC" class="style68 style77 style85 style11 style17">**</td>
    </tr>
    <tr bgcolor="#000033">
      <td width="162" height="24" align="center" bgcolor="#6699CC" class="style18">From</td>
      <td width="193" align="center" bgcolor="#6699CC" class="style18">Up to </td>
      <td align="left" bgcolor="#6699CC" class="style85 style77 style68">&nbsp;</td>
      <td align="center" bgcolor="#6699CC" class="style68 style77 style85">&nbsp;</td>
      <td align="center" bgcolor="#6699CC" class="style85 style77 style68">&nbsp;</td>
      <td align="center" bgcolor="#6699CC" class="style68 style77 style85">&nbsp;</td>
      <td align="center" bgcolor="#6699CC" class="style68 style77 style85">&nbsp;</td>
      <td align="center" bgcolor="#6699CC" class="style68 style77 style85 style11 style17">&nbsp;</td>
    </tr>

  <?php
	$late = 0;
	$ut = 0;

	//	while($row2 = mysqli_fetch_assoc($result)) {
    while ($row2 = mysqli_fetch_array($result)) {  
	$salary = $row2['salary_range'] + 1200;
		

	// --- alternating row colors
	if(@$color == "#EBEAE9") {
     	@$color = "#DEEFE9";
		} else {
		@$color = "#EBEAE9";
  		}			
		
?>

    <tr bordercolor="#996633" bgcolor="#FFCCFF" class="style68">
      <td height="24" valign="top" bgcolor="<?php echo $color; ?>" class="style18"><span class="style114 style11 style117"><?php echo $row2['salary_range']; ?></span></td>
      <td height="24" valign="top" bgcolor="<?php echo $color; ?>" class="style18"><span class="style114 style11 style117"><?php echo $salary; ?></span></td>
      <td align="left" valign="top" bgcolor="<?php echo $color; ?>" class="style18"><span class="style114 style11 style117"><?php echo $row2['taxcategory']; ?></span></td>
      <td align="center" valign="top" bgcolor="<?php echo $color; ?>" class="style18"><span class="style114 style11 style117"><?php echo $row2['wtax']; ?></span></td>
      <td align="center" valign="top" bgcolor="<?php echo $color; ?>" class="style18"><span class="style114 style11 style117"><?php echo $row2['sss']; ?></span></td>
      <td align="center" valign="top" bgcolor="<?php echo $color; ?>" class="style18"><span class="style114 style117 style11"><?php echo $row2['philhealth']; ?></span></td>
      <td align="center" valign="top" bgcolor="<?php echo $color; ?>" class="style118"><span class="style114 "><?php echo $row2['pagibig']; ?></span></span></td>
      <td align="center" valign="top" bgcolor="<?php echo $color; ?>" class="style18"><a href="update_deductions.php?id=<?php echo $row2['id']; ?>" class="style119"><img src="buttons/001_18.png" width="16" height="16" border="0" onClick="return confirm('Do you really want to update this item?');"></a></td>
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
	<li class="prev"><a href="timelogs.php?page=<?php echo $page_number-1 ?>">Prev</a></li>
	<?php endif; ?>

	<?php if ($page_number > 3): ?>
	<li class="start"><a href="timelogs.php?page=1">1</a></li>
	<li class="dots">...</li>
	<?php endif; ?>

	<?php if ($page_number-2 > 0): ?><li class="page"><a href="timelogs.php?page=<?php echo $page_number-2 ?>"><?php echo $page_number-2 ?></a></li><?php endif; ?>
	<?php if ($page_number-1 > 0): ?><li class="page"><a href="timelogs.php?page=<?php echo $page_number-1 ?>"><?php echo $page_number-1 ?></a></li><?php endif; ?>

	<li class="currentpage"><a href="timelogs.php?page=<?php echo $page_number ?>"><?php echo $page_number ?></a></li>

	<?php if ($page_number+1 < ceil($total_rows / $limit)+1): ?><li class="page"><a href="timelogs.php?page=<?php echo $page_number+1 ?>"><?php echo $page_number+1 ?></a></li><?php endif; ?>
	<?php if ($page_number+2 < ceil($total_rows / $limit)+1): ?><li class="page"><a href="timelogs.php?page=<?php echo $page_number+2 ?>"><?php echo $page_number+2 ?></a></li><?php endif; ?>

	<?php if ($page_number < ceil($total_rows / $limit)-2): ?>
	<li class="dots">...</li>
	<li class="end"><a href="timelogs.php?page=<?php echo ceil($total_rows / $limit) ?>"><?php echo ceil($total_rows / $limit) ?></a></li>
	<?php endif; ?>

	<?php if ($page_number < ceil($total_rows / $limit)): ?>
	<li class="next"><a href="timelogs.php?page=<?php echo $page_number+1 ?>">Next</a></li>
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
</p>

</center>
</body>
</html>


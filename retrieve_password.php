<?php
@session_start();
include("webconnect.php");

$username=$_POST['textfield'];
$birthdate=$_POST['b_month'] ."/". $_POST['b_day'] ."/". $_POST['b_year']; 
$question=$_POST['question'];
$answer=$_POST['answer'];

if($username=="") {
?>
<SCRIPT language=JavaScript>
<!--
    alert("Please enter Username!");
//  End -->
</script>			 

<SCRIPT language=JavaScript>
<!--
 history.back()
//  End -->
</script>

<?php
}

$results6 = mysql_query(" SELECT * FROM users WHERE username='$username' and birthday='$birthdate' and squestion='$question' and answer='$answer' ") or die('Error, query failed. ' . mysql_error()); 
$row6 = mysql_fetch_array( $results6);
$count6=mysql_num_rows($results6);
if($count6==0) {
?>
<SCRIPT language=JavaScript>
<!--
    alert("No Record found for that Username and Password. Or, all data are incorrect.  Please try again!  ");
//  End -->
</script>			 

<SCRIPT language=JavaScript>
<!--
 history.back()
//  End -->
</script>

<?php 
} else {


	$_SESSION['username']=$row6['username'];
	$_SESSION['user']=$row6['vlevel'];
	$_SESSION['password']=$row6['password'];

?>
<SCRIPT language=JavaScript>
<!--
 location.href="inc/acct_info2.php";
//  End -->
</script>
<?php
}
?>

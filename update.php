<?php
@session_start();

include("webconnect.php");

$id = $_REQUEST['id'];

$sql1 = " SELECT * from timelogs where id = '$id' ";
$result = mysqli_query($conn, $sql1) ; 
$count = mysqli_num_rows($result);

if($count>0) {
$row2 = mysqli_fetch_assoc($result);
 if( $row2['timein'] == "" ) {
	$sql2 = "UPDATE timelogs SET status = 'Valid' WHERE id = '$id' ";
	$result2 = mysqli_query($conn, $sql2) ; 
  }
 if( $row2['timeout'] == "" ) {
	$sql3 = "UPDATE timelogs SET status = 'Valid' WHERE id = '$id' ";
	$result3 = mysqli_query($conn, $sql3) ; 
  }

 if( ($row2['timeout'] == "" ) && ($row2['timein'] == "" ) ){
	$sql3 = "UPDATE timelogs SET status = 'Absent' WHERE id = '$id' ";
	$result3 = mysqli_query($conn, $sql3) ; 
  }

?>

<SCRIPT Language=Javascript>
<!--
	location.href="timelogs.php";
// End -->
</SCRIPT>

<?php
}
?>
<?php

@session_start();
include("webconnect.php");


$username=$_POST['textfield'];
$password=$_POST['textfield2'];


$sql3 = " SELECT * FROM users WHERE username='$username' AND password='$password' " ; 
$results3 = mysqli_query($conn, $sql3);
@$row3 = mysqli_fetch_assoc($results3);
$count3=mysqli_num_rows($results3);

if($count3==0) {
?>
<SCRIPT language=JavaScript>
<!--
    alert("No Record found for that Username and Password.  Please try again!  ");
//  End -->
</script>			 


<SCRIPT language=JavaScript>
<!--
 location.href="changepassword.php";
//  End -->
</script>


<?php 
} else {

	$_SESSION['username']=$row3['username'];
	$_SESSION['user']=$row3['accesslevel'];
?>

<SCRIPT language=JavaScript>
<!--
 location.href="inc/acct_info1.php";
//  End -->

</script>

<?php
}
?>


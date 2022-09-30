<link rel="icon" type="image/png" href="inc/pcaaticon.ico">

<?php
include("webconnect.php");

$query = "select id,email,qr_code,lname,fname from employees where qr_code <> '' order by lname ASC";
$result = mysqli_query($conn, $query); 

include("mainmenu.php");
$columncount = 0;
echo '<center>';
echo '<br>';
$dynamicList = '<table width="920" border="0" cellpadding="6"><tr>';
while( $row3 = mysqli_fetch_array( $result)) 
{
  $emp_id = $row3['id'];
  $email = $row3['email'];

  $emailadd = $row3['email'];
  $sql28 = "select * from employees where email = '$emailadd' " ;
  $resultA = mysqli_query($conn, $sql28);
  $row2d = mysqli_fetch_assoc($resultA);
 
  $fname = $row2d['fname'];
  $lname = $row2d['lname'];

  if($row3['qr_code'] !='') {
  $photo = $row3['qr_code'];
  } else {
  $photo = "no_qr.jpg";
  }
  $dynamicList .= '<td width="323" align="center" valign="top"> <a href="view_single_qr.php?id=' . $email . '">
      <img src="qr_codes/' . $photo . '" alt="' . $email . '" width="178" height="178" border="0">
    </a>'.$lname.', '.$fname.' <br><br>&nbsp;</td>';
if($columncount == 3)
{
 $dynamicList .= '</tr><tr>';
 $columncount = 0;
}
 else
{
  $columncount++; 
 }
}

echo '<br><br><br>';
$dynamicList .= '</tr></table>';
echo $dynamicList;
?>

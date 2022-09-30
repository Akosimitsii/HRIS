<link rel="icon" type="image/png" href="inc/pcaaticon.ico">

<?php
include("webconnect.php");

$query = "select id,photo,lname,fname, mname,email from employees  order by lname ASC";
$result = mysqli_query($conn, $query); 
include("mainmenu.php");
$columncount = 0;
echo '<center>';
$dynamicList = '<table width="92%" border="0" cellpadding="6"><tr>';
while( $row3 = mysqli_fetch_array( $result)) 
{
  $emp_id = $row3['email'];
  $fname = $row3['fname'];
  $mname = $row3['mname'];
  $lname = $row3['lname'];
  if($row3['photo'] !='') {
  $photo = $row3['photo'];
  } else {
  $photo = "blank-profile.jpg";
  }

  $dynamicList .= '<td width="333" align="center"> <a href="view_single_qr.php?id=' . $emp_id . '">
      <img src="avatar/' . $photo . '" alt="' . $lname . '" width="250" height="250" border="0">
    </a>'.$lname.', '.$fname.' <br><br> </td>';
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


$dynamicList .= '</tr></table>';

echo $dynamicList;
?>

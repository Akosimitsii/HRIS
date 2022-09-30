<?php
//Simple Product INITIALIZE VARIABLES display colsToDisplay
include("webconnect.php");

$query = "select photo,lname,fname from employees where photo <> '' order by lname ASC";
$result = mysqli_query($conn, $query); 
$maxcols = 5;
$i = 0;

//Open the table and its first row
include("mainmenu.php");
echo "<center>";
echo "<table cellspacing=10 cellpadding=5>";
echo "<tr>";
while ($image = mysqli_fetch_assoc($result)) {

    if ($i == $maxcols) {
        $i = 0;
        echo "</tr><tr>";
    }

    echo "<td><img src = 'avatar/". $image['photo']. "'width=250 height=250\"   /><br> ".$image['lname'].", ".$image['fname']." <br><br></td>" ;

    $i++;

}

//Add empty <td>'s to even up the amount of cells in a row:
while ($i <= $maxcols) {
    echo "<td>&nbsp;</td>";
    $i++;
}

//Close the table row and the table
echo "</tr>";
echo "</table>";

?>
<?php 
// == TO ENABLE SESSION VARIABLES IN HOST DOMAIN
//php_flag output_buffering on;


//$servername = "localhost";
//$database = "id14219470_pcaatelib";
//$username = "id14219470_pcaatit";
//$password = "?Y7P<vNy/ox^SdQ<";


//$servername = "localhost";
//$database = "id17659915_dtr";
//$username = "id17659915_employees";
//$password = "Pcaattimelogs1234!";


$servername = "localhost";
$database = "pcaat_dtr";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>

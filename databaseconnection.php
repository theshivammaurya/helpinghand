<?php
session_start();
?>
<?php
// Create connection
$con=mysqli_connect("localhost:3307","root","","online_charity");

// Check connection,
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
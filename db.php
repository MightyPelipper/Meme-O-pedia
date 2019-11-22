<?php
//Host, username, password, and database 
$con = mysqli_connect("localhost","root","admin","register");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
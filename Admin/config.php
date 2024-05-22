<?php
// $con = mysqli_connect("localhost","u221388083_ranjana","ranjanaHarshit@123","u221388083_ranjana");
$con = mysqli_connect("localhost","root","","u221388083_ranjana");

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}

?> 
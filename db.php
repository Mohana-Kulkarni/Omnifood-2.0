<?php 
  $host = "localhost:3307";
  $user = "";
  $password = "";
  $db_name = "omnifood_db"; 
  $con = mysqli_connect($host, $user, $password, $db_name);
  if(!$con) {
    die("Connection Failed");
  }

?>

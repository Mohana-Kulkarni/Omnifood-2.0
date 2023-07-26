<?php 
  $host = "localhost:3306";
  $user = "";
  $password = "";
  $db_name = "omnifood_db"; 
  $con = mysqli_connect($host, $user, $password, $db_name);
  if(!$con) {
    die("Connection Failed");
  }

?>

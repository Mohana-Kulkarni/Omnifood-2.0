<?php 

function get_user_data($con, $uName, $eMail) {
  $uName = mysqli_real_escape_string($con, $uName);
  $query = "SELECT username, email FROM users where username = ".$uName.";";

  $res = mysqli_query($con, $query);
  if(!$res) {
    die('Query Failed'.mysqli_error());
  }
  echo $res;
}

?>

<?php 

function get_user_data($con, $uName, $eMail) {
  $uName = mysqli_real_escape_string($con, $uName);
  $query = "SELECT username, email FROM users WHERE username = ?";
  $stmt = mysqli_prepare($con, $query);
  mysqli_stmt_bind_param($stmt, "s", $uName);

  if(!mysqli_stmt_execute($stmt)) {
    die('Query Failed'.mysqli_error());
  }
  $res = mysqli_stmt_get_result($stmt);
  return $res;
}

?>

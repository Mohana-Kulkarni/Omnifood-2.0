<?php 

function get_user_data($con, $uName) {
  $uName = mysqli_real_escape_string($con, $uName);
  $query = "SELECT username FROM users WHERE username = ?";
  $stmt = mysqli_prepare($con, $query);
  mysqli_stmt_bind_param($stmt, "s", $uName);

  if(!mysqli_stmt_execute($stmt)) {
    die('Query Failed'.mysqli_error());
  }
  $res = mysqli_stmt_get_result($stmt);
  return $res;
}

function get_email_data($con, $eMail) {
  $uName = mysqli_real_escape_string($con, $eMail);
  $query = "SELECT email FROM users WHERE email = ?";
  $stmt = mysqli_prepare($con, $query);
  mysqli_stmt_bind_param($stmt, "s", $eMail);

  if(!mysqli_stmt_execute($stmt)) {
    die('Query Failed'.mysqli_error());
  }
  $res = mysqli_stmt_get_result($stmt);
  return $res;
}

function insert_user_data($con, $username, $email, $password) {
  $query = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
  $stmt = mysqli_prepare($con, $query);
  mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);

  if(!mysqli_stmt_execute($stmt)) {
    die('Query Failed'.mysqli_error());
  }
}

?>

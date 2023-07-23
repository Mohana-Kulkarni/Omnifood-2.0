
<?php 
  function isEmpty($username, $email, $password) {
    if($username && $email && $password) {
      return false;
    }
    return true;
  }

  function isValidEmail($email) {
    if(str_contains($email, ".com")) {
      return true;
    } 
    return false;
  }

  function isValidUser($con, $username, $email) {
    $users = array();
    $res = get_user_data($con, $username, $email);
    foreach ($res as $row) {
      array_push($users, $row);
    }
    if (count($users) == 0) {
      return true;
    }
    return false;
  }

  


?>
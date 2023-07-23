
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

  // function isValidUser($con, $username) {
  //   $users = array();
  //   $res = get_user_data($con, $username);
  //   foreach ($res as $row) {
  //     array_push($users, $row);
  //   }
  //   if (count($users) == 0) {
  //     return true;
  //   }
  //   return false;
  // }

  function isEmailTaken($con, $email) {
    $users = array();
    $res = get_email_data($con, $email);
    foreach ($res as $row) {
      array_push($users, $row);
    }
    if (count($users) == 0) {
      return true;
    }
    return false;
  }

  function insertUserData($con, $username, $email, $password) {
    $hash = "$2y$10";
    $salt = "ilikecrazystrings";
    $hash_salt = $hash.$salt.$password;
    $password = hash("sha256", $hash_salt);

    insert_user_data($con, $username, $email, $password);
  }

?>
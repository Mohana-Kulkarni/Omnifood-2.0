
<?php 
  function isEmptySignup($username, $email, $password) {
    if($username && $email && $password) {
      return false;
    }
    return true;
  }

  function isEmptyLogin($username, $password) {
    if($username && $password) {
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

  function isValidUser($con, $username) {
    $users = array();
    $res = get_user_data($con, $username);
    foreach ($res as $row) {
      array_push($users, $row);
    }
    if (count($users) == 0) {
      return false;
    }
    return true;
  }

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
    // $hash = "$2y$10";
    $salt = "ilikecrazystrings";
    $hash_salt = $salt.$password;
    $password = hash("sha256", $hash_salt);

    insert_user_data($con, $username, $email, $password);
  }

  function isAccountValid($con, $username, $password) {
    // $hash = "$2y$10";
    $salt = "ilikecrazystrings";
    $hash_salt = $salt.$password;
    $password = hash("sha256", $hash_salt);
    $expectedPassword = getPassword($con, $username);
    $passwords = array();
    foreach ($expectedPassword as $row) {
      array_push($passwords, $row);
    }

    if ($password === $passwords[0]) {
      return true;
    }
    return false;
  }  

?>
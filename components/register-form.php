<?php 
      include "db.php";
      include "models/user_model.php"; 
      include"controllers/validate_user.php"; 
?>

<?php

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['user-name'];
    $email = $_POST['email-id'];
    $password = $_POST['pass-word'];

    if(!isEmpty($username, $email, $password)) {
      echo "YES";
    }
    if(isValidEmail($email)) {
      echo "True";
    } else {
      echo "False";
    }

    if(isValidUser($con, $username, $email)) {
      echo "Yes";
    }else {
      echo "No";
    }
    $hash = "$2y$10";
    $salt = "ilikecrazystrings";

    $hash_salt = $hash.$salt.$password;
    $password = hash("sha256", $hash_salt);


  }

?>


<div class="form-container">
  <div class="login">
    <div class="login-text-box">
      <h1 class="heading-secondary">Register</h1>
    </div>
    <form class="login-form" action="signup.php" method="post">
      <div class="input-fields">
        <div>
          <label for="user-name">Username</label>
          <input id="user-name" type="text" placeholder="Your Name" name="user-name">
        </div>
        <div>
          <label for="email">Email</label>
          <input id="email-id" type="email" placeholder="me@abc.com" name="email-id">
        </div>
        <div>
          <label for="pass-word">Password</label>
          <input id="pass-word" type="password" placeholder="Your Password" name="pass-word">
        </div>
      </div>
      <button class="btn login-btn">Signup</button>
    </form>
  
  </div>
</div>
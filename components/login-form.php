<?php 
      include "db.php";
      include "models/user_model.php"; 
      include "controllers/validate_user.php"; 
?>

<?php 
  $flag = false;
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['user-name'];
    $password = $_POST['pass-word'];
     
    if(!isEmptyLogin($username, $password) && isValidUser($con, $username)) {
      if (isAccountValid($con, $username, $password)) {
        //Create session
        include "config/session.php";
        

        $_SESSION['username'] = $username;
        $_SESSION['cart'] = array();
        
        // echo "Create Session";
        header("Location: ./index.php"); 
      } else {
          $flag = true;
      }
    } else {
        $flag = true;
    }
  }
?>

<div class="form-container">
  <div class="login">
    <div class="login-text-box">
      <h1 class="heading-secondary">Login</h1>
    </div>
    <div class="error-msg">
      <?php 
        if ($flag) {
          ?>
          <p>Enter valid data</p>
          <?php
        }
      ?>
    </div>
    <form class="login-form" action="login.php" method="post">
      <div class="input-fields">
        <div>
          <label for="user-name">Username</label>
          <input id="user-name" type="text" placeholder="Username" name="user-name">
        </div>
        <div>
          <label for="pass-word">Password</label>
          <input id="pass-word" type="password" placeholder="Password" name="pass-word">
        </div>
      </div>
      <button class="btn login-btn">Login</button>
      <div class="signup-div-link">
        <a class="signup-link" href="signup.php">Not a member yet ? Signup</a>
      </div>
    </form>
  </div>
</div>
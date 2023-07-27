<?php 
      include "db.php";
      include "models/user_model.php"; 
      include "controllers/validate_user.php"; 
?>

<?php 
  $flag = false;
  $errors = array();

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['user-name'];
    $password = $_POST['pass-word'];

    if (isEmptyLogin($username, $password)) {
      $flag = true;
      array_push($errors, "Fill the empty fields");
    } else {
      if (!isValidUser($con, $username)) {
        $flag = true;
        array_push($errors, "Enter a valid Username");
      } else {
        if (!isAccountValid($con, $username, $password)) {
          array_push($errors, "Incorrect Password");
          $flag = true;
        } else {
          //Create session
          include "config/session.php";
          
          $_SESSION['username'] = $username;
          $_SESSION['cart'] = array();
          $_SESSION['qty'] = array();
        
          
          header("Location: ./index.php"); 
        }
      }
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
          foreach ($errors as $error) {
            ?>
            <p><?php echo $error?></p>
            <?php
          }
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
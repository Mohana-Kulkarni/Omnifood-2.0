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
    $email = $_POST['email-id'];
    $password = $_POST['pass-word'];

    if (isEmptySignup($username, $email, $password)) {
      $flag = true;
      array_push($errors, "Fill the empty fields");
    } else {
      if (!isValidEmail($email)) {
        $flag = true;
        array_push($errors, "Enter valid email");
      }
  
      if (!isEmailTaken($con, $email)) {
        $flag = true;
        array_push($errors, "Email already exists");
      }
    }

    if(!$flag) {
      insertUserData($con, $username, $email, $password);
      header("Location: ./login.php");
    }

    // print_r($errors);
  }
?>

<div class="form-container">
  <div class="login">
    <div class="login-text-box">
      <h1 class="heading-secondary">Register</h1>
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
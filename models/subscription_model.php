<?php 
  function get_subscription_details($con) {
    $query = "SELECT * FROM subscription"; 
    $res = mysqli_query($con, $query);
    if(!$res) {
      die('Query Failed'.mysqli_error());
    }
    return ($res);
  }

  function add_user_subscription($con, $user_id, $subscription_id) {
    $current_date = date("Y-m-d H:i:s");
    $end_date = date('Y-m-d', strtotime($current_date. ' + 1 months'));
    // $query = "INSERT INTO subscribed_users(user_id, subscription_id, start_date, end_date) values('$user_id', '$subscription_id', '$current_date', '$end_date')";
    
    $query = "INSERT INTO subscribed_users(user_id, subscription_id, start_date, end_date) values('$user_id', '$subscription_id', CURDATE(), DATE_ADD(CURDATE(), INTERVAL 1 MONTH))";
    $res = mysqli_query($con, $query);
    if(!$res) {
      die('Query Failed'.mysqli_error());
    }
    return ($res);
  }

  function get_user_id($con, $username) {
    $query = "SELECT id FROM users WHERE username = '$username'"; 
    $res = mysqli_query($con, $query);
    if(!$res) {
      die('Query Failed'.mysqli_error());
    }
    return ($res);
  }

?>
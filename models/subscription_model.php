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

  function get_subscription($con, $user_id) {
    $query = "SELECT subscription_id FROM subscribed_users WHERE user_id = '$user_id'"; 
    $res = mysqli_query($con, $query);
    if(!$res) {
      die('Query Failed'.mysqli_error());
    }
    return ($res);
  }

  function get_subscribed_user($con, $user_id) {
    $query = "SELECT user_id FROM subscribed_users WHERE user_id = '$user_id'"; 
    $res = mysqli_query($con, $query);
    if(!$res) {
      die('Query Failed'.mysqli_error());
    }
    return ($res);
  }

  function update_subscription($con, $user_id, $subscription_id) {
    $query = "UPDATE subscribed_users SET subscription_id = '$subscription_id' WHERE user_id = '$user_id'";
    $res = mysqli_query($con, $query);
    if(!$res) {
      die('Query Failed'.mysqli_error());
    }
  }

  function get_subscription_details_from_sub_id($con, $subscription_id) {
    $query = "SELECT * FROM subscription WHERE id = $subscription_id"; 
    $res = mysqli_query($con, $query);
    if(!$res) {
      die('Query Failed'.mysqli_error());
    }
    return ($res);
  }

?>
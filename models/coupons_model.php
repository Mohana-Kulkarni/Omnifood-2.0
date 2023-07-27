<?php 
    function get_user_coupons($con, $user_id) {
        $query = "SELECT subscription_id FROM subscribed_users WHERE user_id = $user_id";
        $res = mysqli_query($con, $query);
        if(!$res) {
          die('Query Failed'.mysqli_error());
        }
        return ($res);
    }

    function get_discount_details($con, $subscription_id) {
        $query = "SELECT discount FROM subscription WHERE id = $subscription_id";
        $res = mysqli_query($con, $query);
        if(!$res) {
          die('Query Failed'.mysqli_error());
        }
        return ($res);
    }
    
    function get_subscription_data_by_id($con, $subscription_id) {
      $query = "SELECT * FROM subscription WHERE id = $subscription_id";
      $res = mysqli_query($con, $query);
      if(!$res) {
        die('Query Failed'.mysqli_error());
      }
      return ($res);
  }
?>
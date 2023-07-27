<?php 

  function display_subcription_data($con) {
    $res = get_subscription_details($con);

    $data = array();

    while($row = mysqli_fetch_assoc($res)) {
      array_push($data, $row);
    }
    return $data;
  }

  function insert_subscription_details($con, $user_id, $subscription_id) {
    $res = add_user_subscription($con, $user_id, $subscription_id);
    
  }

  function get_user_details($con, $username) {
    $res = get_user_id($con, $username);
    while($row = mysqli_fetch_assoc($res)) {
      $id = $row['id'];
    }

    return $id;
    
  }

  function get_subscription_id($con, $username) {
    $id = get_user_details($con, $username);
    $res = get_subscription($con, $id);
    $subscription_id = 0;
    while($row = mysqli_fetch_assoc($res)) {
      $subscription_id = $row['subscription_id'];
    }

    return $subscription_id;
    
  }

  function get_subscribed_user_id($con, $user_id) {
    $res = get_subscribed_user($con, $user_id);
    
    if(mysqli_num_rows($res) == 0) {
      return 0;
    } 
    $row = mysqli_fetch_assoc($res);
    return $row['user_id'];
    
  }

  function check_subscription_exists($con, $username, $subscription_id) {
    $user_id = get_user_details($con, $username);
    $subscribed_user_id = get_subscribed_user_id($con, $user_id);
    if($subscribed_user_id > 0) {
      $subscribed_id = get_subscription_id($con, $username);
      if($subscribed_id != $subscription_id) {
        update_subscription($con, $user_id, $subscription_id);
      } 
    } else {
      insert_subscription_details($con, $user_id, $subscription_id);
    }
  }


?>

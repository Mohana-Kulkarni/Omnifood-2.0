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

?>

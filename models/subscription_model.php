<?php 
  function get_subscription_details($con) {
    $query = "SELECT * FROM subscription"; 
    $res = mysqli_query($con, $query);
    if(!$res) {
      die('Query Failed'.mysqli_error());
    }
    return ($res);
}


?>
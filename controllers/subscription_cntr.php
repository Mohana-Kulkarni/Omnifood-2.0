<?php 

  function display_subcription_data($con) {
    $res = get_subscription_details($con);

    $data = array();

    while($row = mysqli_fetch_assoc($res)) {
      array_push($data, $row);
    }
    return $data;
  }



?>

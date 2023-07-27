<?php 

  include "../config/session.php";

  if(isset($_SESSION['username'])) {
    unset($_SESSION['username']);
    unset($_SESSION['cart']);
    unset($_SESSION['qty']);
    unset($_SESSION['subscription_id']);
    
    $my_obj = new stdClass();
    $my_obj->result = "Logout";
    echo json_encode($my_obj);
  } else {
    $my_obj = new stdClass();
    $my_obj->result = "Login";
    echo json_encode($my_obj);
  }
?>
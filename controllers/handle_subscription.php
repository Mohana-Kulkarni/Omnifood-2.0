<?php 

  include "../db.php";
  include "../models/subscription_model.php";
  include "../controllers/subscription_cntr.php";
  include "../config/session.php";


  if(isset($_SESSION['cart'])) {
    
    $subscription_id = $_GET['id']; 

    $user_id = get_user_details($con, $_SESSION['username']);
    insert_subscription_details($con , $user_id, $subscription_id);    
    $my_obj = new stdClass();
    $my_obj->result = "ADD";
    echo json_encode($my_obj); 
  } else {
    $my_obj = new stdClass();
    $my_obj->result = "LOGIN";
    echo json_encode($my_obj); 
  }

?>

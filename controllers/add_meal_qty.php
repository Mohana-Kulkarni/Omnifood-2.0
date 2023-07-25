<?php 

  include "../db.php";
  include "../models/meal_model.php";
  include "../controllers/cart_cntr.php";
  include "../config/session.php";

  $id = $_GET['id'];
  // echo in_array($id, $_SESSION['qty']);

  $_SESSION['qty'][$id] += 1; 

  $total_price = calculate_total_price($con, $_SESSION['cart'], $_SESSION['qty']);

  $my_obj = new stdClass();
  $my_obj->result = "SUCCESS";
  $my_obj->qty = $_SESSION['qty'][$id];
  $my_obj->isEmpty = false;
  $my_obj->price = $total_price;
  echo json_encode($my_obj);
   

?>

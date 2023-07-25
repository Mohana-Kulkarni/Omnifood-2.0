<?php 
  include "../db.php";
  include "../models/meal_model.php";
  include "../controllers/cart_cntr.php";
  include "../config/session.php";

  $id = $_GET['id'];
  if($_SESSION['qty'][$id] !== 1) {
    $_SESSION['qty'][$id] -= 1; 

    $total_price = calculate_total_price($con, $_SESSION['cart'], $_SESSION['qty']);

    $my_obj = new stdClass();
    $my_obj->result = "SUCCESS"; 
    $my_obj->qty = $_SESSION['qty'][$id];
    $my_obj->isEmpty = false;
    $my_obj->price = $total_price;

    echo json_encode($my_obj);

  } else {
    unset($_SESSION['cart'][$id]);
    unset($_SESSION['qty'][$id]);
    
    if(count($_SESSION['cart']) == 0) {

      $my_obj = new stdClass();
      $my_obj->result = "FAILURE"; 
      $my_obj->qty = 0;
      $my_obj->isEmpty = true;
      $my_obj->price = 0;

      echo json_encode($my_obj);

    } else {
      $total_price = calculate_total_price($con, $_SESSION['cart'], $_SESSION['qty']);
      
      $my_obj = new stdClass();
      $my_obj->result = "FAILURE"; 
      $my_obj->qty = 0;
      $my_obj->isEmpty = false;
      $my_obj->price = $total_price;

      echo json_encode($my_obj);  

    }
    //array_pop($_SESSION['cart'], $id);
  }
?>

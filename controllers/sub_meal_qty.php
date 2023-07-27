<?php 
  include "../db.php";
  include "../models/meal_model.php";
  include "../models/coupons_model.php";
  include "../controllers/cart_cntr.php";
  include "../controllers/coupons_cntr.php";
  include "../config/session.php";

  $id = $_GET['id'];
  if($_SESSION['qty'][$id] !== 1) {
    $_SESSION['qty'][$id] -= 1; 

    $price = calculate_total_price($con, $_SESSION['cart'], $_SESSION['qty']);

    $discount = 0;
    if (isset($_SESSION['coupon-id'])) {
      $discount = get_discounts($con, $_SESSION['coupon-id']);
    }

    $total_price = $price - ($price * $discount) / 100;

    $my_obj = new stdClass();
    $my_obj->result = "SUCCESS"; 
    $my_obj->qty = $_SESSION['qty'][$id];
    $my_obj->isEmpty = false;
    $my_obj->total_price = $total_price;

    echo json_encode($my_obj);

  } else {
    unset($_SESSION['cart'][$id]);
    unset($_SESSION['qty'][$id]);
    
    if(count($_SESSION['cart']) == 0) {

      unset($_SESSION['coupon-id']);

      $my_obj = new stdClass();
      $my_obj->result = "FAILURE"; 
      $my_obj->qty = 0;
      $my_obj->isEmpty = true;
      $my_obj->price = 0;

      echo json_encode($my_obj);

    } else {
      $price = calculate_total_price($con, $_SESSION['cart'], $_SESSION['qty']);

      $discount = 0;
      if (isset($_SESSION['coupon-id'])) {
        $discount = get_discounts($con, $_SESSION['coupon-id']);
      }

      $total_price = $price - ($price * $discount) / 100;
      
      $my_obj = new stdClass();
      $my_obj->result = "FAILURE"; 
      $my_obj->qty = 0;
      $my_obj->isEmpty = false;
      $my_obj->total_price = $total_price;

      echo json_encode($my_obj);  

    }
    //array_pop($_SESSION['cart'], $id);
  }
?>

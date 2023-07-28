<?php 

  include "../db.php";
  include "../models/meal_model.php";
  include "../models/coupons_model.php";
  include "../controllers/cart_cntr.php";
  include "../controllers/coupons_cntr.php";
  include "../config/session.php";

  $id = $_GET['id'];
  // echo in_array($id, $_SESSION['qty']);

  $_SESSION['qty'][$id] += 1; 

  $price = calculate_total_price($con, $_SESSION['cart'], $_SESSION['qty']);
  $discount = 0;
  $max_limit = 0;
  if (isset($_SESSION['coupon-id'])) {
    $discount = get_discounts($con, $_SESSION['coupon-id']);
    $max_limit = discount_max_limit($con, $_SESSION['coupon-id']);
  }

  $discounted_amount = ($price * $discount)/100;
  if ($discounted_amount > $max_limit) {
    $discounted_amount = $max_limit;
  }

  $total_price = $price - $discounted_amount;

  $my_obj = new stdClass();
  $my_obj->result = "SUCCESS";
  $my_obj->qty = $_SESSION['qty'][$id];
  $my_obj->isEmpty = false;
  $my_obj->total_price = $total_price;
  echo json_encode($my_obj);

?>

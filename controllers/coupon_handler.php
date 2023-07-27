<?php 
    include "../db.php";
    include "../models/meal_model.php";
    include "../models/coupons_model.php";
    include "../controllers/cart_cntr.php";
    include "../controllers/coupons_cntr.php";
    include "../config/session.php";
  
    $id = $_GET['id'];
    // echo in_array($id, $_SESSION['qty']);

    $_SESSION['coupon-id'] = $id;
  
    $total_price = calculate_total_price($con, $_SESSION['cart'], $_SESSION['qty']);
    $discount = get_discounts($con, $id);
    $discounted_price = $total_price - ($total_price * $discount)/100;
  
    $my_obj = new stdClass();
    $my_obj->result = "SUCCESS";
    $my_obj->discounted_price = $discounted_price;
    $my_obj->total_price = $total_price;
    echo json_encode($my_obj);
?>
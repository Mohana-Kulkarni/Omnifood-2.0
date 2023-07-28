<?php 
    include "../db.php";
    include "../models/meal_model.php";
    include "../models/coupons_model.php";
    include "../models/subscription_model.php";
    include "../controllers/cart_cntr.php";
    include "../controllers/coupons_cntr.php";
    include "../config/session.php";
  
    $id = $_GET['id'];
    // echo in_array($id, $_SESSION['qty']);

    $_SESSION['coupon-id'] = $id;

    $sub_data = subscription_data_by_sub_id($con, $_SESSION['coupon-id']);
    $coupon_name = strtoupper($sub_data['type']) . $sub_data['discount'];
  
    $total_price = calculate_total_price($con, $_SESSION['cart'], $_SESSION['qty']);
    $discount = get_discounts($con, $id);

    $max_limit = discount_max_limit($con, $_SESSION['coupon-id']);
    $discounted_amount = ($total_price * $discount)/100;
    if ($discounted_amount > $max_limit) {
      $discounted_amount = $max_limit;
    }
    $discounted_price = $total_price - $discounted_amount;
  
    $my_obj = new stdClass();
    $my_obj->result = "SUCCESS";
    $my_obj->coupon_name = $coupon_name;
    $my_obj->discounted_price = $discounted_price;
    $my_obj->total_price = $total_price;
    echo json_encode($my_obj);
?>
<?php 
    include "../db.php";
    include "../config/session.php";
    include "../models/meal_model.php";
    include "../controllers/cart_cntr.php";

    unset($_SESSION['coupon-id']);

    $total_price = calculate_total_price($con, $_SESSION['cart'], $_SESSION['qty']);

    $my_obj = new stdClass();
    $my_obj->result = "SUCCESS";
    $my_obj->total_price = $total_price;
    echo json_encode($my_obj);
?>
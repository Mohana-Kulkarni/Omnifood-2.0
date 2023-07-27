<?php
    include "../config/session.php";

    $_SESSION['cart'] = array();
    $_SESSION['qty'] = array();
    unset($_SESSION['coupon-id']);
    $my_obj = new stdClass();
    $my_obj->result = "Session Cleared";
    echo json_encode($my_obj); 
?>
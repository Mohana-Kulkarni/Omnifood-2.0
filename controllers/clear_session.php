<?php
    include "../config/session.php";

    $_SESSION['cart'] = array();
    $_SESSION['qty'] = array();
    $my_obj = new stdClass();
    $my_obj->result = "Session Cleared";
    echo json_encode($my_obj); 
?>
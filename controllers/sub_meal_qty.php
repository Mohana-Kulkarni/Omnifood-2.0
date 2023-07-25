<?php 
  include "../config/session.php";

  $id = $_GET['id'];
  if($_SESSION['qty'][$id] !== 1) {
    $_SESSION['qty'][$id] -= 1; 
    $my_obj = new stdClass();
    $my_obj->result = "SUCCESS"; 
    $my_obj->qty = $_SESSION['qty'][$id];
    $my_obj->isEmpty = false;
    echo json_encode($my_obj);
  } else {
    unset($_SESSION['cart'][$id]);
    unset($_SESSION['qty'][$id]);
    
    if(count($_SESSION['cart']) == 0) {
      $my_obj = new stdClass();
      $my_obj->result = "FAILURE"; 
      $my_obj->qty = 0;
      $my_obj->isEmpty = true;
      
      echo json_encode($my_obj);
    }  else {
      $my_obj = new stdClass();
      $my_obj->result = "FAILURE"; 
      $my_obj->qty = 0;
      $my_obj->isEmpty = false;
      
      echo json_encode($my_obj);
    }
    //array_pop($_SESSION['cart'], $id);
  }
?>

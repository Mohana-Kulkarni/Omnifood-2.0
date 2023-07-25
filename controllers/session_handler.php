<?php 
  include "../config/session.php";

  $id = $_GET['id'];
  if (isset($_SESSION['cart'])) {
    if(!in_array($id, $_SESSION['cart'])) {
      $_SESSION['cart'][$id] =  $id;
      $_SESSION['qty'][$id] = 1; 
      $my_obj = new stdClass();
      $my_obj->result = "SUCCESS"; 
      echo json_encode($my_obj);
    } else {
      $my_obj = new stdClass();
      $my_obj->result = "FAILURE"; 
      echo json_encode($my_obj);
  
      unset($_SESSION['cart'][$id]);
      unset($_SESSION['qty'][$id]);
      
      //array_pop($_SESSION['cart'], $id);
    }
  } else {
    $my_obj = new stdClass();
    $my_obj->result = "LOGIN"; 
    echo json_encode($my_obj);
  }

?> 
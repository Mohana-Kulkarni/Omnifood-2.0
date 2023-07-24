<?php 
  include "../config/session.php";

  $id = $_GET['id'];
  if(!in_array($id, $_SESSION['cart'])) {
    $_SESSION['cart'][$id] =  $id;
    $my_obj = new stdClass();
    $my_obj->result = "SUCCESS"; 
    echo json_encode($my_obj);
  } else {
    $my_obj = new stdClass();
    $my_obj->result = "FAILURE"; 
    echo json_encode($my_obj);

    unset($_SESSION['cart'][$id]);
    
    //array_pop($_SESSION['cart'], $id);
  }
  
?> 
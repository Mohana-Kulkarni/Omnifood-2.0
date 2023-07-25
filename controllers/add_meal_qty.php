<?php 
  include "../config/session.php";

  $id = $_GET['id'];
  // echo in_array($id, $_SESSION['qty']);

  $_SESSION['qty'][$id] += 1; 
  $my_obj = new stdClass();
  $my_obj->result = "SUCCESS";
  $my_obj->qty = $_SESSION['qty'][$id];
  $my_obj->isEmpty = false;
  echo json_encode($my_obj);
   

?>

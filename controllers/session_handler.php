<?php 
  include "../config/session.php";

  $id = $_GET['id'];
  if(!in_array($id, $_SESSION['cart'])) {
    $_SESSION['cart'][$id] =  $id;
    echo "SUCCESS";  
  } else {

    unset($_SESSION['cart'][$id]);

    //array_pop($_SESSION['cart'], $id);
  }
  
?> 
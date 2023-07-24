<?php 
  include "../config/session.php";

  array_push($_SESSION['cart'], $_GET['id']);
  echo "SUCCESS";  
?> 
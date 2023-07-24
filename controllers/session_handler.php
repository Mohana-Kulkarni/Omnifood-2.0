<?php 

// echo $_GET['id'];
  array_push($_SESSION['cart'], $_GET['id']);
  echo "SUCCESS";  
?> 
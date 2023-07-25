<?php 

  function get_cart_data($con, $id) {
    $query = "SELECT m.id, m.title, m.calories, m.nutriscore, m.ratings, m.votes, m.image_name, m.price, t.name "; 
    $query .= "FROM meal m JOIN meals_tags mt ON m.id = mt.meal_id ";
    $query .=  "JOIN tags t ON mt.tags_id = t.id ";
    $query .=  "WHERE m.id = '$id' ;";
    $res = mysqli_query($con, $query);
        if(!$res) {
          die('Query Failed'.mysqli_error());
        }
    return ($res);
  }

?>
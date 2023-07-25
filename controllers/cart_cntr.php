<?php 

  function get_added_meals($con, $addedMeals) {
    $res = array();
    foreach($addedMeals as $meal) {
      $row = get_cart_data($con, $meal);
      array_push($res, $row);
    }
    // print_r($res);


    $all_cards = array();
    $card_present = false;
    foreach($res as $meal) {
        while ($row = mysqli_fetch_assoc($meal)) {
          // print_r($row);
        $newId = $row['id'];
        if (count($all_cards) != 0) {
          foreach ($all_cards as &$card) {
            if ($card['id'] == $newId) {
  
              array_push($card['tags'], $row['name']);
              $card_present = true;
              break;
            }
          }
        }
        if (!$card_present) {
          $card_data = array();
          $card_data['id'] = $row['id'];
          $card_data['title'] = $row['title'];
          $card_data['calories'] = $row['calories'];
          $card_data['nutriscore'] = $row['nutriscore'];
          $card_data['ratings'] = $row['ratings'];
          $card_data['votes'] = $row['votes'];
          $card_data['image_name'] = $row['image_name'];
          $card_data['price'] = $row['price']; 
          $card_data['tags'] = array($row['name']); 
          array_push($all_cards, $card_data);
        }
        $card_present = false;
      }
    }
    
    // print_r($all_cards);
    return ($all_cards);

  }
  
?>

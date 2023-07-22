<?php

    function meal_data ($con) {

        $res = get_meal_data($con);

        $all_cards = array();
        $card_present = false;
        while ($row = mysqli_fetch_assoc($res)) {
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
        return ($all_cards);
    }

?>
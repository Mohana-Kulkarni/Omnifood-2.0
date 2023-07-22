<?php include "db.php"; ?>
<?php
  global $con;
  $query = "SELECT m.id, m.title, m.calories, m.nutriscore, m.ratings, m.votes, m.image_name, m.price, t.name "; 
  $query .= "FROM meal m JOIN meals_tags mt ON m.id = mt.meal_id ";
  $query .=  "JOIN tags t ON mt.tags_id = t.id ";
  $res = mysqli_query($con, $query);
  if(!$res) {
    die('Query Failed'.mysqli_error());
  }

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

  foreach ($all_cards as $row) {
    $title = $row['title'];
    $calories = $row['calories'];
    $nutriscore = $row['nutriscore'];
    $ratings = $row['ratings'];
    $votes = $row['votes'];
    $img_name = $row['image_name'];
    $price = $row['price'];
    $tags = $row['tags'];
    ?>

    <div class="meal">
      <div class="meal-img-div">
        <img src="img/meals/<?php echo $img_name; ?>.jpg" class="meal-img" alt="<?php echo $title; ?>" />
      </div>
      <div class="meal-content">
        <div class="meal-tags">
        <?php 
          foreach ($tags as $tag) {
            ?>
            <span class="tag tag--<?php echo strtolower($tag) ?>"><?php echo $tag ?></span>
            <?php
          }
        ?>
        </div>
          
        <div>
          <p class="meal-title"><?php echo $title; ?></p>
          <ul class="meal-attributes">
            <li class="meal-attribute">
              <ion-icon class="meal-icon" name="flame-outline"></ion-icon><span> <strong><?php echo $calories." "; ?></strong>Calories</span>
            </li>
            <li class="meal-attribute">
              <ion-icon class="meal-icon" name="restaurant-outline"></ion-icon><span> Nutriscore &reg;
                <strong><?php echo $nutriscore; ?></strong></span>
            </li>
            <li class="meal-attribute">
              <ion-icon class="meal-icon" name="star-outline"></ion-icon><span> <strong><?php echo $ratings; ?></strong> rating (<?php echo $votes; ?>)</span>
            </li>
          </ul>
          <div class="card-grid card-price-div">
            <strong>
              <span class="card-price" >&#8377;<?php echo $price ?></span>
            </strong>
            <button class="btn-round">+</button>
          </div>
        </div>
      </div>
    </div>
    <?php
  }
?>

  
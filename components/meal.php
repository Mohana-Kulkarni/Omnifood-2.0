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

  while($row = mysqli_fetch_assoc($res)) {
    $title = $row['title'];
    $calories = $row['calories'];
    $nutriscore = $row['nutriscore'];
    $ratings = $row['ratings'];
    $votes = $row['votes'];
    $img_name = $row['image_name'];
    $price = $row['price'];

    ?>

    <div class="meal">
    <img src="img/meals/<?php echo $img_name; ?>.jpg" class="meal-img" alt="<?php echo $title; ?>" />
    <div class="meal-content">
      <div class="meal-tags">
        <span class="tag tag--vegetarian"> Vegetarian</span>
      </div>
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
    </div>
  </div>


    <?php

  }
?>

  
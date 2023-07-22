<?php 
  include "db.php";
  include "models/meal_model.php";
  include "controllers/meal_cntr.php";
  
  $all_cards = meal_data($con);

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
            <button class="btn-round"><img class="add-icon" src="img/icons/add.svg" alt="add-icon" /></button>
          </div>
        </div>
      </div>
    </div>
    <?php
  }
?>

  
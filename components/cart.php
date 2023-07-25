<?php 
  include "db.php";  
  include "models/cart_model.php";
  include "models/meal_model.php";
  include "controllers/cart_cntr.php";
  
  $addedMeals = $_SESSION['cart'];
  $all_cards = get_added_meals($con, $addedMeals);

  $flag = true;
  if(count($all_cards) == 0) {
    $flag = false;
  } 

  ?>
  <div class="card-container">
    <?php
  foreach ($all_cards as $row) {
    $id = $row['id'];
    $title = $row['title'];
    $calories = $row['calories'];
    $nutriscore = $row['nutriscore'];
    $ratings = $row['ratings'];
    $votes = $row['votes'];
    $img_name = $row['image_name'];
    $price = $row['price'];
    $tags = $row['tags'];
    ?>

    <div id="card-<?php echo $id; ?>" class="cart-meal">
      <div class="cart-img-div">
        <img src="img/meals/<?php echo $img_name; ?>.jpg" class="cart-meal-img" alt="<?php echo $title; ?>" />
      </div>
      <div class="cart-content">
        
        <p class="cart-meal-title"><?php echo $title; ?></p>
        <div class="cart-meal-tags">
        <?php 
          foreach ($tags as $tag) {
            ?>
            <span class="tag tag--<?php echo strtolower($tag) ?>"><?php echo $tag ?></span>
            <?php
          }
        ?>
        </div>
        <div>
          <ul class="cart-meal-attributes">
            <div class="meal-sub-attributes">
                <li class="cart-meal-attribute">
                  <ion-icon class="meal-icon" name="flame-outline"></ion-icon><span> <strong><?php echo $calories." "; ?></strong>
                </li>
                <li class="cart-meal-attribute">
                  <ion-icon class="meal-icon" name="restaurant-outline"></ion-icon><span>
                    <strong><?php echo $nutriscore; ?></strong></span>
                </li>
                <li class="cart-meal-attribute">
                  <ion-icon class="meal-icon" name="star-outline"></ion-icon><span> <strong><?php echo $ratings; ?></strong> (<?php echo $votes; ?>)</span>
                </li>
            </div>
          </ul>
          <div class="card-grid cart-card-price-div">
            <strong>
              <span class="card-price" >&#8377;<?php echo $price ?></span>
            </strong>
            <div class="cart-btn-div">
                <button class="cart-btn-round-left" onclick="sub_qty(<?php echo $id; ?>)"><img class="subtract-icon" src="img/icons/subtract.svg" alt="subtract-icon" /></button>
                <li class="cart-btn-value"><p id="qty-<?php echo $id; ?>"><?php echo $_SESSION['qty'][$id]; ?></p></li>
                <button class="cart-btn-round-right" onclick="add_qty(<?php echo $id; ?>)"><img class="add-icon" src="img/icons/add.svg" alt="add-icon" /></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
  }
  ?>
  </div>
  <?php
?>

  
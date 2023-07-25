<?php 
  
  ?>
  <div class="cart-meal">
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
                <button class="cart-btn-round-left"><img class="subtract-icon" src="img/icons/subtract.svg" alt="subtract-icon" /></button>
                <li class="cart-btn-value">2</li>
                <button class="cart-btn-round-right"><img class="add-icon" src="img/icons/add.svg" alt="add-icon" /></button>
            </div>
          </div>
        </div>
      </div>
    </div>
?>
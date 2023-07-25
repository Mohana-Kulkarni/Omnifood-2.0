  <div class="checkout">
    <div class="meal-content">
      <div>
      <p class="checkout-title">Item(s) Added</p>
      <?php 

        $total_price = calculate_total_price($con, $_SESSION['cart'], $_SESSION['qty']);

        foreach ($all_cards as $row) {
          $id = $row['id'];
          $title = $row['title'];
          $price = $row['price'];
        ?>
        <div id="checkout-item-<?php echo $id; ?>" class="card-grid card-price-div checkout-item">
          <div class="cart-items">
            <p class="checkout-item-title"><?php echo $title; ?></p>
          </div>
          <span class="checkout-qty"><p id="checkout-<?php echo $id; ?>"><?php echo $_SESSION['qty'][$id]; ?></p></span>
        </div>
        <?php
        }
      ?>
      <hr class="line">
      <div class="checkout-price">
        <p class="checkout-price-title">Total:</p>
        <p id="total" class="checkout-price">&#8377;<?php echo $total_price; ?></p>
      </div>

      <button class="checkout-btn" onclick="on()"> Checkout </button>
      </div>
    </div>
  </div>
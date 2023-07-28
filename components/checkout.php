<?php 
  include "components/coupons_overlay.php"; 

  $sub_data = array();
  if (isset($_SESSION['coupon-id'])) {
    $sub_data = subscription_data_by_sub_id($con, $_SESSION['coupon-id']);
  }
  // print_r($sub_data);
?>
  
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
      <div class="checkout-coupons">
        <a onclick="on_coupons_overlay()" href="#" class="link">View all coupons &rarr;</a>
      </div>

      <div id="applied_coupon">
      <?php 
        if (isset($_SESSION['coupon-id'])) {
        ?>
          <div class="coupon_tag" onclick="cancel_coupon()">
            <p><?php echo strtoupper($sub_data['type']).$sub_data['discount'] ?></p>
            <p>X</p>
          </div>
        <?php
        }
      ?>
      </div>
      

      <hr class="line">

      <div class="checkout-price">
        <p class="checkout-price-title">Total:</p>
        <p id="total" class="checkout-price">&#8377;
          <?php
            if (isset($_SESSION['coupon-id'])) {
              $discount = get_discounts($con, $_SESSION['coupon-id']);
              $max_limit = discount_max_limit($con, $_SESSION['coupon-id']);
              $discounted_amount = ($total_price * $discount)/100;
              if ($discounted_amount > $max_limit) {
                $discounted_amount = $max_limit;
              }
              $discounted_price = $total_price - $discounted_amount;
              echo $discounted_price;
            } else {
              echo $total_price;
            } 
          ?>
        </p>
      </div>

      <button class="checkout-btn" onclick="on()"> Checkout </button>
      </div>
    </div>
  </div>
<?php 
  // include "models/coupons_model.php";
  include "models/subscription_model.php";
  include "controllers/subscription_cntr.php";

  $user_subscription = user_subscribed_type($con, $_SESSION['username']);
  $subscription_details = subscription_data_by_id($con, $user_subscription);

  ?>

<div  id="coupon-overlay" class="overlay" onclick="off_coupons_overlay()">
  <div class="coupon-overlay-card-container">
    <div class="cart-meal coupons-overlay">
      <div class="coupon-content">
        <?php 
          if ($user_subscription == 0) {
            ?>
            <p class="checkout-title">No Coupons Available</p>
            <img src="img/icons/discount_img.svg" alt="discount_img" class="discount_img">
            <?php
          } else {
              $id = $subscription_details['id'];
              $title = $subscription_details['type'];
              $discount = $subscription_details['discount'];
              $max_discount = $subscription_details['max_limit'];
              $expiry_date = date('y-m-d');
              ?>
              <p class="checkout-title" >Best Offers For You</p>
              <div class="coupons-container">
              <div class="coupon">
                <div class="coupon-header">
                  <div class="coupon-header-content">
                    <p class="coupon-discount"><?php echo $discount?>% OFF</p>
                    <p class="coupon-sub-data">MAX &#8377;<?php echo $max_discount; ?></p>
                  </div>
                  <div class="coupon-apply-container">
                    <button id="apply-coupon-btn" onclick="apply_discount(<?php echo $id; ?>)" class="coupon-apply"
                    <?php 
                      if (isset($_SESSION['coupon-id'])) {
                        echo "disabled";
                      }
                    ?>
                    >
                      <?php 
                        if (isset($_SESSION['coupon-id'])) {
                          echo "Applied";
                        } else {
                          echo "Apply";
                        }
                      ?>
                    </button>
                    <p class="coupon-sub-data">COUPON EXPIRES <?php echo $expiry_date; ?></p>
                  </div>
                </div>
                <div class="coupon-data">
                  <p class="coupon-title">SUBSCRIPTION: <?php echo strtoupper($title); ?></p>
                </div>
                <div class="circle1"></div>
                <div class="circle2"></div>
              </div>
              </div>
              <?php
          }
        ?>
      </div>
    </div>
  </div>
</div>
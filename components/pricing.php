<?php 

  include "db.php";
  include "controllers/subscription_cntr.php";
  include "models/subscription_model.php";
  include "subscription_overlay.php"; 

  $data = display_subcription_data($con);
  
  
  if(!isset($_SESSION['username'])) {
    $subscription_id = 0;
  } else  {
    $subscription_id = get_subscription_id($con, $_SESSION['username']);
  
  }
  

  // print_r($res);

?> 


<div class="container">
<span class="subheading center-text">Pricing</span>
<h2 class="heading-secondary center-text">
  Eating well without breaking the bank
</h2>
</div>

<div class="container grid grid--2-cols margin-bottom-md">
<div class="pricing-plans pricing-plan--starter">
  <header class="plan-header">
    <p class="plan-name"><?php echo ucfirst($data[0]['type']) ?></p>
    <p class="plan-price"><span>&#8377</span><?php echo $data[0]['cost']; ?></p>
    <p class="plan-text">per month. You will get <?php echo $data[0]['discount']; ?>% discount!</p>
  </header>
  <ul class="list">
    <li class="list-item">
      <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
      <span>1 meal per day</span>
    </li>
    <li class="list-item">
      <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
      <span>Order from 11am and 9pm </span>
    </li>
    <li class="list-item">
      <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
      <span>Delivery is free</span>
    </li>
    <li class="list-item">
      <ion-icon class="list-icon" name="close-outline"></ion-icon>
      <span>Get access to latest recipes</span>
    </li>
  </ul>
  <div class="plan-sign-up">
    <button id="starter-btn" class="margin-right-sm subscription-btn" onclick=
    <?php 
      if (isset($_SESSION['username'])) {
        echo "openOverlay('starter')";
      } else {
        echo "login_redirect()";
      }
    ?>
    ><?php
      if (isset($_SESSION['username'])) {
        if($subscription_id == 0) {
          echo "Get Subscription";
        } else if($subscription_id == 1){
          echo "Already Subscribed";
        } else {
          echo "Get Subscription";
        }
      } else {
        echo "Get Subscription";
      }
      ?>
    </button>
  </div>
</div>  

<div class="pricing-plans pricing-plan--complete">
  <header class="plan-header">
    <p class="plan-name"><?php echo ucfirst($data[1]['type']) ?></p>
    <p class="plan-price"><span>&#8377;</span><?php echo $data[1]['cost']; ?></p>
    <p class="plan-text">per month. You will get <?php echo $data[1]['discount']; ?>% discount! </p>
  </header>
  <ul class="list">
    <li class="list-item">
      <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
      <span> <strong>2 meals</strong> per day</span>
    </li>
    <li class="list-item">
      <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
      <span>Order <strong> 24/7</strong> </span>
    </li>
    <li class="list-item">
      <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
      <span>Delivery is free</span>
    </li>
    <li class="list-item">
      <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
      <span>Get access to latest recipes</span>
    </li>
  </ul>
  <div class="plan-sign-up">
    <button id="complete-btn" class="margin-right-sm subscription-btn" onclick=
    <?php 
      if (isset($_SESSION['username'])) {
        echo "openOverlay('complete')";
      } else {
        echo "login_redirect()";
      }
    ?>
    ><?php 
      if (isset($_SESSION['username'])) {
        if($subscription_id == 0) {
          echo "Get Subscription";
        } else if($subscription_id == 2){
          echo "Already Subscribed";
        } else {
          echo "Get Subscription";
        }
      } else {
        echo "Get Subscription";
      }
      ?>
    </button>
  </div>
</div>
</div>

<div class="container grid">
<aside class="plan-details">
  Prices include all applicable taxes. You can cancel at any time.
  Both plans include the following :
</aside>
</div>

<div class="container grid grid--4-cols">
<div class="feature">
  <ion-icon class="feature-icon" name="infinite-outline"></ion-icon>
  <p class="feature-title">Never cook again!</p>
  <p class="feature-text">
    Our subscriptions cover 365 days per year, even including major
    holidays.
  </p>
</div>
<div class="feature">
  <ion-icon class="feature-icon" name="pause-circle-outline"></ion-icon>
  <p class="feature-title">Pause anytime!</p>
  <p class="feature-text">
    Going on vacation? Just pause your subscription, and we refund
    unused days.
  </p>
</div>
<div class="feature">
  <ion-icon class="feature-icon" name="nutrition-outline"></ion-icon>
  <p class="feature-title">Local and organic!</p>
  <p class="feature-text">
    Our cooks only use local, fresh, and organic products to prepare
    your meals.
  </p>
</div>
<div class="feature">
  <ion-icon class="feature-icon" name="leaf-outline"></ion-icon>
  <p class="feature-title">No waste!</p>
  <p class="feature-text">
    All our partners only use reusable containers to package all your
    meals.
  </p>
</div>
</div>

 

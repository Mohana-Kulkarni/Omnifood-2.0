<?php 
  include "config/session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description"
    content="Omnifood is an AI-powered food subscription that will make you eat healthy again, 365  days per year. It's tailored to  your personal tastes and nutritional needs."
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="img/favicon.png" />
  <link rel="apple-touch-icon" href="img/favicon-apple-touch.png" />
  <link rel="manifest" href="manifest.webmanifest" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/general.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/queries.css" />
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <title>Omnifood &mdash; Cart</title>
</head>

<body>
  <header class="header">
    <a href="#">
      <img class="logo" alt="Omnifood logo" src="img/omnifood-logo.png" />
    </a>
    <nav class="main-nav">
      <ul class="main-nav-list">
        <li>
          <a class="main-nav-link" href="index.php"> How it works</a>
        </li>
        <li>
          <a class="main-nav-link" href="meals.php"> Meals</a>
        </li>
        <li>
          <a class="main-nav-link" href="#testimonials"> Testimonials </a>
        </li>
        <li>
          <a class="main-nav-link" href="#pricing"> Pricing</a>
        </li>
        <li>
          <a class="main-nav-link nav-cta" href="#cta"> Try for free</a>
        </li>
      </ul>
    </nav>
    <button class="btn-mobile-nav">
      <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
      <ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
    </button>
  </header>

  <section class="section-meals" id="meals">
    <div class="container center-text">
      <div  id="overlay" class="overlay" onclick="off()">
      <div class="overlay-card-container">
        <div class="cart-meal checkout-overlay">
          <a href="index.php" class="close-container"><img src="img/icons/close.png" alt="close-icon" class="close-btn"></a>
          <img src="img/icons/delivery_img.svg" alt="delivery-img" class="delivery-img">
          </div>
        </div>
      </div>
      <span class="subheading"> Cart</span>
      <h2 class="heading-secondary">
        Your Shopping List
      </h2>
    </div>
      <div id="empty-cart-img" class="empty-cart">
      <?php 
      if (isset($_SESSION['cart'])) {
        if(count($_SESSION['cart']) == 0) {
          ?>
            <img src="img/icons/empty_cart.png" alt="empty-cart">
          <?php
        } else {
          ?>
          <div class="container cart-grid margin-bottom-md">
            <?php include "components/cart.php"; ?>
            <?php include "components/checkout.php"; ?>
          </div>
        <?php
        }
      } else {
        ?>
        <img src="img/icons/empty_cart.png" alt="empty-cart">
        <?php
      }
      ?>
      </div>
      
  </section>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script defer src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js
    "></script>
    <script defer src="js/cart_script.js"></script>
</body>

</html>
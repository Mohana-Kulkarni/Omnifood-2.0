<?php 
  include "config/session.php";
  
  // print_r($_SESSION['cart']);

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
  <title>Omnifood &mdash; Meals</title>
</head>

<body>
  <header class="header">
    <a href="index.php">
      <img class="logo" alt="Omnifood logo" src="img/omnifood-logo.png" />
    </a>
    <nav class="main-nav">
      <ul class="main-nav-list">
        <li>
          <a class="main-nav-link" href="index.php"> How it works</a>
        </li>
        <li>
          <a class="main-nav-link" href="#"> Meals</a>
        </li>
        <li>
          <a class="main-nav-link" href="cart.php"> Cart </a>
        </li>
        <li>
        <a id="signup-btn" class="logout-btn" onclick="handle_login_meal()">
          <?php 
            if(isset($_SESSION['username'])) {
              echo "Logout";
            } else {
              echo "Try for free";
            }
          ?> </a>
        </li>
      </ul>
    </nav>
    <button class="btn-mobile-nav">
      <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
      <ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
    </button>
  </header>

  <section class="section-meals" id="meals">
    <div class="container">
      <span class="subheading center-text"> Meals</span>
      <div class="cart-card-price-div">
        <h2 class="heading-secondary">
          Omnifood AI chooses from 5,000+ recipes
        </h2>
        <a href="cart.php" class= "cart-btn">
          <img class="cart-icon" src="img/icons/cart.png" alt="cart-icon">
        </a> 
      </div>
    </div>

    <div class="container grid grid--3-cols margin-bottom-md">
      <?php include "components/meal.php"; ?>


      <!-- <div class="meal">
        <img src="img/meals/meal-1.jpg" class="meal-img" alt="Japanese Gyozas" />
        <div class="meal-content">
          <div class="meal-tags">
            <span class="tag tag--vegetarian"> Vegetarian</span>
          </div>
          <p class="meal-title">Japanese Gyozas</p>
          <ul class="meal-attributes">
            <li class="meal-attribute">
              <ion-icon class="meal-icon" name="flame-outline"></ion-icon><span> <strong>640</strong> Calories</span>
            </li>
            <li class="meal-attribute">
              <ion-icon class="meal-icon" name="restaurant-outline"></ion-icon><span> Nutriscore &reg;
                <strong>74</strong></span>
            </li>
            <li class="meal-attribute">
              <ion-icon class="meal-icon" name="star-outline"></ion-icon><span> <strong>4.9</strong> rating (537)</span>
            </li>
          </ul>
        </div>
      </div>-->
      <!-- Meal 2 -->
      <!-- <div class="meal">
        <img src="img/meals/meal-2.jpg" class="meal-img" alt="Avocado Salad" />
        <div class="meal-content">
          <div class="meal-tags">
            <span class="tag tag--vegan">Vegan</span>
            <span class="tag tag--paleo">Paleo</span>
          </div>
          <p class="meal-title">Avocado Salad</p>
          <ul class="meal-attributes">
            <li class="meal-attribute">
              <ion-icon class="meal-icon" name="flame-outline"></ion-icon><span> <strong>400</strong> Calories</span>
            </li>
            <li class="meal-attribute">
              <ion-icon class="meal-icon" name="restaurant-outline"></ion-icon><span> Nutriscore &reg;
                <strong>92</strong></span>
            </li>
            <li class="meal-attribute">
              <ion-icon class="meal-icon" name="star-outline"></ion-icon><span> <strong>4.8</strong> rating (441)</span>
            </li>
          </ul>
        </div>
      </div> -->

      <!-- Meal 3 -->
      <!-- <div class="meal">
        <img src="img/meals/meal-2.jpg" class="meal-img" alt="Avocado Salad" />
        <div class="meal-content">
          <div class="meal-tags">
            <span class="tag tag--vegan">Vegan</span>
            <span class="tag tag--paleo">Paleo</span>
          </div>
          <p class="meal-title">Avocado Salad</p>
          <ul class="meal-attributes">
            <li class="meal-attribute">
              <ion-icon class="meal-icon" name="flame-outline"></ion-icon><span> <strong>400</strong> Calories</span>
            </li>
            <li class="meal-attribute">
              <ion-icon class="meal-icon" name="restaurant-outline"></ion-icon><span> Nutriscore &reg;
                <strong>92</strong></span>
            </li>
            <li class="meal-attribute">
              <ion-icon class="meal-icon" name="star-outline"></ion-icon><span> <strong>4.8</strong> rating
                (441)</span>
            </li>
          </ul>
        </div> -->
    </div>
  </section>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script defer src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js
    "></script>
    <script defer src="js/cart_script.js"></script>
  <script defer src="js/login_script.js"></script>

</body>

</html>
<?php 
  include "config/session.php";
  
  print_r($_SESSION['cart']);

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
  <title>Omnifood &mdash; Never cook again!</title>
</head>

<body>
  <header class="header">
    <a href="#">
      <img class="logo" alt="Omnifood logo" src="img/omnifood-logo.png" />
    </a>
    <nav class="main-nav">
      <ul class="main-nav-list">
        <li>
          <a class="main-nav-link" href="#how"> How it works</a>
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

  <main>
    <section class="section-hero">
      <div class="hero">
        <div class="hero-text-box">
          <h1 class="heading-primary">
            A healthy meal delivered to your door, every single day
          </h1>
          <p class="hero-description">
            The smart 365-days-per-year food subscription that will make you
            eat healthy again. Tailored to your personal tastes and
            nutritional needs.
          </p>
          <a href="#cta" class="btn btn--full margin-right-sm">Start eating well</a>
          <a href="#how" class="btn btn--outline">Learn more &dArr;</a>
          <div class="delivered-meals">
            <div class="delivered-imgs">
              <img src="img/customers/customer-1.jpg" alt="customer-photo" />
              <img src="img/customers/customer-2.jpg" alt="customer-photo" />
              <img src="img/customers/customer-3.jpg" alt="customer-photo" />
              <img src="img/customers/customer-4.jpg" alt="customer-photo" />
              <img src="img/customers/customer-5.jpg" alt="customer-photo" />
              <img src="img/customers/customer-6.jpg" alt="customer-photo" />
            </div>
            <p class="delivered-text">
              <span>250,000+</span> delivered meals last year!
            </p>
          </div>
        </div>
        <div class="hero-img-box">
          <picture>
            <source srcset="img/hero-min.webp" type="image/webp" />
            <source srcset="img/hero.png" type="image/png" />

            <img src="img/hero.png" alt="Woman enjoying food, meals in storage container and food bowls on a table"
              class="hero-img" />
          </picture>
          <!-- <img
              src="img/hero.png"
              alt="Woman enjoying food, meals in storage container and food bowls on a table"
              class="hero-img"
            /> -->
        </div>
      </div>
    </section>

    <section class="section-featured">
      <div class="container">
        <h2 class="heading-featured">As featured in</h2>
        <div class="logos">
          <img src="img/logos/techcrunch.png" alt="TechChurch logo" />
          <img src="img/logos/business-insider.png" alt="Business Insider logo" />
          <img src="img/logos/forbes.png" alt="Forbes logo" />
          <img src="img/logos/the-new-york-times.png" alt="The NewYork Times logo" />
          <img src="img/logos/usa-today.png" alt="USA today logo" />
        </div>
      </div>
    </section>

    <section class="section-how" id="how">
      <div class="container">
        <span class="subheading"> How it works</span>
        <h2 class="heading-secondary">
          Your daily dose of health in 3 simple steps
        </h2>
      </div>
      <div class="container grid grid--2-cols grid--center-v">
        <!-- Step 1 -->
        <div class="step-text-box">
          <p class="step-number">01</p>
          <h3 class="heading-ternary">
            Tell us what you like (and what not)
          </h3>
          <p class="step-description">
            Never again waste time thinking about what to eat! Omnifood AI
            will create a 100% personalized weekly meal plan just for you. It
            makes sure you get all the nutrients and vitamins you need, no
            matter what diet you follow!
          </p>
        </div>
        <div class="step-img-box">
          <img src="img/app/app-screen-1.png" class="step-img" alt="iPhone app peferences selection screen" />
        </div>

        <!-- Step 2 -->
        <div class="step-img-box">
          <img src="img/app/app-screen-2.png" class="step-img" alt="iPhone app meal approving plan" />
        </div>

        <div class="step-text-box">
          <p class="step-number">02</p>
          <h3 class="heading-ternary">Approve your weekly meal plan</h3>
          <p class="step-description">
            Once per week, approve the meal plan generated for you by Omnifood
            AI. You can change ingredients, swap entire meals, or even add
            your own recipes.
          </p>
        </div>

        <!-- Step 3 -->

        <div class="step-text-box">
          <p class="step-number">03</p>
          <h3 class="heading-ternary">Receive meals at convenient time</h3>
          <p class="step-description">
            Best chefs in town will cook your selected meal every day, and we
            will deliver it to your door whenever works best for you. You can
            change delivery schedule and address daily!
          </p>
        </div>

        <div class="step-img-box">
          <img src="img/app/app-screen-3.png" class="step-img" alt="iPhone app delivery screen" />
        </div>
      </div>
    </section>

    <section class="section-meals" id="meals">
      <div class="container center-text">
        <span class="subheading"> Meals</span>
        <h2 class="heading-secondary">
          Omnifood AI chooses from 5,000+ recipes
        </h2>
      </div>

      <div class="container grid grid--3-cols margin-bottom-md">
        <div class="meal">
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
                <ion-icon class="meal-icon" name="star-outline"></ion-icon><span> <strong>4.9</strong> rating
                  (537)</span>
              </li>
            </ul>
          </div>
        </div>
        <!-- Meal 2 -->
        <div class="meal">
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
          </div>
        </div>
        <div class="diets">
          <h3 class="heading-ternary">Works with any diet :</h3>
          <ul class="list">
            <li class="list-item">
              <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
              <span>Vegetarian</span>
            </li>
            <li class="list-item">
              <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
              <span>Vegan</span>
            </li>
            <li class="list-item">
              <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
              <span>Pescatarian</span>
            </li>
            <li class="list-item">
              <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
              <span>Gluten-free</span>
            </li>
            <li class="list-item">
              <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
              <span>Lactose-free</span>
            </li>
            <li class="list-item">
              <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
              <span>Keto</span>
            </li>
            <li class="list-item">
              <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
              <span>Paleo</span>
            </li>
            <li class="list-item">
              <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
              <span>Low FODMAP</span>
            </li>
            <li class="list-item">
              <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
              <span>Kid-friendly</span>
            </li>
          </ul>
        </div>

        <div class="container all-receipes">
          <a href="meals.html" class="link">See all receipes &rarr;</a>
        </div>
      </div>
    </section>

    <section class="section-testimonial grid grid--2-cols" id="testimonials">
      <div class="testimonial-container">
        <span class="subheading"> Testimonials</span>
        <h2 class="heading-secondary">Once you try it, you can't go back</h2>

        <div class="testimonials">
          <figure class="testimonial">
            <img class="testimonial-img" src="img/customers/dave.jpg" alt="Photo of Dave Bryson" />
            <blockquote class="testimonial-text">
              Inexpensive, healthy and great-tasting meals, without even
              having to order manually! It feels truly magical.
            </blockquote>
            <p class="testimonial-name">&mdash; Dave Bryson</p>
          </figure>

          <figure class="testimonial">
            <img class="testimonial-img" src="img/customers/ben.jpg" alt="Photo of Ben Hadley" />
            <blockquote class="testimonial-text">
              The AI algorithm is crazy good, it chooses the right meals for
              me every time. It's amazing not to worry about food anymore!
            </blockquote>
            <p class="testimonial-name">&mdash; Ben Hadley</p>
          </figure>

          <figure class="testimonial">
            <img class="testimonial-img" src="img/customers/steve.jpg" alt="Photo of Steve Miller" />
            <blockquote class="testimonial-text">
              Omnifood is a life saver! I just started a company, so there's
              no time for cooking. I couldn't live without my daily meals now!
            </blockquote>
            <p class="testimonial-name">&mdash; Steve Miller</p>
          </figure>

          <figure class="testimonial">
            <img class="testimonial-img" src="img/customers/hannah.jpg" alt="Photo of Hannah Smith" />
            <blockquote class="testimonial-text">
              I got Omnifood for the whole family, and it frees up so much
              time! Plus, everything is organic and vegan and without plastic.
            </blockquote>
            <p class="testimonial-name">&mdash; Hannah Smith</p>
          </figure>
        </div>
      </div>
      <div class="gallery">
        <figure class="gallery-item">
          <img src="img/gallery/gallery-1.jpg" alt="Photo of food" />
        </figure>
        <figure class="gallery-item">
          <img src="img/gallery/gallery-2.jpg" alt="Photo of food" />
        </figure>
        <figure class="gallery-item">
          <img src="img/gallery/gallery-3.jpg" alt="Photo of food" />
        </figure>
        <figure class="gallery-item">
          <img src="img/gallery/gallery-4.jpg" alt="Photo of food" />
        </figure>
        <figure class="gallery-item">
          <img src="img/gallery/gallery-5.jpg" alt="Photo of food" />
        </figure>
        <figure class="gallery-item">
          <img src="img/gallery/gallery-6.jpg" alt="Photo of food" />
        </figure>
        <figure class="gallery-item">
          <img src="img/gallery/gallery-7.jpg" alt="Photo of food" />
        </figure>
        <figure class="gallery-item">
          <img src="img/gallery/gallery-8.jpg" alt="Photo of food" />
        </figure>
        <figure class="gallery-item">
          <img src="img/gallery/gallery-9.jpg" alt="Photo of food" />
        </figure>
        <figure class="gallery-item">
          <img src="img/gallery/gallery-10.jpg" alt="Photo of food" />
        </figure>
        <figure class="gallery-item">
          <img src="img/gallery/gallery-11.jpg" alt="Photo of food" />
        </figure>
        <figure class="gallery-item">
          <img src="img/gallery/gallery-12.jpg" alt="Photo of food" />
        </figure>
      </div>
    </section>

    <section class="section-pricing" id="pricing">
      <div class="container">
        <span class="subheading">Pricing</span>
        <h2 class="heading-secondary">
          Eating well without breaking the bank
        </h2>
      </div>

      <div class="container grid grid--2-cols margin-bottom-md">
        <div class="pricing-plans pricing-plan--starter">
          <header class="plan-header">
            <p class="plan-name">Starter</p>
            <p class="plan-price"><span>$</span>399</p>
            <p class="plan-text">per month. That's just $13 per meal!</p>
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
            <a href="#" class="btn btn--full margin-right-sm">Start eating well</a>
          </div>
        </div>
        <div class="pricing-plans pricing-plan--complete">
          <header class="plan-header">
            <p class="plan-name">Complete</p>
            <p class="plan-price"><span>$</span>649</p>
            <p class="plan-text">per month. That's just $11 per meal!</p>
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
            <a href="#" class="btn btn--full margin-right-sm">Start eating well</a>
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
    </section>

    <section class="section-cta" id="cta">
      <div class="container">
        <div class="cta">
          <div class="cta-text-box">
            <h2 class="heading-secondary">Get your first meal for free!!</h2>
            <p class="cta-text">
              Healthy, tasty and hassle-free meals are waiting for you. Start
              eating well today. You can cancel or pause anytime. And the
              first meal is on us!
            </p>
            <form class="cta-form" name="sign-up" netlify>
              <div>
                <label for="full-name"> Full Name</label>
                <input id="full-name" type="text" placeholder="Your name" name="full-name" required />
              </div>
              <div>
                <label for="email">Email Address</label>
                <input id="email" type="email" placeholder="me@email.com" name="email" required />
              </div>
              <div>
                <label for="select-where">Where did you hear from us?</label>
                <select id="select-where" name="select-where" required>
                  <option value="">Please choose one option:</option>
                  <option value="friends">Friends and Family</option>
                  <option value="youtube">Youtube Video</option>
                  <option value="podcast">Podcast</option>
                  <option value="ad">Facebook ad</option>
                  <option value="others">Others</option>
                </select>
              </div>

              <button class="btn btn--form">Sign up now</button>
            </form>
          </div>

          <div class="cta-img-box" role="img" aria-label="Women enjoying food"></div>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="container grid grid--footer">
      <div class="logo-col">
        <a href="#" class="footer-logo">
          <img class="logo" alt="Omnifood logo" src="img/omnifood-logo.png" />
        </a>

        <ul class="social-links">
          <li>
            <a class="footer-link" hred="#"><ion-icon class="social-icon" name="logo-instagram"></ion-icon></a>
          </li>
          <li>
            <a class="footer-link" hred="#"><ion-icon class="social-icon" name="logo-facebook"></ion-icon></a>
          </li>
          <li>
            <a class="footer-link" hred="#"><ion-icon class="social-icon" name="logo-twitter"></ion-icon></a>
          </li>
        </ul>

        <p class="copyright">
          Copyright &copy; <span class="year">2027</span> by Omnifood, Inc.
          All rights reserved.
        </p>
      </div>
      <div class="address-col">
        <p class="footer-heading">Contact Us</p>
        <address class="contacts">
          <p class="address">
            623 Harrison St., 2nd Floor, San Francisco, CA 94107
          </p>
          <p>
            <a class="footer-link" href="tel:415-201-6370">415-201-6370</a><br />
            <a class="footer-link" href="mailto:hello@omnifood.com">hello@omnifood.com</a>
          </p>
        </address>
      </div>
      <nav class="nav-col">
        <p class="footer-heading">Account</p>
        <ul class="footer-nav">
          <li><a class="footer-link" href="signup.php">Create account</a></li>
          <li><a class="footer-link" href="login.php">Sign in</a></li>
          <li><a class="footer-link" href="#">iOS app</a></li>
          <li><a class="footer-link" href="#">Android app</a></li>
        </ul>
      </nav>

      <nav class="nav-col">
        <p class="footer-heading">Company</p>
        <ul class="footer-nav">
          <li><a class="footer-link" href="#">About Omnifood</a></li>
          <li><a class="footer-link" href="#">For Business</a></li>
          <li><a class="footer-link" href="#">Cooking partners</a></li>
          <li><a class="footer-link" href="#">Careers</a></li>
        </ul>
      </nav>

      <nav class="nav-col">
        <p class="footer-heading">Resources</p>
        <ul class="footer-nav">
          <li><a class="footer-link" href="#">Recipe directory</a></li>
          <li><a class="footer-link" href="#">Help center</a></li>
          <li><a class="footer-link" href="#">Privacy & terms</a></li>
        </ul>
      </nav>
    </div>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script defer src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js
    "></script>
  <script defer src="js/script.js"></script>
</body>

</html>
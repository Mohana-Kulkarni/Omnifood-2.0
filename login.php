<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="img/favicon.png" />
  <link rel="apple-touch-icon" href="img/favicon-apple-touch.png" />
  <link rel="manifest" href="manifest.webmanifest" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/general.css" />

  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/queries.css" />
  <title>Omnifood &mdash; Login</title>
</head>

<body>

  <div class="img-box" role="img" aria-label="Women enjoying food">
    <div class="login-page img-box">
      <!-- <section class="login-description">
        <div class="header-container">
          <div class="header-container--inner">
            <h1>A healthy meal delivered to your door, every single day</h1>
            <p>
              The smart 365-days-per-year food subscription that will make you eat
              healthy again. Tailored to your personal tastes and nutritional
              needs
            </p>
            <a href="#" class="btn"> Start eating well</a>
          </div> 
      </section>-->
      <section class="section-login" id="login">
        <?php include"components/login-form.php"; ?>
      </section>
    </div>

  </div>
  <!-- <script defer src="js/loginScript.js"></script> -->

</body>

</html>
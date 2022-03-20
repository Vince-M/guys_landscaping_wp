<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guy's Landscaping</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&family=Raleway:wght@400;500;700&display=swap" rel="stylesheet"> 

  <!-- <link rel="stylesheet" href="./style.min.css"> -->
  <script defer src="./dist/js/script.min.js"></script>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <header class="header">
    <div class="overlay has-fade"></div>
    <div class="container row header__section">
      
      <nav class="nav flex flex-jc-sb flex-ai-c">

        <a href="index.html" class="header__logo">
          <img src="./dist/img/guys_logo_274x83.png" alt="Guy's Landscaping logo">
        </a>

        <a id="btnHamburger" href="#" class="hamburger header__toggle ">
          <span></span>
          <span></span>
          <span></span>
        </a>

        <ul class="nav__list mobile__fade">
          <li class="nav__item"><a href="index.html" class="nav__link">Home</a></li>
          <li class="nav__item"><a href="about.html" class="nav__link">About</a></li>
          <li class="nav__item"><a href="#" class="nav__link">Services</a></li>
          <li class="nav__item"><a href="#" class="nav__link">Projects</a></li>
          <li class="btn__contact nav__link"><a href="#">Contact</a></li>
        </ul>
      </nav><!-- nav flex flex-jc-sb flex-ai-c -->
    </div><!-- container row header__section -->
  </header>
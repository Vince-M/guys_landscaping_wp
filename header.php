<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php bloginfo( 'template_directory'); ?>/img/favicon.ico">
  <title>
    
    <?php bloginfo( 'name' ); ?>
    <?php wp_title( '|', true, 'left' ); ?>
  </title>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <header class="header">
    <div class="overlay has-fade"></div>
    <div class="container row header__section">
      
      <nav class="nav flex flex-jc-sb flex-ai-c">

      
        <a href="<?php echo site_url(); ?>" class="header__logo">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/img/guys_logo_274x83.png" title="Home" alt="<?php bloginfo( 'Home' ); ?>">
        </a>

        <a id="btnHamburger" href="#" class="hamburger header__toggle ">
          <span></span>
          <span></span>
          <span></span>
        </a>

        
        <?php

            $defaults = array(
              'container'  =>  false,
              'theme_location'         =>  'header-menu',
              'container_aria_label'   =>  '',
              'menu_class'             =>  'nav__list mobile__fade',
              'menu_id'                =>  'menu',
              'echo'                   =>  true,
              'fallback_cb'            =>  'wp_page_menu',
              'before'                 =>  '',
              'after'                  =>  '',
              'depth'                  =>  0
            );

            wp_nav_menu( $defaults );

          ?>

        <!-- <ul class="nav__list mobile__fade">
          <li class="nav__item"><a href="index.html" class="nav__link">Home</a></li>
          <li class="nav__item"><a href="about.html" class="nav__link">About</a></li>
          <li class="nav__item"><a href="#" class="nav__link">Services</a></li>
          <li class="nav__item"><a href="#" class="nav__link">Projects</a></li>
          <li class="btn__contact nav__link"><a href="#">Contact</a></li>
        </ul> -->
      </nav><!-- nav flex flex-jc-sb flex-ai-c -->
    </div><!-- container row header__section -->

    
  </header>
<?php get_header(); ?>
  
  <section class="hero feature-image" role="banner" data-type="background" data-speed="2">
    <div class="hero__headline">
      <h1>Premier provider<br>of landscaping services</h1>
      <div class="btn__hero">
        <a href="<?php echo site_url( 'contact' ); ?>">Contact</a>
      </div>
    </div>
  
    
    <div style="background: url(<?php echo get_theme_file_uri( '/img/hero_index_1920x600-min.jpg' ) ?>) no-repeat; background-position: center top;
    background-size: cover; left: 50%; padding: 0; position: relative;-webkit-transform: translateX(-50%);transform: translateX(-50%);
    margin-top: 0px; margin-bottom: 0px; height: 400px;overflow: hidden; clear: both;" >
    </div> <!-- hero jumbo-image -->
  </section>  <!-- hero feature-image   -->

  <main class="main container row frontpg__main">

    <!-- REALITY
    =================================================== -->
    <section class="frontpg__section frontpg__section--top">
      <div class="frontpg__section frontpg__img--left">
        
      <?php 
        $image = get_field('reality_image');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      <?php endif; ?>

      </div>
      <div class="frontpg__section frontpg__text frontpg__text--top">
        <h2><?php the_field( 'reality_header' ); ?></h2>
        <p><?php the_field( 'reality_text' ); ?></p>

        <div class="btn btn__learn-more">
          <a href="<?php echo site_url( 'about' ); ?>"><?php the_field( 'reality_btn' ); ?></a>
        </div>
      </div>
    </section>

    <hr class="section-break">

    <!-- SERVICES
    =================================================== -->
    <section class="frontpg__section frontpg_section--right">
      <div class="frontpg__section">
       
      <?php 
        $image = get_field('services_image');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      <?php endif; ?>

      </div>
      <div class="frontpg__section frontpg__text">
        <h2><?php the_field( 'services_header' ); ?></h2>
        <p><?php the_field( 'services_text' ); ?></p>

        <div class="btn btn__learn-more">
          <a href="<?php echo site_url( 'services' ); ?>"><?php the_field( 'services_btn' ); ?></a>
        </div>
      </div>
    </section>

    <hr class="section-break">

    <!-- PROJECTS
    =================================================== -->
    <section class="frontpg__section">
      <div class="frontpg__section frontpg__img--left">

      <?php 
        $imageProjects = get_field('projects_image');
          if( !empty( $imageProjects ) ): ?>
            <img src="<?php echo esc_url($imageProjects['url']); ?>" alt="<?php echo esc_attr($imageProjects['alt']); ?>" />
        <?php endif; ?>
          
          
      </div>
      <div class="frontpg__section frontpg__text">
        <h2>Featured Projects.</h2>
        <p>View some of our recent featured projects and read what our clients have to say.</p>

        <div class="btn btn__learn-more">
          <a href="#">View our projects</a>
        </div>
      </div>
    </section>
    
    <?php get_footer(); ?>
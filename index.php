<?php get_header(); ?>
  
  <section class="hero feature-image" role="banner" data-type="background" data-speed="2">
    <div class="hero__headline">
      <h1>Premier provider<br>of landscaping services</h1>
      <div class="btn__hero">
        <a href="#">Contact</a>
      </div>
    </div>
  
    
    <div style="background: url(<?php echo get_theme_file_uri('/dist/img/hero_index_1920x600-min.jpg') ?>) no-repeat; background-position: center top;
    background-size: cover; left: 50%; padding: 0; position: relative;-webkit-transform: translateX(-50%);transform: translateX(-50%);
    margin-top: 0px; margin-bottom: 0px; height: 400px;overflow: hidden; clear: both;" >
    </div> <!-- hero jumbo-image -->
  </section>  <!-- hero feature-image   -->

  <main class="main container row frontpg__main">

    <section class="frontpg__section frontpg__section--top">
      <div class="frontpg__section frontpg__img--left">
        <img src="<?php echo get_theme_file_uri('/dist/img/index-dreamsReality_650x500-min.jpg') ?>" alt="Image of front garden">
      </div>
      <div class="frontpg__section frontpg__text frontpg__text--top">
        <h2>Making Dreams become Reality.</h2>
        <p>Guy’s Landscaping is the premier provider of landscaping services in Winnipeg. Let us help you create the backyard retreat that you have always dreamt of. Our professional Winnipeg landscapers will listen to your ideas and make suggestions and help develop your vision into a reality.</p>

        <div class="btn__learn-more">
          <a href="./about.html">Learn More</a>
        </div>
      </div>
    </section>

    <hr class="section-break">

    <section class="frontpg__section frontpg_section--right">
      <div class="frontpg__section">
        <img src="<?php echo get_theme_file_uri('/dist/img/index-customLandscape_650x500-min.jpg') ?>" alt="Image of front garden">
      </div>
      <div class="frontpg__section frontpg__text">
        <h2>Extraordinary custom landscape services.</h2>
        <p>We perform complete landscaping services for businesses and residential, including all landscaping, window wells, patios, foundation repairs and much more!</p>

        <p>From designing gardens and fixing foundations, creating patios and making lawns lush again, if you have a landscaping project, we can help!</p>

        <div class="btn__learn-more">
          <a href="#">Learn About our Services</a>
        </div>
      </div>
    </section>

    <hr class="section-break">

    <section class="frontpg__section">
      <div class="frontpg__section frontpg__img--left">
        <img src="<?php echo get_theme_file_uri('/dist/img/index-featureProjects_650x500-min.jpg') ?>" alt="Image of front garden">
      </div>
      <div class="frontpg__section frontpg__text">
        <h2>Featured Projects.</h2>
        <p>View some of our recent featured projects and read what our clients have to say.</p>

        <div class="btn__learn-more">
          <a href="#">View our projects</a>
        </div>
      </div>
    </section>
    
    <?php get_footer(); ?>
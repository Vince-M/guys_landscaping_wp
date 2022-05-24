<?php get_header(); ?>


    <!-- BODY
    =================================================== -->
    <main class="main">
      <!-- HERO
      =================================================== -->
      <div class="container-fluid">
      <section role="banner" data-type="background" data-speed="2">
        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
        <div class="hero__image jumbo-image" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-position: center;
            background-size: cover; left: 50%; padding: 0; position: relative;-webkit-transform: translateX(-50%);transform: translateX(-50%);
            border-bottom: 10px solid #86b043; margin-top: 0px; margin-bottom: 0px; height: 350px;overflow: hidden; clear: both;" >
        </div> <!-- hero jumbo-image -->
      </section><!-- .section -->
    </div> <!-- container-fluid -->

      <!-- INTRO
      =================================================== -->

        <section class="container">
          <div class="content">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>

            <?php endwhile; else: ?>

            <p><?php _e( 'Sorry, no pages fount' ); ?></p>

            <?php endif; ?>

          </div> <!-- content -->
        
        </section> <!-- container -->
        
    </main> <!-- main -->


 <?php get_footer(); ?>
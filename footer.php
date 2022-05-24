<hr class="section-break">
  
    <section class="social">
      <div class="social__wrapper">
        <div class="social social__header">
          <h5>Learn More About <span class="social__header--name">Guy’s landscaping.</span></h5>
        </div>
  
        <div class="social social__column">
          <div class="social social__column--left">
            <a href="https://www.facebook.com/guyslandscapingca" target="_blank"><img src="<?php echo get_theme_file_uri('./img/facebook-icon.svg') ?>" width="56px" height="56px" alt="Visit Guy's Landscaping on Facebook"></a>
            <p>Follow on <a class="facebook" href="#"><strong>Facebook</strong></a> for more great photos</p>
          </div>
          <div class="social social__column--right">
           <a href="mailto: info@guyslandscaping.ca"><img src="<?php echo get_theme_file_uri('./img/contact-env.svg') ?>" width="66px" height="38px" alt="contact Guy's Landscaping"></a>
            <p>Contact <a class="contact" href="mailto: info@guyslandscaping.ca"><strong>Guy’s Landscaping</strong></a> to get more information and up your landscaping</p>
          </div>
        </div>
      </div>
    </section><!-- social -->
  </main>

  <footer class="footer">
      <div class="container row">
        <div class="footer__wrapper">
          <div class="footer__column">
            <div class="footer__column--left">
              <div class="footer__column footer__logo">
                <a href="<?php echo site_url( '/' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo_274x83.png" alt="Guy's Landscaping"></a>
              </div> <!-- footer__column footer__logo -->
            </div> <!-- footer__column--left -->

            <div class="footer__column--right">
              <div class="footer__column footer__column--contact">
                <h3>Contact</h3>

                <div class="address">
                  <p>162 – 56 Smithfield Ave</p>
                  <p>Winnipeg, MB  R2V 0B8</p>
                </div> <!-- address -->
                
                <div class="digital">
                  <p><span class="contact-prefix">p. </span> <a href="tel:204-899-6707">204-899-6707</a></p>
                  <p><span class="contact-prefix">e. </span> <a href="mailto:info@guyslandscaping.ca">info@guyslandscaping.ca</a></p>
                </div> <!-- digital -->
                
              </div> <!-- footer__column footer__column--contact -->
            </div> <!-- footer__column--right -->
          </div> <!-- footer__column -->

          <div class="copyright">
            <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?> / <a href="<?php echo site_url( '/privacy-policy' ); ?>">Privacy Policy</a></p>
          </div>
        </div> <!-- footer__wrapper -->
      </div> <!-- container row -->
  </footer> <!-- footer -->

  <?php wp_footer(); ?>

</body>
</html>
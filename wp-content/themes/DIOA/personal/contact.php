  <?php
  /**
   * Template Name: Contact page
   */
   ?>

  <?php get_header();?>

  <!-- start banner Area -->
  <section class="about-banner">
    <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
        <div class="about-content col-lg-8">
          <h1 class="text-white">
          	 <?php the_title(); ?>
          </h1>
          <p class="text-white link-nav"><a href="http://localhost/Example_WP/wordpress-4.9.7/wordpress/">Home </a>  <span class="lnr lnr-arrow-right"></span> <?php the_title(); ?></p>
        </div>
      </div>
    </div>
  </section>
  <!-- End banner Area -->

  <!-- Start contact-page Area -->
  <section class="contact-page-area" >
    <div class="container">
      <div class="row">
        <div class="col-lg d-flex flex-column address-wrap">
          <div class="single-contact-address d-flex flex-row">
            <div class="icon">
              <span class="lnr lnr-home"></span>
            </div>
            <div class="contact-details">
              <h5>Get In Touch</h5>
              <p>For more information about the services we offer and how we could work with you, please contact us on:</p>
            </div>
          </div>

          <div class="single-contact-address d-flex flex-row">
            <div class="icon">
              <span class="lnr lnr-envelope"></span>
            </div>
            <div class="contact-details">
              <h5><a href="mailto:info@disabilityisourability.co.uk">info@disabilityisourability.co.uk</a></h5>
            </div>
          </div>
        </div>
        <div class="col-lg">
        <?php if(have_posts()): ?>
          <?php while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <!-- End contact-page Area -->

  <!-- start footer Area -->
  <footer class="footer-area section-gap">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="single-footer-widget text-center">
                      <h4>About DIOA</h4>
                      <p>
                          Our business aims to challenge ideas about disability, and work towards a more inclusive society.
                      </p>
                      <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      </p>
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="single-footer-widget text-center">
                      <h4>Get In Touch</h4>
                      <p><a href="mailto:info@disabilityisourability.co.uk">info@disabilityisourability.co.uk</a></p>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- End footer Area -->
  <?php wp_footer();?>
  </body>
</html>

<?php
// check if the repeater field has rows of data
if( have_rows('testimonial', 66) ):
?>
<!-- Start testimonial Area -->
  <section class="testimonial-area">
    <div class="container pb-50">
      <div class="row d-flex justify-content-center">
          <div class="menu-content pb-70 col-lg-12">
              <div class="title text-center">
                  <h1 class="mb-10">What people say about DIIOA</h1>
                  <p></p>
              </div>
          </div>
      </div>

      <div class="row">
        <div class="active-testimonial">
      <?php
        while ( have_rows('testimonial', 66) ) : the_row();
        $image = get_sub_field('headshot')['url'];
        ?>
        <div class="single-testimonial item d-flex flex-row">
          <div class="thumb">
            <img src="<?php echo $image; ?>" alt="<?php get_field('name'); ?>" style="border-radius: 20px; width: 80px; height: 80px;"/>
          </div>

          <div class="desc">
            <p><h1></h1><?php the_sub_field('text')?></p>
            <h1> <?php the_sub_field('name')?></h1>
            <h3> <?php the_sub_field('job_title')?></h3>
          </div>
        </div>
    <!-- End testimonial Area -->
      <?php
      endwhile;
      ?>
        </div>
      </div>
    </div>
  </section>
  <?php
  else :
  endif;
  ?>

  <?php if( have_rows('companies', 71) ): ?>
    <!-- Start brands Area -->
    <section class="brands-area">
        <div class="container">
          <center><h1>Companies we have work with</h1></center>
          <br />
          <div class="brand-wrap">
            <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">

<?php while( have_rows('companies', 71) ): the_row(); ?>
<?php
$image = get_sub_field('logo')['url']; ?>


<div class="col single-brand">
<img class="mx-auto" src="<?php echo $image; ?>" alt="<?php the_sub_field('business_name'); ?>" width="180" height="90">
<br />

</div>
<?php endwhile; ?>
</div>
</div>
</div>
</div>
</section>
<!-- End brands Area -->


<?php endif; ?>
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
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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

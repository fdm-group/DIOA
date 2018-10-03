<?php get_header(); ?>
<style>
header#head-img{
  background-image: url('../img/header.jpg');
  background-repeat: no-repeat;
  height: 100px;
}
</style>

<header class="masthead text-center text-white d-flex" >
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h1 class="text-uppercase">
            <strong><?php the_title(); ?></strong>
          </h1>
          <hr class="hr">
        </div>

      </div>
    </div>
  </header>



  <?php
  if(have_posts()):
    while ( have_posts() ) :
      the_post();
      ?>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto content">
      <?php
      the_content();

      ?>
          </div> <!-- container -->
        </div> <!-- row -->
      </div> <!-- col-lg -->
      <?php

    endwhile;
  else:
endif;
  ?>



<?php
// check if the repeater field has rows of data
if( have_rows('members') ):
  ?>

  <section class="p-0" id="portfolio">
    <center><h1><?php the_title(); ?></h1></center>
    <div class="container">
      <div class="row">
          <?php
       	// loop through the rows of data
          while ( have_rows('members') ) : the_row();

            $image = get_sub_field('image')['url'];
              // display a sub field value
            ?>

            <div class="col-lg-6 ml-auto text-center">
                <img class="img-fluid" src="<?php echo $image; ?>" width="300" height="300" style="border-radius: 20px; margin: 30px;">
                <h3><?php the_sub_field('name');?></h3>
                <p><?php the_sub_field('description');?></p>
              </div>
            <?php

          endwhile;
      ?>
        </div>
      </div>
    </section>
<?php
else :

    // no rows found

endif;

?>



<?php
// check if the repeater field has rows of data
if( have_rows('download_courses') ):

?>
<center><h1><?php the_title(); ?></h1></center>
<section class="p-0" id="portfolio">
  <div class="container-fluid p-0">
    <div class="row no-gutters popup-gallery">

<?php
 	// loop through the rows of data
    while ( have_rows('download_courses') ) : the_row();
      $image = get_sub_field('image')['url'];
        // display a sub field value
      ?>



                <div class="col-lg-6 col-sm-8" style="">
                  <a class="portfolio-box" href="<?php echo $image; ?>">

                    <img class="img-fluid" src="<?php echo $image; ?>">
                    <div class="portfolio-box-caption">
                      <div class="portfolio-box-caption-content">
                        <div class="project-name">
                          <?php the_sub_field('name');?>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

      <?php

    endwhile;

    ?>
</div></div></section>
    <?php

else :

    // no rows found

endif;


?>

<?php
// check if the repeater field has rows of data
if( have_rows('testimonial') ):
?>   <center><h1><?php the_title(); ?></h1></center>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src=".../800x400?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php
 	// loop through the rows of data
    while ( have_rows('testimonial') ) : the_row();

        // display a sub field value
      ?>


      <img src="<?php the_sub_field('headshot')?>" alt="<?php get_field('name'); ?>" />

    <h1> <?php the_sub_field('name')?></h1>
    <h3> <?php the_sub_field('job_title')?></h3>
    <p> <?php the_sub_field('text')?></p>


      <?php

    endwhile;

else :

    // no rows found

endif;


?>
  <div class="container" style="margin: 50px;">
<center><h1><?php the_title(); ?></h1></center>

      <div class="row">
<?php
// check if the repeater field has rows of data
if( have_rows('companies') ):
?>
<?php


 	// loop through the rows of data
    while ( have_rows('companies') ) : the_row();
      $image = get_sub_field('logo')['url'];
        // display a sub field value
      ?>
      <div class="col-lg-4 col-md-8 text-center">
                 <div class="service-box mt-5 mx-auto">
                     <img src="<?php echo $image; ?>" alt="<?php get_field('business_name'); ?>" width="100" height="100" style="border-radius: 20px;"/>
                     <br />
                     <h4 class="mb-3"><?php the_sub_field('business_name')?></h4>
                 </div>
      </div>



      <?php

    endwhile;

else :

    // no rows found

endif;


?>

</div></div>

<?php
// check if the repeater field has rows of data
if( have_rows('support_team') ):
?>   <center><h1><?php the_title(); ?></h1></center>

<?php
 	// loop through the rows of data
    while ( have_rows('support_team') ) : the_row();

        // display a sub field value
            $image = get_sub_field('image')['url'];
      ?>

                          <div class="col-md-4 col-sm-4">
                                 <div class="team-member">
                                     <div class="team-img">
                                         <img src="<?php echo $image; ?>" alt="team member" class="img-responsive" width="400" height="400">
                                     </div>
                                     <div class="team-hover">
                                         <div class="desk">
                                                 <p> <?php the_sub_field('text')?></p>
                                         </div>

                                     </div>
                                 </div>
                                 <div class="team-title">
                                     <h5><?php the_sub_field('name'); ?></h5>
                                     <span><?php the_sub_field('job_title'); ?></span>
                                 </div>
                          </div>
      <?php

    endwhile;

else :

    // no rows found

endif;


?>

</div>
</div>
</div>


<?php get_footer(); ?>

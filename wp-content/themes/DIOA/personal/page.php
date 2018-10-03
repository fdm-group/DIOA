<?php get_header(); ?>

  <!-- generate ttiles -->
  <section class="about-banner">
    <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
        <div class="about-content col-lg-8 ">
          <h1 class="text-white">
          	 <?php the_title(); ?>
          </h1>
          <p class="text-white link-nav"><a href="http://localhost/Example_WP/wordpress-4.9.7/wordpress/">Home </a>  <span class="lnr lnr-arrow-right"></span> <?php the_title(); ?></p>
        </div>
      </div>
    </div>
  </section>
  <!-- End banner Area -->

<!-- echo content if exists -->
<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12 ">
        <div id="post-<?php the_ID(); ?>" <?php post_class(array('article-wrapper')); ?>>
          <br />
          <?PHP
          if(has_post_thumbnail())
            the_post_thumbnail('custom_1', array( 'class'	=> "img-rounded img-responsive center-block featured"));
          ?>

          <section class="home-about-area">
            <div class="container">
              <div class="row align-items-center " >
                <div class="content col-md-12" >
                  <p><?php
                  the_content();
                  ?>
                  </p>
                </div>
              </div>
            </div> <!-- container -->
          </section>
        </div>
        <br />
        <?php endwhile;
            endif; ?>
      </div>
    </div>
  </div>

  <?php
  //check if the repeater field has rows of data
  if( have_rows('about') ):
  ?>

  <!-- About us page content -->
  <section class="faq-area">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <section class="facts-area" style="background: -webkit-linear-gradient(0deg, #75b9f9 0%, #efeade 100%); padding: 30px; color: #898886; margin-bottom: 20px;" id="why" >
          <div class="container text-center">
                <h1 style="color: #605f5d;">WHY DIOA?</h1>
                <p>Well, there are lots of things that make our training different to everyone else’s:</p>
          </div>
        </section>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <dl class="accordion">
            <?php
         	// loop through the rows of data
              while ( have_rows('about') ) : the_row();
            ?>
            <dt>
              <a href=""><?php the_sub_field('title')?></a>
            </dt>
            <dd>
            <?php the_sub_field('text'); ?>
            </dd>
            <?php
              endwhile;
            ?>
          </dl>
        </div>
      </div>
    </div>
  </section>

  <?php endif; ?>

  <!-- members page content -->
  <?php
// check if the repeater field has rows of data
if( have_rows('members') ):
  if( have_rows('support_team', 73) ):
    ?>
  <section class="portfolio-area" id="portfolio">
    <div class="container">
      <div class="filters-content">
        <h3><center>Meet Our Support Team</center></h3>
        <div class="row text-center">
          <?php
       	  // loop through the rows of data
          while ( have_rows('support_team', 73 ) ) : the_row();
          // Image url
          $image = get_sub_field('image')['url'];
          ?>
          <div class="single-portfolio col-lg-4 col-sm-4">
            <div class="relative">
              <div class="thumb">
                <div class="overlay overlay-bg"></div>
                <img class="img-fluid" src="<?php echo $image; ?>" >
              </div>

              <div class="middle">
                <div class="text-center">
                <p><?php the_sub_field('text'); ?></p>
                </div>
              </div>
            </div>
            <div class="p-inner">
              <h4> <?php the_sub_field('name');?></h4>
              <p> <?php the_sub_field('job_title');?></p>
            </div>
          </div>
          <?php
          endwhile;
          ?>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>


  <section class="portfolio-area" id="portfolio">
    <div class="container">
      <div class="filters-content">
        <div class="text-center">
          <div class="menu-content ">
            <div class="title text-center">
              <h1 class="mb-10"><?php the_title(); ?></h1>
            </div>
          </div>
        </div>

      <div class="row text-center">
        <?php
       	// loop through the rows of data
        while ( have_rows('members') ) : the_row();
          $image = get_sub_field('image')['url'];
          ?>
          <div class="single-portfolio col-lg-6 col-sm-4">
            <div class="relative">

              <div class="thumb">
                <div class="overlay overlay-bg"></div>
                <img class="img-fluid" src="<?php echo $image; ?>">
              </div>

              <div class="middle" style="color: #fff;">
                <div class="text-center d-flex"></div>
                <p><?php the_sub_field('description'); ?></p>
              </div>

            </div>

            <div class="p-inner">
              <h4> <?php the_sub_field('name');?></h4>
            </div>
          </div>
        <?php
        endwhile;
        ?>
        </div>
      </div>
    </div>
  </section>
  <?php
  else :
  // no rows found
  endif;
  ?>
  <!-- end staff area -->

  <!-- content for training courses -->
  <?php
  // check if the repeater field has rows of data
  if( have_rows('download_courses') ):
  ?>
  <!-- Start services Area -->
  <section class="services-area section-gap">
    <div class="text-center">
        <div class="menu-content ">
            <div class="title text-center">
                <h1 class="mb-10">Why do you need disability awareness training?</h1>
                <p>To enable you to confidently serve customers and employ staff with a disability</p>
            </div>
        </div>
    </div>
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="single-services">
            <span class="lnr lnr-pie-chart"></span>
            <h4>Better for the economy</h4>
            <p>
               A 10 percentage point rise in the employment rate amongst disabled adults would contribute an extra £12 billion to the Exchequer by 2030.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="single-services">
            <span class="lnr lnr-laptop-phone"></span>
              <h4>Gain and retain more customers</h4>
            <p>
              There are 13.9 million disabled adults in the UK. The spending power of families with at least one disabled person is estimated by the Government to be over £200 billion a year.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="single-services">
            <span class="lnr lnr-camera"></span>
              <h4>Better performance </h4>
            <p>
            Diverse teams perform better. They have been found to be 83% more innovative, make decisions 60% faster, and problem solve quicker (Harvard Business Review, 2017, Deloitte 2013).
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="single-services">
            <span class="lnr lnr-picture"></span>
              <h4>A disability confident workforce</h4>
            <p>
             67% of people in the UK feel awkward around disability. Negative attitudes are fuelled by lack of information, understanding and confidence in dealing with disability.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="single-services">
            <span class=""></span>
            <a href="#"><h4></h4></a>
            <p>
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="single-services">
            <span class="lnr lnr-tablet"></span>
              <h4>Legal compliance</h4>
            <p>
              83% of people acquire their disability while in work.  Under the Equality Act 2010 Reasonable adjustment is a legal requirement.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End course Area -->

    <!-- get sub field value from courses page -->
    <section class="price-area">
      <div class="container">
        <div class="row">
          <!-- courses -->
          <?php
            // loop through the rows of data
              while ( have_rows('download_courses') ) : the_row();
                $image = get_sub_field('image')['url'];
                  // display a sub field value
                ?>
                <!-- sub field values -->
                <div class="col-lg-6 col-md-6 single-price">
                  <div class="top-part">
                    <h1 class="package-no"><?php the_sub_field('no');?></h1>
                    <h3 style="padding-top: 20px;">  <?php the_sub_field('name');?></h3>
                      <img class="img-fluid" src="<?php echo $image; ?>" width="400" height="400" style="border-radius: 30px; margin-top: 30px;">
                  </div>
                </div>
                <!-- sub field value end -->
                <?php
              endwhile;
              ?>
        </div>
      </div>
    </section>
    <!-- End course Area -->
    <?php

    else :
        // no rows found
    endif;
    ?>

<?php get_footer(); ?>

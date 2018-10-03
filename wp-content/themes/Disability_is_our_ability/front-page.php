<?php

  /*
  Template Name: front page custom page
  */

  get_header();

?>
<header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h1 class="text-uppercase">
            <strong>Charity Page</strong>
          </h1>
          <hr class="hr">
        </div>
        <div class="col-lg-8 mx-auto">

          <a class="btn btn-info btn-xl js-scroll-trigger" href="#about" style="font-size: 1.2em; padding-15px;">Find Out More</a>
        </div>
      </div>
    </div>
  </header>


<div class="content">

					<?php
					while ( have_posts() ) :
						the_post();


						the_content();

					endwhile;
					?>
		</div> <!-- /.sections -->


<?php get_footer(); ?>

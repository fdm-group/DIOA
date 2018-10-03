<?php get_header(); ?>

<div class="big-title">
	<div class="container">
		<h2><?php echo the_field('home_page_title'); ?></h2>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
      <br />
      <?php the_field('home_page_description');
      ?>
      <img src="<?php the_field('home_page_header_image')?>" width="700" height="300" alt="" />


		</div>

		<!-- <div class="col-md-3 col-md-offset-1">
			<p>You can use this space to create a sidebar</p>
		</div> -->

	</div>
</div>


<?php get_footer(); ?>

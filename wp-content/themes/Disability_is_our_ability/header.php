<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

	<style>

  .front-page {
  overflow: hidden;
//  background-color: #333;
}

.front-page li{
  display: inline;
}

.front-page a {
  float: left;
  display: block;
  color: #D4D8DC;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.front-page a:hover {
  color: #fff;
  text-decoration: none;
}

.active {
  background-color: #4CAF50;
  color: white;
}

	</style>

	<?php wp_head(); ?>
  </head>
  <body id="page-top">
   <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?php echo get_bloginfo('template_url'); ?>" />Logo</a>
	  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
		aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">

            <?php
            wp_nav_menu( array(
            'theme_location' => 'my-custom-menu',
            'menu_class' => 'front-page' ) );
            ?>



        </div>
      </div>
    </nav>
  <!-- header images -->

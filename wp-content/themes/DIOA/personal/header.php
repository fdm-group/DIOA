<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="<?php echo get_bloginfo('template_url') ?>/img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title><?php the_title();?></title>

    <?php wp_head();?>
  </head>
  <body>
    <header id="header">
      <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href="http://localhost/Example_WP/wordpress-4.9.7/wordpress/"><img src="<?php echo get_bloginfo('template_url') ?>/img/DIOA.png" width="150" height="60"/></a>
          </div>
          <nav id="nav-menu-container">
              <!-- Main Menu-->
              <?php
              wp_nav_menu( array(
              'theme_location' => 'my-custom-menu',
              'menu_class' => 'front-page' ) );
              ?>
          </nav><!-- #nav-menu-container -->
        </div>
      </div>
    </header><!-- #header -->

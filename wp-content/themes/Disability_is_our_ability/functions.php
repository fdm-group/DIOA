<?php
function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'main menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );
add_action( 'wp_head', function() {

  ?>

  <link href="<?php echo get_stylesheet_directory_uri(); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/creative.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Custom styles for this template -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css">

<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
<?php
});

add_action('wp_footer', function(){

?>
  <!-- Bootstrap core JavaScript -->
  <script src="<?php bloginfo('template_url'); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php bloginfo('template_url'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/vendor/scrollreveal/scrollreveal.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php bloginfo('template_url'); ?>/js/creative.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/navbar-shrinker.js"></script>



<?php
});

 ?>

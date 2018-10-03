  <?php
    function main_menu() {
      register_nav_menu('my-custom-menu',__( 'main menu' ));
    }
    add_action( 'init', 'main_menu' );

    //registering CSS files

    add_action('wp_enqueue_scripts', 'CSS_files');
    function CSS_files(){
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'linearicons', get_template_directory_uri() . '/css/linearicons.css');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/css/nice-select.css');
    wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css');
  }

    //registering javascript files
    function javascript_files() {
      //  if(!is_page('about-us'))
      //  return;
    wp_enqueue_script( 'jquery-2.2.4.min', get_template_directory_uri() . '/js/vendor/jquery-2.2.4.min.js', array ( 'jquery' ), true);
    wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array ( 'jquery' ), true);
    wp_enqueue_script( 'easing.min', get_template_directory_uri() . '/js/easing.min.js', array ( 'jquery' ), true);
    wp_enqueue_script( 'hoverIntent', get_template_directory_uri() . '/js/hoverIntent.js', array ( 'jquery' ), true);
    wp_enqueue_script( 'superfish.min', get_template_directory_uri() . '/js/superfish.min.js', array ( 'jquery' ), true);
    wp_enqueue_script( 'ajaxchimp.min', get_template_directory_uri() . '/js/jquery.ajaxchimp.min.js', array ( 'jquery' ), true);
    wp_enqueue_script( 'magnific-popup.min', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array ( 'jquery' ), true);
    wp_enqueue_script( 'jquery-tab.min', get_template_directory_uri() . '/js/jquery.tabs.min.js', array ( 'jquery' ), true);
   wp_enqueue_script( 'nice-select.min', get_template_directory_uri() . '/js/jquery.nice-select.min.js', array ( 'jquery' ), true);
    wp_enqueue_script( 'isotope.pkgd.min', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array ( 'jquery' ), true);
    wp_enqueue_script( 'simple-skillbar', get_template_directory_uri() . '/js/simple-skillbar.js', array ( 'jquery' ), true);
   wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js', array ( 'jquery' ), true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), true);
  }

    add_action('wp_footer', 'javascript_files');

?>

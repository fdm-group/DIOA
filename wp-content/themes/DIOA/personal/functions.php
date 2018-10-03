  <?php
    function main_menu() {
      register_nav_menu('my-custom-menu',__( 'main menu' ));
    }
    add_action( 'init', 'main_menu' );

    //registering CSS files

    wp_enqueue_style( 'linearicons', get_template_directory_uri() . '/css/linearicons.css');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');
    wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/css/jquery-ui.css');
    wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/css/nice-select.css');
    wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/css/jquery-ui.css');
    wp_enqueue_style( 'animation.min', get_template_directory_uri() . '/css/animation.min.css');
    wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style( 'fonts', get_template_directory_uri() . 'https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700');

    //registering javascript files
    wp_enqueue_script( 'jquery-2.2.4.min', get_template_directory_uri() . '/js/vendor/jquery-2.2.4.min.js', array ( 'jquery' ));
    wp_enqueue_script( 'popper.min', get_template_directory_uri() . '/js/popper.min.js', array ( 'jquery' ));
    wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array ( 'jquery' ));
    wp_enqueue_script( 'easing.min', get_template_directory_uri() . '/js/easing.min.js', array ( 'jquery' ));
    wp_enqueue_script( 'hoverIntent', get_template_directory_uri() . '/js/hoverIntent.js', array ( 'jquery' ));
    wp_enqueue_script( 'superfish.min', get_template_directory_uri() . '/js/superfish.min.js', array ( 'jquery' ));
    wp_enqueue_script( 'ajaxchimp.min', get_template_directory_uri() . '/js/jquery.ajaxchimp.min.js', array ( 'jquery' ));
    wp_enqueue_script( 'magnific-popup.min', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array ( 'jquery' ));
    wp_enqueue_script( 'jquery-tab.min', get_template_directory_uri() . '/js/jquery.tabs.min.js', array ( 'jquery' ));
    wp_enqueue_script( 'nice-select.min', get_template_directory_uri() . '/js/jquery.nice-select.min.js', array ( 'jquery' ));
    wp_enqueue_script( 'isotope.pkgd.min', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array ( 'jquery' ));
    wp_enqueue_script( 'waypoints.min', get_template_directory_uri() . '/js/waypoints.min.js', array ( 'jquery' ));
    wp_enqueue_script( 'counterup.min', get_template_directory_uri() . '/js/jquery.counterup.min.js', array ( 'jquery' ));
    wp_enqueue_script( 'simple-skillbar', get_template_directory_uri() . '/js/simple-skillbar.js', array ( 'jquery' ));
    wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js', array ( 'jquery' ));
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ));

?>

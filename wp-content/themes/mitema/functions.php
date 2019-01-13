<?php
  // REGISTRO DE ESTILOS
  function register_enqueue_style() {
  		$theme_data = wp_get_theme();
  		/* Registrando estilos */
  		wp_register_style('bootstrap', get_parent_theme_file_uri('/assets/vendor/css/bootstrap.css'), null, '1.0.0', 'screen');
        wp_register_style('animate', get_parent_theme_file_uri('/assets/vendor/css/animate.css'), null, '1.0.0', 'screen');
        wp_register_style('icomoon', get_parent_theme_file_uri('/assets/vendor/css/icomoon.css'), null, '1.0.0', 'screen');
        wp_register_style('carousel', get_parent_theme_file_uri('/assets/vendor/css/owl.carousel.min.css'), null, '1.0.0', 'screen');
        wp_register_style('theme', get_parent_theme_file_uri('/assets/vendor/css/owl.theme.default.min.css'), null, '1.0.0', 'screen');
        wp_register_style('themify', get_parent_theme_file_uri('/assets/vendor/css/themify-icons.css'), null, '1.0.0', 'screen');
        wp_register_style('main', get_parent_theme_file_uri('/assets/css/style.css'), null, '1.0.0', 'screen');
        wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Merriweather:300,400|Montserrat:400,700');
        /* aquí encolamos (Enqueue) estilos */
  		wp_enqueue_style('bootstrap');
        wp_enqueue_style('animate');
        wp_enqueue_style('icomoon');
        wp_enqueue_style('carousel');
        wp_enqueue_style('theme');
        wp_enqueue_style('themify');
  		wp_enqueue_style('main');
        wp_enqueue_style('googleFonts');
	}
    //invocamos nuestra función
	add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );
    // REGISTRO DE SCRIPTS
  function register_enqueue_scripts() {
      $theme_data = wp_get_theme();

      /* Deregister Scripts */
      wp_deregister_script( 'jquery' );
      wp_deregister_script( 'jquery-migrate' );
      /* Registrando Scripts */
      wp_register_script('jQuery3', get_parent_theme_file_uri('/assets/vendor/js/jquery.min.js'), null, '3.2.1', true);
      wp_register_script('jQuery_migrate', get_parent_theme_file_uri('/assets/vendor/js/jquery-migrate.min.js'), array('jQuery3'), '3.0.0', true);

      wp_register_script('jquery-min', get_parent_theme_file_uri('/assets/vendor/js/jquery.min.js'), null , true);
      wp_register_script('bootstrap', get_parent_theme_file_uri('/assets/vendor/js/bootstrap.min.js'), array('jquery-min'), true);
      wp_register_script('google-maps', get_parent_theme_file_uri('/assets/vendor/js/google_map.js'), null, true);
      wp_register_script('jquery-easing', get_parent_theme_file_uri('/assets/vendor/js/jquery.easing.1.3.js'), null, true);
      wp_register_script('jquery-waypoints-min', get_parent_theme_file_uri('/assets/vendor/js/jquery.waypoints.min.js'), null, 'screen');
      wp_register_script('modernizr', get_parent_theme_file_uri('/assets/vendor/js/modernizr-2.6.2.min.js'), null, true);
      wp_register_script('owl-carousel', get_parent_theme_file_uri('/assets/vendor/js/owl.carousel.min.js'), null, true);
      wp_register_script('respond', get_parent_theme_file_uri('/assets/vendor/js/respond.min.js'), null, true);
      wp_register_script('main', get_parent_theme_file_uri('/assets/js/main.js'), null, true);

      /* Enqueue Scripts */
      wp_enqueue_script('jquery-min');
      wp_enqueue_script('bootstrap');
      wp_enqueue_script('google-maps');
      wp_enqueue_script('jquery-easing');
      wp_enqueue_script('jquery-waypoints-min');
      wp_enqueue_script('modernizr');
      wp_enqueue_script('owl-carousel');
      wp_enqueue_script('respond');
      wp_enqueue_script('main');
	}
	add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );
?>

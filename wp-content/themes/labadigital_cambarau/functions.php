<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();


  wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );

  wp_enqueue_style( 'font-lato-styles', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700', array(), $the_theme->get( 'Version' ) );
  wp_enqueue_style( 'font-changa-styles', 'http://fonts.googleapis.com/css?family=Changa+One&effect=anaglyph', array(), $the_theme->get( 'Version' ) );

  wp_enqueue_style( 'slick-styles', get_stylesheet_directory_uri() . '/css/slick/slick.css', array(), $the_theme->get( 'Version' ) );
  wp_enqueue_style( 'slick-theme-styles', get_stylesheet_directory_uri() . '/css/slick/slick-theme.css', array(), $the_theme->get( 'Version' ) );

  wp_enqueue_style( 'labadigital-styles', get_stylesheet_directory_uri() . '/css/style.css', array(), $the_theme->get( 'Version' ) );

  wp_enqueue_script( 'jquery-scripts', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), $the_theme->get( 'Version' ), false );
  wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
}

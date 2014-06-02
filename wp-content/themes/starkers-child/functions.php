<?php

wp_deregister_script('jquery');
wp_register_script('jquery', ("//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"), false, '1.9.0', true);
wp_enqueue_script('jquery');
	
function starkers_script_enqueuer() {
	wp_register_script( 'application', get_stylesheet_directory_uri().'/bower_components/jsbehave/application.js', array( 'jquery' ) );
	wp_enqueue_script( 'application' );

	wp_register_style( 'normalize-css', get_stylesheet_directory_uri().'/bower_components/normalize-css/normalize.css', '', '', 'screen' );
	wp_enqueue_style( 'normalize-css' );

	wp_register_style( 'ionicons', get_stylesheet_directory_uri().'/bower_components/ionicons/css/ionicons.min.css', '', '', 'screen' );
	wp_enqueue_style( 'ionicons' );

	wp_register_style( 'grid', get_stylesheet_directory_uri().'/bower_components/dont_over_think_it/css/grid.css', '', '', 'screen' );
	wp_enqueue_style( 'grid' );

	wp_register_style( 'main', get_stylesheet_directory_uri().'/styles/css/main.css', '', '', 'screen' );
  wp_enqueue_style( 'main' );

	wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
  wp_enqueue_style( 'screen' );
}	

?>
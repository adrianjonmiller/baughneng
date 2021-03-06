<?php

wp_deregister_script('jquery');
wp_register_script('jquery', ("//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"), false, '1.9.0', true);
wp_enqueue_script('jquery');
	
function starkers_script_enqueuer() {

	// Scripts

	wp_register_script( 'application', get_stylesheet_directory_uri().'/bower_components/jsbehave/application.js', array( 'jquery' ) );
	wp_enqueue_script( 'application' );

	wp_register_script( 'flexslider-js', get_stylesheet_directory_uri().'/bower_components/flexslider/jquery.flexslider-min.js', array( 'jquery' ) );
	wp_enqueue_script( 'flexslider-js' );

	wp_register_script( 'imagesloaded', get_stylesheet_directory_uri().'/bower_components/imagesloaded/imagesloaded.pkgd.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'imagesloaded' );

	wp_register_script( 'behaviors', get_stylesheet_directory_uri().'/js/behaviors/behaviors.js', array( 'jquery' ) );
	wp_enqueue_script( 'behaviors' );

	
	// Styles

	wp_register_style( 'normalize-css', get_stylesheet_directory_uri().'/bower_components/normalize-css/normalize.css', '', '', 'screen' );
	wp_enqueue_style( 'normalize-css' );

	wp_register_style( 'flexslider-css', get_stylesheet_directory_uri().'/bower_components/flexslider/flexslider.css', '', '', 'screen' );
	wp_enqueue_style( 'flexslider-css' );

	wp_register_style( 'ionicons', get_stylesheet_directory_uri().'/bower_components/ionicons/css/ionicons.min.css', '', '', 'screen' );
	wp_enqueue_style( 'ionicons' );

	wp_register_style( 'grid', get_stylesheet_directory_uri().'/bower_components/dont_over_think_it/css/grid.css', '', '', 'screen' );
	wp_enqueue_style( 'grid' );


	wp_register_style( 'fonts', get_stylesheet_directory_uri().'/styles/main.css', '', '', 'screen' );
  wp_enqueue_style( 'fonts' );

	wp_register_style( 'main', get_stylesheet_directory_uri().'/styles/Baughn_Engineering.css', '', '', 'screen' );
  wp_enqueue_style( 'main' );

	wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
  wp_enqueue_style( 'screen' );
}	

function the_slug($echo=true){
  $slug = basename(get_permalink());
  do_action('before_slug', $slug);
  $slug = apply_filters('slug_filter', $slug);
  if( $echo ) echo $slug;
  do_action('after_slug', $slug);
  return $slug;
}

// Register Menus

register_nav_menu( 'primary', 'Primary Menu' );
register_nav_menu( 'secondary', 'Secondary Menu' );

function my_register_sidebars() {
	/**
 * Register our sidebars and widgetized areas.
 *
 */
	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Primary' ),
			'description' => __( 'Primary sidebar.' ),
			'before_widget' => '<div id="left-widget-area" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	register_sidebar(
		array(
			'id' => 'blog-sidebar',
			'name' => __( 'Blog Sidebar' ),
			'description' => __( 'Sidebar for LVAD Blog.' ),
			'before_widget' => '<div class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
}

add_action( 'widgets_init', 'my_register_sidebars' );

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'banner',
		array(
			'labels' => array(
				'name' => __( 'Banners' ),
				'singular_name' => __( 'Banner' )
			),

			'taxonomies' => array('category'),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'banner'),
		)
	);
	register_post_type( 'application',
		array(
			'labels' => array(
				'name' => __( 'Applications' ),
				'singular_name' => __( 'Application' )
			),

			'taxonomies' => array('category'),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'application'),
		)
	);
}

add_action('init', 'my_custom_init');
function my_custom_init() {
	add_post_type_support( 'banner', 'thumbnail' );
	add_post_type_support( 'banner', 'excerpt' );
	add_post_type_support( 'banner', 'page-attributes');

	add_post_type_support( 'application', 'thumbnail' );
	add_post_type_support( 'application', 'excerpt' );
}

add_filter('show_admin_bar', '__return_false');

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}



?>
<?php
function vargo_widgets_init() {
	// Area 1, located below the Scrolling Widget Area on the home page. Empty by default.
	register_sidebar( array(
		'name' => __( 'Home First Bucket', 'vargo' ),
		'id' => 'home-first-bucket',
		'description' => __( 'The bucket widget area of the home page', 'vargo' ),
		'before_widget' => '<div id="first-bucket" class="widget-container %2$s"><!--img src="/wp-content/themes/vargo/images/home_one_company.jpg" alt="" /-->',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="home-widget-title">',
		'after_title' => '</h2>',
	) );
	
	// Area 2, located below the Scrolling Widget Area on the home page. Empty by default.
	register_sidebar( array(
		'name' => __( 'Home Second Bucket', 'vargo' ),
		'id' => 'home-second-bucket',
		'description' => __( 'The bucket widget area of the home page', 'vargo' ),
		'before_widget' => '<div id="second-bucket" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="home-widget-title">',
		'after_title' => '</h2>',
	) );
	
	// Area 3, located below the Scrolling Widget Area on the home page. Empty by default.
	register_sidebar( array(
		'name' => __( 'Home Third Bucket', 'vargo' ),
		'id' => 'home-third-bucket',
		'description' => __( 'The bucket widget area of the home page', 'vargo' ),
		'before_widget' => '<div id="third-bucket" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="home-widget-title">',
		'after_title' => '</h2>',
	) );
}

/** Register sidebars by running vargo_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'vargo_widgets_init' );

function remove_wpautop( $content ) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	$content = preg_replace( '#^<\/p>|^<br \/>|<p>$#', '', $content );
	return $content;
}

//shortcodes in widgets
add_filter('widget_text', 'do_shortcode');

/*
 * Add styles and scripts
*/
add_action('wp_print_styles', 'msd_add_styles');
function msd_add_styles() {
	global $is_IE;
	if(!is_admin()){
		if(is_front_page()){
		wp_enqueue_style('twitter-bootstrap','http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css');
		}
	}
}

add_action('wp_print_scripts', 'msd_add_scripts');
function msd_add_scripts() {
	global $is_IE;
	if(!is_admin()){
		wp_enqueue_script('twitter-bootstrap','http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js',array('jquery'));
		if(is_front_page()){
			wp_enqueue_script('home-jquery',get_stylesheet_directory_uri().'/lib/js/homepage-jquery.js');
		}
	}
}
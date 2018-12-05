<?php

/**
 * Load in scripts
 */

function origin_scripts() {
	// Load custom version of jQuery
	wp_deregister_script('jquery');
	wp_register_script('jquery', '//code.jquery.com/jquery-1.11.0.min.js', array(), null, true);
	wp_enqueue_script('jquery');

	wp_deregister_script('jquery-min');
	wp_register_script('jquery-min', '//code.jquery.com/jquery-migrate-1.2.1.min.js', array(), null, true);
	wp_enqueue_script('jquery-min');

	wp_register_script( 'slick', get_template_directory_uri().'/js/slick.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script('slick');

	// Load scripts.min.js
	wp_register_script( 'scripts', get_template_directory_uri().'/js/scripts.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'scripts' );
}

if( !is_admin() ) { add_action( 'wp_enqueue_scripts', 'origin_scripts', 11 ); }
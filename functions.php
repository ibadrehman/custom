<?php

/**
 * Theme customizations
 *
 * @package      Custom
 * @author       Ibad Rehman
 * @link         https://github.com/ibadrehman/custom
 * @copyright    Copyright (c) 2018, Ibad Rehman
 * @license      GPL-2.0+
 */

// Load child theme textdomain.
load_child_theme_textdomain( 'custom' );

add_action( 'genesis_setup', 'custom_setup',15);

function custom_setup() {

	// Define theme constants.
	define( 'CHILD_THEME_NAME', 'Custom' );
	define( 'CHILD_THEME_URL', 'https://github.com/ibadrehman/custom' );
	define( 'CHILD_THEME_VERSION', '1.0.0' );

	// Add HTML5 markup structure.
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'  ) );
	
	// Add viewport meta tag for mobile browsers.
	add_theme_support( 'genesis-responsive-viewport' );
	
	// Add theme support for accessibility.
	add_theme_support( 'genesis-accessibility', array(
		'404-page',
		'drop-down-menu',
		'headings',
		'rems',
		'search-form',
		'skip-links',
	) );

	// Add theme support for footer widgets.
	add_theme_support( 'genesis-footer-widgets', 3 );

		// Unregister layouts that use secondary sidebar.
	genesis_unregister_layout( 'content-sidebar-sidebar' );
	genesis_unregister_layout( 'sidebar-content-sidebar' );
	genesis_unregister_layout( 'sidebar-sidebar-content' );

	// Unregister secondary sidebar.
	unregister_sidebar( 'sidebar-alt' );


}

// Add Google Font stylesheet.
add_action( 'wp_enqueue_scripts', 'custom_equeue_styles' );

function custom_equeue_styles() {

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic|Lobster' );

}

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

add_action( 'genesis_meta', 'custom_home_page_setup' );

function custom_home_page_setup() {

	// Remove posts.
	remove_action( 'genesis_loop', 'genesis_do_loop' );


}

genesis();
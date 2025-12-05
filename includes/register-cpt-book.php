<?php
/**
 * Plugin Name: My Test Plugin
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register a custom post type `book`.
 */
function mtp_register_cpt_book() {
	$args = array(
		'label'        => 'Books',
		'public'       => true,
		'show_ui'      => true,
		'show_in_rest' => true,
		'supports'     => array( 'title', 'editor' ),
	);
	register_post_type( 'book', $args );
}
add_action( 'init', 'mtp_register_cpt_book' );

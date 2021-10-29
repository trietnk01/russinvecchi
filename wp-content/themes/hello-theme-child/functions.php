<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	$version = rand(1000, 100000);	
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		$version
	);
	wp_enqueue_style(
		'hello-elementor-child-common',
		get_stylesheet_directory_uri() . '/css/common.css',
		[
			'hello-elementor-theme-common',
		],
		$version
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );

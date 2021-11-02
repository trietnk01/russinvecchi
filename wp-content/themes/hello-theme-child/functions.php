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
		'hello-elementor-child-hello',
		get_stylesheet_directory_uri() . '/css/hello.css',
		array(),
		$version,'all'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );

// get page footer

// acf_add_options_page(array(
//     'page_title' => 'PAGE Footer',
//     'menu_title' => 'PAGE Footer',
//     'menu_slug' => 'p_footer',
//     'capability' => 'edit_posts',
//     'redirect' => admin_url('admin.php?page=page_option'),
// ));
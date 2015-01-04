<?php
/**
 * swimmy functions and definitions
 *
 * Set up the content width value based on the theme's design.
 *
 * @package swimmy
 *
 * @since swimmy 0.1.0
 */

/**
 * Enqueue scripts and styles for the front end.
 */
function swimmy_scripts() {
	wp_enqueue_style( 'swimmy', get_stylesheet_directory_uri() . '/dist/css/app.css', array( 'minnow-style' ) );

	wp_enqueue_script( 'swimmy-lib-script', get_stylesheet_directory_uri() . '/dist/js/lib.min.js', array( 'jquery' ) );

	wp_enqueue_script( 'swimmy-script', get_stylesheet_directory_uri() . '/dist/js/script.min.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'swimmy_scripts' );

?>
<?php
/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage noframe
 * @since 1.0
 */

function noframe_scripts() {
 	// Add custom fonts, used in the main stylesheet.
 	wp_enqueue_style( 'noframe-fonts', 'https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en');
 	// Add custom icons, used in the main stylesheet.
 	wp_enqueue_style( 'noframe-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons');
 	// Theme stylesheet.
 	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'noframe_scripts' );

?>

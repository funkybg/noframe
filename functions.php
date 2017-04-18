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
  // custom js
  wp_enqueue_script( 'jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', '', '',true );
  wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js', 'jQuery', '',true );
}
add_action( 'wp_enqueue_scripts', 'noframe_scripts' );

// remove wp-embed...
function my_deregister_scripts(){
 wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );
?>

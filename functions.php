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

 // function to disable crap
function disable_wp_emojicons() {
   // all actions related to emojis
   remove_action( 'admin_print_styles', 'print_emoji_styles' );
   remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
   remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
   remove_action( 'wp_print_styles', 'print_emoji_styles' );
   remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
   remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
   remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
   // filter to remove TinyMCE emojis
   add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
   add_filter( 'emoji_svg_url', '__return_false' );
}
add_action( 'init', 'disable_wp_emojicons' );
remove_action ('wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action( 'wp_head', 'wp_shortlink_wp_head');
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );
remove_action('rest_api_init', 'wp_oembed_register_route');
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
remove_action( 'wp_head', 'feed_links', 2 );
function disable_emojicons_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}

function noframe_scripts() {
 	// Add custom fonts, used in the main stylesheet.
 	wp_enqueue_style( 'noframe-fonts', 'https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en');
 	wp_enqueue_style( 'noframe-fonts', 'https://fonts.googleapis.com/css?family=Nunito+Sans:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en');
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

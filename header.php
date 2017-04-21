<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage noframe
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Noframe photography">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title><?php bloginfo('name'); ?><?php wp_title( '-', true, 'left' ); ?></title>
    <!-- Icons -->
    <meta name="theme-color" content="#ffffff">
    <!-- Page styles -->
		<?php wp_head(); ?>
  </head>
	<body class="mdc-typography mdl-color-text--blue-grey-800">

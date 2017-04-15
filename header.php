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
    <meta name="description" content="Nofram photography">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title><?php wp_title(); ?></title>
    <!-- Icons -->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/assets/images/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/assets/images/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/assets/images/manifest.json">
    <link rel="mask-icon" href="/assets/images/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/assets/images/favicon.ico">
    <meta name="msapplication-config" content="/assets/images/browserconfig.xml"> -->
    <meta name="theme-color" content="#ffffff">
    <!-- Page styles -->
		<?php wp_head(); ?>
  </head>
	<body class="mdc-typography mdl-color-text--blue-grey-800">
		<div class="pure-g content">

<?php
/**
 * Template Name: Family photography Page
 *
 *
 * @package WordPress
 * @subpackage noframe
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>
<div class="grid">
  <?php wp_nav_menu(array(
    'menu' => 'main',
    'container_class' => 'menu--header-container',
    'menu_class' => 'menu--header-menu'
  )) ?>
</div>
<div class="menu--sidebar mdl-color--grey-200">
  <?php wp_nav_menu(array(
    'menu' => 'sidebar',
    'container_class' => 'menu--sidebar-container',
    'menu_class' => 'menu--sidebar-menu'
  )) ?>
</div>
<div class="grid content--with-sidebar">
  Family photography
</div>
<?php get_footer(); ?>

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
<div class="menu--sidebar padding-top-40 <?php if ( is_page( 'family-photography' ) ): echo 'menu--root'; endif; ?>">
  <span class="menu--sidebar-title mdl-color-text--blue-500">NOFRAME<br />PHOTOGRAPHY</span>
  <?php wp_nav_menu(array(
    'menu' => 'sidebar-family',
    'container_class' => 'menu--sidebar-container padding-top-40',
    'menu_class' => 'menu--sidebar-menu'
  )) ?>
</div>
<div class="content--with-sidebar height--full">
  <div class="grid">
    <?php wp_nav_menu(array(
      'menu' => 'main',
      'container_class' => 'menu--header-container',
      'menu_class' => 'menu--header-menu'
    )) ?>
  </div>
  <div class="grid padding-top-40">
    <div class="width1 width--max-1200 center">
      <?php if ( is_page( 'portfolio' ) ):
          get_template_part( 'partials/page', 'portfolio' );
        elseif ( is_page( 'about' ) ):
          get_template_part( 'partials/page', 'about' );
        elseif ( is_page( 'prices' ) ):
          get_template_part( 'partials/page', 'prices' );
        else :
          get_template_part( 'partials/page', 'portfolio' );
      endif ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>

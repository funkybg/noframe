<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage noframe
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>
<div class="front-page--container">
  <div class="front-page--left mdl-color--blue-grey-300 mdl-color-text--white">
    <h1>NO FRAME<br />PHOTOGRAPHY</h1>
    <div class="front-page--left-menu">
      <p class="">Семейна фотография</p>
      <p class="">Бизнес</p>
      <p class="">Лични проекти</p>
    </div>
    <div class="front-page--left-action">
      <h1 class="mdc-typography--title">Научете повече</h1>
    </div>
  </div>
  <div class="front-page--right">
    <div class="slider--container">
      <div class="slide slider--slide-1"></div>
      <div class="slide slider--slide-2"></div>
    </div>
  </div>
</div>
<?php get_footer(); ?>

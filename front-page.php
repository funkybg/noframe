<?php
/**
 * The front page template file
 *
 *
 * @package WordPress
 * @subpackage noframe
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>
<div class="front-page--container">
  <div class="front-page--left">
    <div class="slider--container mdl-color--blue-100">
      <div class="slide slider--slide-1"></div>
      <div class="slide slider--slide-2"></div>
    </div>
  </div>
  <div class="front-page--right mdl-color--grey-200">
    <div class="front-page--right-inner">
      <h1 class="front-page--right-title">NOFRAME<br />PHOTOGRAPHY</h1>
      <div class="front-page--right-message mdl-color-text--grey-500">
        <p>Най-доброто място за семейна фотография,<br />фирмени снимки и лични проекти!</p>
      </div>
      <div class="front-page--right-action">
        <a href="#">
          <h1 class="front-page--right-button mdc-typography--title mdl-color-text--white">Научете повече</h1>
        </a>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>

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
<div class="grid height--full">
  <div class="front-page--left width1-2">
    <div class="slider--container mdl-color--blue-100">
      <div class="slide slider--slide-1"></div>
      <div class="slide slider--slide-2"></div>
    </div>
  </div>
  <div class="front-page--right width1-2 mdl-color--grey-200">
    <div class="front-page--right-inner">
      <h1 class="front-page--right-title">NOFRAME<br />PHOTOGRAPHY</h1>
      <div class="front-page--right-message mdl-color-text--blue-grey-400">
        <p>Най-доброто място за семейна фотография,<br />фирмени снимки и лични проекти!</p>
      </div>
      <div class="front-page--right-action">
        <a href="#learn-more" data-trigger="scroll" data-target="learn-more">
          <h1 class="front-page--right-button mdc-typography--title">Научете повече</h1>
        </a>
      </div>
      <div class="front-page--right-subaction">
        <span class="mdl-color-text--blue-grey-400">Или изберете категория:<br /></span>
        <a href="/family-photography/">
          <span class="front-page--right-subnav">Семейна фотография</span>
        </a>
        <span class="mdl-color-text--blue-grey-400"> / </span>
        <a href="/business-photography/">
          <span class="front-page--right-subnav">Бизнес фотография</span>
        </a>
        <span class="mdl-color-text--blue-grey-400"> / </span>
        <a href="/personal-projects/">
          <span class="front-page--right-subnav">Лични проекти</span>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="grid" id="learn-more">
  <div class="width1 content center">
    <div class="page--column width-1 padding-80-40">
      <h1 class="mdc-typography--title typography--center">Нашите услуги</h1>
      <p class="mdc-typography--body1 typography--center">
        Lorem Ipsum е елементарен примерен текст, използван в печатарската и типографската индустрия. Lorem Ipsum е индустриален стандарт от около 1500 година, когато неизвестен печатар взема няколко печатарски букви и ги разбърква, за да напечата с тях книга с примерни шрифтове. Този начин не само е оцелял повече от 5 века, но е навлязъл и в публикуването на електронни издания като е запазен почти без промяна.
      </p>
    </div>
  </div>
</div>
<div class="grid" id="learn-more">
  <div class="width1-3 padding-40 mdl-color--grey-200">
    <h1 class="mdc-typography--title mdl-color-text--light-blue-A400">Семейна фотография</h1>
    <p class="mdc-typography--body1">
      Lorem Ipsum е елементарен примерен текст, използван в печатарската и типографската индустрия. Lorem Ipsum е индустриален стандарт от около 1500 година, когато неизвестен печатар взема няколко печатарски букви и ги разбърква, за да напечата с тях книга с примерни шрифтове. Този начин не само е оцелял повече от 5 века, но е навлязъл и в публикуването на електронни издания като е запазен почти без промяна.
    </p>
    <a href="/family-photography/"
       class="button--more">
      Покажи повече
    </a>
  </div>
  <div class="width1-3 padding-40">
    <h1 class="mdc-typography--title mdl-color-text--light-blue-A400">Бизнес фотография</h1>
    <p class="mdc-typography--body1">
      Lorem Ipsum е елементарен примерен текст, използван в печатарската и типографската индустрия. Lorem Ipsum е индустриален стандарт от около 1500 година, когато неизвестен печатар взема няколко печатарски букви и ги разбърква, за да напечата с тях книга с примерни шрифтове. Този начин не само е оцелял повече от 5 века, но е навлязъл и в публикуването на електронни издания като е запазен почти без промяна.
    </p>
    <a href="/business-photography/"
       class="button--more">
      Покажи повече
    </a>
  </div>
  <div class="width1-3 padding-40 mdl-color--grey-100">
    <h1 class="mdc-typography--title mdl-color-text--light-blue-A400">Лични проекти</h1>
    <p class="mdc-typography--body1">
      Lorem Ipsum е елементарен примерен текст, използван в печатарската и типографската индустрия. Lorem Ipsum е индустриален стандарт от около 1500 година, когато неизвестен печатар взема няколко печатарски букви и ги разбърква, за да напечата с тях книга с примерни шрифтове. Този начин не само е оцелял повече от 5 века, но е навлязъл и в публикуването на електронни издания като е запазен почти без промяна.
    </p>
    <a href="/personal-projects/"
       class="button--more">
      Покажи повече
    </a>
  </div>
</div>
<?php get_footer(); ?>

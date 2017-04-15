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
<div class="pure-u-1">
	<img class="pure-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-outline.svg" alt="No frame photography logo">
</div>
<div class="pure-u-1 pure-u-md-1-3">
	<div class="card__front">
		<a href="#" class="card__front-link">
			<div class="card__front-image">
				<!-- <div class="card__front-overlay mdl-color--white mdl-color-text--blue-grey-900">
					Some short test asdasdadwa awd aw daw da wd asdasdadwa awd aw daw da wd asdasdadwa awd aw daw da wd asdasdadwa awd aw daw da wd Some short test asdasdadwa awd aw daw da wd asdasdadwa awd aw daw da wd asdasdadwa awd aw daw da wd asdasdadwa awd aw daw da wdSome short test asdasdadwa awd aw daw da wd asdasdadwa awd aw daw da wd asdasdadwa awd aw daw da wd asdasdadwa awd aw daw da wdSome short test asdasdadwa awd aw daw da wd asdasdadwa awd aw daw da wd asdasdadwa awd aw daw da wd asdasdadwa awd aw daw da wdSome short test asdasdadwa awd aw daw da wd asdasdadwa awd aw daw da wd asdasdadwa awd aw daw da wd asdasdadwa awd aw daw da wd
				</div> -->
				<img class="pure-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sample-kids.jpg" alt="No frame photography kids">
				<div class="card__front-shape">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
			    	<polygon fill="#ffffff" points="100,100 0,0 0,100"/>
			  	</svg>
					<span class="mdc-typography--caption mdl-color-text--white mdl-color--orange-400"><i class="material-icons">toys</i><span class="card__front-label">noframe KIDS</span></span>
				</div>
			</div>
			<div class="card__front-content padding-16">
				<h1 class="mdc-typography--title mdl-color-text--blue-grey-800">Детски фотосесии</h1>
				<p class="mdc-typography--body mdl-color-text--blue-grey-400">Lorem ipsum е един от най-често използваните в печатарството и графичния дизайн заготовъчни текстове [1].</p>
			</div>
		</a>
	</div>
</div>
<div class="pure-u-1 pure-u-md-1-3">
	<div class="card__front">
		<a href="#" class="card__front-link">
			<div class="card__front-image">
				<img class="pure-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sample-portrait.jpg" alt="No frame photography kids">
				<div class="card__front-shape">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
			    	<polygon fill="#ffffff" points="100,100 0,0 0,100"/>
			  	</svg>
					<!-- <span class="mdc-typography--caption mdl-color-text--white mdl-color--indigo-400"><i class="material-icons">camera</i><span class="card__front-label">noframe PORTRAITS</span></span> -->
					<span class="mdc-typography--caption mdl-color-text--white mdl-color--indigo-400">noframe PORTRAITS</span>
				</div>
			</div>
			<div class="card__front-content padding-16">
				<h1 class="mdc-typography--title mdl-color-text--blue-grey-800">Лични фотосесии</h1>
				<p class="mdc-typography--body mdl-color-text--blue-grey-400">Lorem ipsum е един от най-често използваните в печатарството и графичния дизайн заготовъчни текстове [1].</p>
			</div>
		</a>
	</div>
</div>
<div class="pure-u-1 pure-u-md-1-3">
	<div class="card__front">
		<a href="#" class="card__front-link">
			<div class="card__front-image">
				<img class="pure-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sample-kids.jpg" alt="No frame photography kids">
				<div class="card__front-shape">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
			    	<polygon fill="#ffffff" points="100,100 0,0 0,100"/>
			  	</svg>
					<span class="mdc-typography--caption mdl-color-text--white mdl-color--blue-500"><i class="material-icons">business</i><span class="card__front-label">noframe BUSINESS</span></span>
				</div>
			</div>
			<div class="card__front-content padding-16">
				<h1 class="mdc-typography--title mdl-color-text--blue-grey-800">Бизнес фотосесии</h1>
				<p class="mdc-typography--body mdl-color-text--blue-grey-400">Lorem ipsum е един от най-често използваните в печатарството и графичния дизайн заготовъчни текстове [1].</p>
			</div>
		</a>
	</div>
</div>
<?php get_footer(); ?>

<?php
  // Find the parent page and filter for the corresponding about post
  $post_data = get_post($post->post_parent);
  $parent_slug = $post_data->post_name;
  $my_post = new WP_Query( array( 'tag' => 'about', 'category_name' => $parent_slug ) );
  $my_post->the_post();
?>
<div class="page--about">
  <div class="center image"></div>
  <h1 class="front-page--right-title mdl-color-text--blue-500"><?php echo get_the_title(); ?></h1>
  <p><?php echo get_the_content(); ?></p>
</div>

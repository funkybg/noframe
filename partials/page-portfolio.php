<div class="grid">
<?php
  // Find the parent page and filter for the corresponding about post
  $post_data = get_post($post->post_parent);
  $parent_slug = $post_data->post_name;
  $my_post = new WP_Query( array( 'tag' => 'portfolio', 'category_name' => $parent_slug ) );
  $my_post->the_post();
  $gallery = get_post_gallery( get_the_ID(), false);
  $ids = explode( ",", $gallery['ids'] );
  foreach( $ids as $id ) :
    $link = wp_get_attachment_url( $id );
    $thumb = wp_get_attachment_thumb_url( $id ); ?>
    <div class="width1-4">
      <a href="<?php echo $link; ?>" data-trigger="modal" data-target="modal-portfolio">
        <img src="<?php echo $thumb; ?>"
             width="100%"
             height="auto"
             class="pure-img"
             alt="Portfolio - family" />
        </a>
    </div>
  <?php
  endforeach;
?>
</div>
<div id="modal-portfolio" class="modal hidden" data-trigger="close">
  <img src="http://noframe.dev/wp-content/uploads/2017/04/sample-kids.jpg"
       width="100%"
       height="auto"
       class="modal--image-container"
       alt="Portfolio - family"/>
  <span class="modal--button-close">&times;</span>
</div>

<div class="panel panel-primary post_card">
	
  <div class="panel-heading">
    <h3 class="panel-title"><a href="<?php the_permalink(); ?>"><?php $post_title = esc_html(get_the_title()); echo $post_title; ?>
  </a></h3>
  </div>
  <div class="panel-body post_card_body">
  	<?php if ( has_post_thumbnail() ) {$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');} ?>
  	<img class="post_card_img" src="<?php echo $featured_img_url; ?>">
  </div>
</div>
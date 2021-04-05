<div class="row">
	<div class="col-md-2">
		<?php if ( has_post_thumbnail() ) {$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?><img class="post_card_img" src="<?php echo $featured_img_url; ?>"><?php } ?>
	</div>
	<div class="col-md-8">
		<h1 class="blog-post-title archive_page"><a href="<?php the_permalink(); ?>"><?php $post_title = esc_html(get_the_title()); echo $post_title; ?></a></h1>
          <p class="blog-post-meta archive_page_post_meta">
            <span class="thetime date updated">
              <i class="fa fa-calendar"></i> <span><?php the_date(); ?></span>
            </span>&nbsp;&nbsp;
            <span class="thecategory">
              <i class="fa fa-tags"></i> 
              <a href="#"><?php the_category(', '); ?></a>
            </span>&nbsp;&nbsp;
            <span class="the_author">
              <i class="fa fa-user"></i> 
              <a href="<?php echo get_the_author_link(); ?>"><?php the_author(); ?></a>
            </span>&nbsp;&nbsp;
          </p>
		<?php the_excerpt(); ?>
	</div>
  <div class="col-md-2">
    <p style="text-align: center;">
      <a href="<?php the_permalink(); ?>" class="text-center">
        <span class="download_icon download_icon_cat_page"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></span><br>
        <span class="download_icon download_btn_txt">Download Now</span>
      </a>
    </p>
  </div>
	<div class="col-md-12">
		<hr>
	</div>
	
</div>
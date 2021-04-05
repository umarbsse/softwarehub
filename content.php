<div class="single_page">     
    <div id="post-<?php the_ID(); ?>" <?php post_class('g post'); ?>>
      <h1 class="title entry-title">
        <?php $post_title = esc_html(get_the_title()); echo $post_title; ?>
      </h1>
      <p class="blog-post-meta">
        <span class="thetime date updated">
          <i class="fa fa-calendar"></i> <span><?php the_date(); ?></span>
        </span>&nbsp;&nbsp;
        <span class="thecategory">
          <i class="fa fa-tags"></i> 
          <a href="#"><?php the_category(', '); ?></a>
        </span>&nbsp;&nbsp;
        <span class="postauthor">
          <i class="fa fa-user"></i><span class="vcard author"><span class="fn"><?php the_author(); ?></span></span>
        </span>&nbsp;&nbsp;
        <span class="thecomment">
          <i class="fa fa-comments"></i> <a href="#"><?php echo get_comments_number(); ?> Comments</a>
        </span>&nbsp;&nbsp;
      </p>
      <?php echo get_theme_breadcrumbs($post_title); ?>
      <div class="post-content box mark-links entry-content" style="padding: 10px;margin: 23px 0px 10px 0px;" >
        <?php the_content(); ?>
        <hr>
      </div>
    </div>
</div>
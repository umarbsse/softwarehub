<?php get_header(); ?>
 <div style="background-color:#ffffff;" class="container">
      <div class="row" style="padding-top: 40px;background: #ffffff;">
        <div class="col-md-9">
        <header class="page-header">
          <?php if ( have_posts() ) : ?>
            <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyseventeen' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
          <?php else : ?>
            <h1 class="page-title"><?php _e( 'Nothing Found', 'twentyseventeen' ); ?></h1>
          <?php endif; ?>
        </header>
        <br>
    <?php
    if ( have_posts() ) : ?>
      <?php
      while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content-archive', get_post_format() );
      endwhile;
    else :
      get_template_part( 'template-parts/no-archive', 'none' );
    endif;
    ?>
    <?php bootstrap_pagination(); ?>
        </div>
        <div class="col-md-3">
          <?php require 'sidebar.php'; ?>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
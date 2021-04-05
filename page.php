<?php get_header(); ?>
 <div style="background-color:#ffffff;" class="container">
      <div class="row" style="padding-top: 60px;background: #ffffff;">
        <div class="col-md-9">          
		<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
				if ( comments_open() || get_comments_number() ) :
				  comments_template();
				endif;
			endwhile; endif;
		?>
        </div>
        <div class="col-md-3">
          <?php require 'sidebar.php'; ?>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
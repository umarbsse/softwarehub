<?php get_header(); ?>
 <div style="background-color:#ffffff;" class="container">
      <div class="row" style="padding-top: 40px;background: #ffffff;">
        <div class="col-md-4">
          <?php require 'additional_sidebar.php'; ?>
        </div>
        <div class="col-md-8">
        <?php
        	the_archive_title( '<h1 class="page-title catagory_heading">', '</h1>' );
        	the_archive_description( '<div class="taxonomy-description">', '</div>' );
        ?>
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
      </div>
    </div>
<?php get_footer(); ?>
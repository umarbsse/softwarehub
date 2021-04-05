<footer id="site-footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
<footer class="support about">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-xs-12">
        <h2 class="color-white">Popular Softwares</h2>
      </div>
      <div class="col-md-4 col-xs-12">
        <?php
          $args = array('numberposts' => 10, 'category'=>5);
          $latest_posts = get_posts( $args );
          foreach ($latest_posts as $post) {
            setup_postdata( $post );
            if ( has_post_thumbnail() ) {$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');}
        ?>
        <ul>
          <li>
            <a title="<?php the_title_attribute(); ?>" class="color-white foot_link" href="<?php the_permalink(); ?>">  <?php echo process_title(get_the_title());?>
            </a>
          </li>
        </ul>
        <?php } ?>
      </div>
      <div class="col-md-4 col-xs-12">
        <?php
          $args = array('numberposts' => 10, 'category'=>7);
          $latest_posts = get_posts( $args );
          foreach ($latest_posts as $post) {
            setup_postdata( $post );
            if ( has_post_thumbnail() ) {$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');}
        ?>
        <ul>
          <li>
            <a title="<?php the_title_attribute(); ?>" class="color-white foot_link" href="<?php the_permalink(); ?>">  <?php echo process_title(get_the_title());?>
            </a>
          </li>
        </ul>
        <?php } ?>
      </div>
      <div class="col-md-4 col-xs-12">
        <?php
          $args = array('numberposts' => 10, 'category'=>'27,32,88,47');
          $latest_posts = get_posts( $args );
          foreach ($latest_posts as $post) {
            setup_postdata( $post );
            if ( has_post_thumbnail() ) {$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');}
        ?>
        <ul>
          <li>
            <a title="<?php the_title_attribute(); ?>" class="color-white foot_link" href="<?php the_permalink(); ?>">  <?php echo process_title(get_the_title());?>
            </a>
          </li>
        </ul>
        <?php } ?>
      </div>
    </div>
  </div>
</footer>
<footer class="support">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-xs-12">
        <h3 class="color-white">Need Help</h3>
      </div>
      <div class="col-md-4 col-xs-12">
        <h3 class="color-white">
          <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <?php echo get_option('contact_phone'); ?>
        </h3>
      </div>
      <div class="col-md-4 col-xs-12">
        <h3 class="color-white">
          <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <?php echo get_option('contact_email'); ?>
        </h3>
      </div>
    </div>
  </div>
</footer>
  <footer class="footer_last_section">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h4 class="color-white">Copyright &copy; <?php echo date('Y'); ?></h4>
        </div>
        <div class="col-md-7">
          <p class="pull-right">              
              <a href="<?php echo get_option('facebook'); ?>"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/social/fb.png"> </a>
              <a href="<?php echo get_option('twitter'); ?>"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/social/tw.png"> </a>
              <a href="<?php echo get_option('gplus'); ?>"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/social/g.png"> </a>
              <a href="<?php echo get_option('insta'); ?>"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/social/ln.png"> </a>
            </p>
        </div>
      </div>
    </div>
  </footer>    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 </footer>


    <script src="<?php echo get_bloginfo( 'template_directory' );?>/assets/js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_bloginfo( 'template_directory' );?>/assets/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
    <script src="<?php echo get_bloginfo( 'template_directory' );?>/assets/plugins/iCheck/icheck.min.js"></script> 
        <script src="<?php echo get_bloginfo( 'template_directory' );?>/assets/plugins/select2/select2.full.min.js"></script>
    <script src="<?php echo get_bloginfo( 'template_directory' );?>/assets/js/custom.js"></script> 
<?php wp_footer(); ?> 
</body>
</html>
<?php get_header(); ?>
      <section class="block">
    <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="active item ">
             <!--   <img src="http://192.168.2.173/etib/assets/images/slider/slider1.jpg" class="img-responsive" alt="Responsive image" /> -->
                <img style="opacity: 0.8;" src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/slider.jpg" class="img-responsive slider_custom_img" alt="Responsive image" />
                <div class="carousel-caption">
                    <form id="find_software" method="get" action="<?php echo get_site_url(); ?>">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <h2 class="find_software_heading text-center">Search any software you want!</h2>
                            </div>
                        <div class="col-md-2 col-sm-12 col-xs-12">
                        </div>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                        	<div class="input-group input-group-lg">
						      <input type="text" name="s" autocomplete="off" id="keyword" onkeyup="fetch()" class="form-control" placeholder="Windows 10, Office 365 etc...">
						      <span class="input-group-btn">
						        <button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Go!</button>
						      </span>
						    </div><!-- /input-group -->
                            <div id="datafetch"></div>
                        </div>
                        <div class="col-md-2 col-sm-12 col-xs-12">
                        </div>
                        </div>
                    </form>
                </div>
                <div class="after">&nbsp;</div>
            </div>
        </div>
       <!-- <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a> -->
    </div>
</section>  
<div class="home_chose_best_dt_body_inner">
  	<div class="container">
		  <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 text-center">
				<h1 style="color: #185387;display: inline;">
					<span style="color: #10b2ca;">Request a custom software upload</span>&nbsp;&nbsp;&nbsp;
					<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;
					<a href="http://192.168.2.173/etib/find" class="btn btn-warning btn-lg" style="background-color: #ff7d0c;border-color: #FB7500;border-bottom: 5px solid #C36717;border-radius: 4px;">
						<i class="fa fa-search"></i>&nbsp;&nbsp;Request Now
					</a>
				</h1>
			</div>
		  </div>
	</div>
  </div>
  <div class="home_find_doc_by_body_inner">
  	<div class="container">
        <div class="row">
            <div class="col-md-8 home_page_main_grid">
        		<div class="row">
        			<div class="col-md-6 col-sm-12 col-xs-12 home_page_main_grid">
        					<section class="panel panel-info panel_home_page">
        						<div class="panel-heading">
                                    <i class="fa fa-windows"></i> Windows
                                    <a href="<?php echo esc_url( get_category_link( 5 ) ); ?>" class="btn btn-xs pull-right pd-l-sm pd-r-sm">[+] View All</a>
                                </div>
        						<ul class="list-group">
        							<?php
        								$args = array('numberposts' => 5, 'category'=>5);
        								$latest_posts = get_posts( $args );
        								foreach ($latest_posts as $post) {
        									setup_postdata( $post );
        									if ( has_post_thumbnail() ) {$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');}
                                        			/*<p></p>*/
                                        	?>
                                            <li class="list-group-item">
                                                <span class="pull-left mg-t-xs mg-r-md">
                                                	<img src="<?php echo $featured_img_url; ?>" class="avatar avatar-sm img-circle home_post_img" alt="">
                                                </span>
                                                <div class="show no-margin pd-t-xs">
                                                	<p class="blog-post-meta panel_post_title">
                                                		<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php echo process_title(get_the_title());
                                                		?></a>
                                                	</p>
                                                </div><br>
                                            </li>
                                        <?php } ?>
                                </ul>
                            </section>
        			</div>
                    <div class="col-md-6 col-sm-12 col-xs-12 home_page_main_grid">
                            <section class="panel panel-info panel_home_page">
                                <div class="panel-heading">
                                    <i class="fa fa-file-word-o"></i> Microsoft Office
                                    <a href="<?php echo esc_url( get_category_link( 7 ) ); ?>" class="btn btn-xs pull-right pd-l-sm pd-r-sm">[+] View All</a>
                                </div>
                                <ul class="list-group">
                                    <?php
                                        $args = array('numberposts' => 5, 'category'=>7);
                                        $latest_posts = get_posts( $args );
                                        foreach ($latest_posts as $post) {
                                            setup_postdata( $post );
                                            if ( has_post_thumbnail() ) {$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');}
                                            ?>
                                            <li class="list-group-item">
                                                <span class="pull-left mg-t-xs mg-r-md">
                                                    <img src="<?php echo $featured_img_url; ?>" class="avatar avatar-sm img-circle home_post_img" alt="">
                                                </span>
                                                <div class="show no-margin pd-t-xs">
                                                    <p class="blog-post-meta panel_post_title">
                                                        <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php echo process_title(get_the_title());
                                                        ?></a>
                                                    </p>
                                                </div><br>
                                            </li>
                                        <?php } ?>
                                </ul>
                            </section>
                    </div>
        		</div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 home_page_main_grid">
                            <section class="panel panel-info panel_home_page">
                                <div class="panel-heading">
                                    <i class="fa fa-file-image-o"></i> Adobe
                                    <a href="<?php echo esc_url( get_category_link( 38 ) ); ?>" class="btn btn-xs pull-right pd-l-sm pd-r-sm">[+] View All</a>
                                </div>
                                <ul class="list-group">
                                    <?php
                                        $args = array('numberposts' => 5, 'category'=>38);
                                        $latest_posts = get_posts( $args );
                                        foreach ($latest_posts as $post) {
                                            setup_postdata( $post );
                                            if ( has_post_thumbnail() ) {$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');}
                                                    /*<p></p>*/
                                            ?>
                                            <li class="list-group-item">
                                                <span class="pull-left mg-t-xs mg-r-md">
                                                    <img src="<?php echo $featured_img_url; ?>" class="avatar avatar-sm img-circle home_post_img" alt="">
                                                </span>
                                                <div class="show no-margin pd-t-xs">
                                                    <p class="blog-post-meta panel_post_title">
                                                        <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php echo process_title(get_the_title());
                                                        ?></a>
                                                    </p>
                                                </div><br>
                                            </li>
                                        <?php } ?>
                                </ul>
                            </section>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 home_page_main_grid">
                            <section class="panel panel-info panel_home_page">
                                <div class="panel-heading">
                                    <i class="fa fa-bolt"></i> Utilities
                                    <a href="<?php echo esc_url( get_category_link( 47 ) ); ?>" class="btn btn-xs pull-right pd-l-sm pd-r-sm">[+] View All</a>
                                </div>
                                <ul class="list-group">
                                    <?php
                                        $args = array('numberposts' => 5, 'category'=>'32,88,358,34,53');
                                        $latest_posts = get_posts( $args );
                                        foreach ($latest_posts as $post) {
                                            setup_postdata( $post );
                                            if ( has_post_thumbnail() ) {$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');}
                                                    /*<p></p>*/
                                            ?>
                                            <li class="list-group-item">
                                                <span class="pull-left mg-t-xs mg-r-md">
                                                    <img src="<?php echo $featured_img_url; ?>" class="avatar avatar-sm img-circle home_post_img" alt="">
                                                </span>
                                                <div class="show no-margin pd-t-xs">
                                                    <p class="blog-post-meta panel_post_title">
                                                        <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php echo process_title(get_the_title());
                                                        ?></a>
                                                    </p>
                                                </div><br>
                                            </li>
                                        <?php } ?>
                                </ul>
                            </section>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-md-6 col-sm-12 col-xs-12 home_page_main_grid">
                            <section class="panel panel-info panel_home_page">
                                <div class="panel-heading">
                                    <i class="fa fa-code"></i> Development
                                    <a href="<?php echo esc_url( get_category_link( 47 ) ); ?>" class="btn btn-xs pull-right pd-l-sm pd-r-sm">[+] View All</a>
                                </div>
                                <ul class="list-group">
                                    <?php
                                        $args = array('numberposts' => 5, 'category'=>47);
                                        $latest_posts = get_posts( $args );
                                        foreach ($latest_posts as $post) {
                                            setup_postdata( $post );
                                            if ( has_post_thumbnail() ) {$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');}
                                                    /*<p></p>*/
                                            ?>
                                            <li class="list-group-item">
                                                <span class="pull-left mg-t-xs mg-r-md">
                                                    <img src="<?php echo $featured_img_url; ?>" class="avatar avatar-sm img-circle home_post_img" alt="">
                                                </span>
                                                <div class="show no-margin pd-t-xs">
                                                    <p class="blog-post-meta panel_post_title">
                                                        <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php echo process_title(get_the_title());
                                                        ?></a>
                                                    </p>
                                                </div><br>
                                            </li>
                                        <?php } ?>
                                </ul>
                            </section>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 home_page_main_grid">
                            <section class="panel panel-info panel_home_page">
                                <div class="panel-heading">
                                    <i class="fa fa-shield"></i> Antivirus
                                    <a href="<?php echo esc_url( get_category_link( 27 ) ); ?>" class="btn btn-xs pull-right pd-l-sm pd-r-sm">[+] View All</a>
                                </div>
                                <ul class="list-group">
                                    <?php
                                        $args = array('numberposts' => 5, 'category'=>27);
                                        $latest_posts = get_posts( $args );
                                        foreach ($latest_posts as $post) {
                                            setup_postdata( $post );
                                            if ( has_post_thumbnail() ) {$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');}
                                                    /*<p></p>*/
                                            ?>
                                            <li class="list-group-item">
                                                <span class="pull-left mg-t-xs mg-r-md">
                                                    <img src="<?php echo $featured_img_url; ?>" class="avatar avatar-sm img-circle home_post_img" alt="">
                                                </span>
                                                <div class="show no-margin pd-t-xs">
                                                    <p class="blog-post-meta panel_post_title">
                                                        <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php echo process_title(get_the_title());
                                                        ?></a>
                                                    </p>
                                                </div><br>
                                            </li>
                                        <?php } ?>
                                </ul>
                            </section>
                    </div>
                </div>
            </div>
            <div class="col-md-4 home_page_main_grid"><?php require 'sidebar.php'; ?></div>
        </div>
	</div>
  </div>
<?php get_footer(); ?>
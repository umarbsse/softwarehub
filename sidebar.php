<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
  return;
}*/
?>

<aside id="primary" class="widget-area" role="complementary" itemscope itemtype="http://schema.org/WPSideBar">
  <div class="widget widget_categories panel panel-warning widget_panel">
  	<div class="panel-heading"><h3 class="widget-title panel-title">Categories</h3></div>
  	<div class="panel-body">
  		<ul class="list-group">
  			<?php
  				$catagory_array = array(
  										array('img_url'=>'/assets/images/catagories_images/adobe.png','cat_id'=>38,'name'=>'Adobe'),
  										array('img_url'=>'/assets/images/catagories_images/antivirus.jpg','cat_id'=>27,'name'=>'Antivirus'),
  										array('img_url'=>'/assets/images/catagories_images/browsers.png','cat_id'=>32,'name'=>'Browser'),
  										array('img_url'=>'/assets/images/catagories_images/corel.jpg','cat_id'=>53,'name'=>'Corel'),
  										array('img_url'=>'/assets/images/catagories_images/coding.jpg','cat_id'=>47,'name'=>'Development'),
  										array('img_url'=>'/assets/images/catagories_images/message.jpg','cat_id'=>88,'name'=>'Messaging'),
  										array('img_url'=>'/assets/images/catagories_images/office.png','cat_id'=>7,'name'=>'Microsoft Office'),
  										array('img_url'=>'/assets/images/catagories_images/multimedia.jpg','cat_id'=>98,'name'=>'Multi Media'),
  										array('img_url'=>'/assets/images/catagories_images/win.png','cat_id'=>5,'name'=>'Windows'),
  									);
  				for ($i=0; $i <count($catagory_array) ; $i++) {
  			?>
  			<li class="list-group-item">
  				<span class="pull-left mg-t-xs mg-r-md">
  					<img src="<?php echo get_bloginfo( 'template_directory' ).$catagory_array[$i]['img_url'];?>" class="avatar avatar-sm img-circle home_post_img" alt="">
  				</span>
  				<div class="show no-margin pd-t-xs">
  					<p class="blog-post-meta panel_post_title widget_cat_title">
  						<a title="<?php echo $catagory_array[$i]['name'];?>" href="<?php echo esc_url( get_category_link( $catagory_array[$i]['cat_id'] ) ); ?>"><?php echo $catagory_array[$i]['name'];?><span class="pull-right download_icon" ><i class="fa fa-download" aria-hidden="true"></i></span></a>  						
  					</p>
  				</div>
  			</li>  
  			<?php } ?>     
  		</ul>
  	</div>
  </div>
  <div class="widget widget_categories panel panel-warning widget_panel">
  	<div class="panel-heading"><h3 class="widget-title panel-title">Popular Posts</h3></div>
  	<div class="panel-body">
  		<ul class="list-group">

							<?php
								$args = array('numberposts' => 5, 'include'=>'190,1262,204,224,868,607,1424,652','orderby' => 'title','order' => 'ASC',);
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
  					<p class="blog-post-meta panel_post_title widget_cat_title">
  						<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php echo process_title(get_the_title());
                                        		?></a>
  					</p>
  				</div>
  			</li>
                                <?php } ?>    
  		</ul>
  	</div>
  </div>
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->


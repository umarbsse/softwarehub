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
<h1 class="page-title catagory_heading">All Catagories</h1>
<div class="panel-group" id="accordion">
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
        <div class="panel cat_panel">
          <div class="panel-heading cat_panel_heading">
                  <img src="<?php echo get_bloginfo( 'template_directory' ).$catagory_array[$i]['img_url'];?>" class="avatar avatar-sm img-circle home_post_img catagory_post_img" alt="">&nbsp;<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" class="collapsed cat_main_panel">
              <?php echo $catagory_array[$i]['name'];?> <span class="pull-right">[+]</span>
            </a>
          </div>
          <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse" style="height: 0px;">
            <div class="panel-body cat_panel_body">
              <ul class="list-group">
                <?php
                $categories=get_categories(
                  array( 'parent' => $catagory_array[$i]['cat_id'],'orderby' => 'name','order'   => 'ASC' ));
                //var_dump($categories);
                foreach ($categories as $cat) {
                ?>
                <li class="list-group-item">
                  <a href="<?php echo esc_url( get_category_link($cat->term_id) ); ?>"><?php echo $cat->name;?></a>
                </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
        <?php } ?>
</div>
</aside><!-- #secondary -->


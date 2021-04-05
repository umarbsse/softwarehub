<?php
    add_theme_support( 'title-tag' );
    function get_theme_breadcrumbs($post_title=null){
        $breadcrumb = '<div class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">';
        $breadcrumb.= '<div typeof="v:Breadcrumb" class="root inline_block"><a rel="v:url" property="v:title" href="'.get_site_url().'">Home</a></div>&nbsp;&nbsp;';
        $categories = get_the_category();
        if ( ! empty( $categories ) ) {
            for ($i=0; $i <count($categories) ; $i++){
                $breadcrumb.= '<div class="inline_block"><i class="fa fa-angle-double-right"></i></div>&nbsp;&nbsp;';
                $breadcrumb.= '<div typeof="v:Breadcrumb" class="inline_block"><a href="' . esc_url( get_category_link( $categories[$i]->term_id ) ) . '" rel="v:url" property="v:title">' . esc_html( $categories[$i]->name ) . '</a></div>&nbsp;&nbsp;';
            }
        } 
        $breadcrumb.= '<div class="inline_block"><i class="fa fa-angle-double-right"></i></div>&nbsp;&nbsp;';
        $breadcrumb.= '<div class="inline_block"><span>'.$post_title.'</span></div>';
        $breadcrumb.= '</div>';
        return $breadcrumb;
    }
    function bootstrap_pagination( $echo = true ) {
        global $wp_query;

        $big = 999999999; // need an unlikely integer

        $pages = paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages,
                'type'  => 'array',
                'prev_next'   => true,
                'prev_text'    => __('« Prev'),
                'next_text'    => __('Next »'),
            )
        );

        if( is_array( $pages ) ) {
            $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');

            $pagination = '<ul class="pagination pagination-lg">';

            foreach ( $pages as $page ) {
                $pagination .= "<li>$page</li>";
            }

            $pagination .= '</ul>';

            if ( $echo ) {
                echo $pagination;
            } else {
                return $pagination;
            }
        }
    }
    function softwarehub_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Sidebar', 'gnarlyweb' ),
        'id' => 'sidebar-1',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s panel panel-warning widget_panel">',
        'before_title' => '<div class="panel-heading"><h3 class="widget-title panel-title">',
        'after_title' => '</h3></div><div class="panel-body">',

        // this is logically where the widget's content will be printed. The rest wraps around it.

         'after_widget' => '</div></div>',
            ) );
    } /* Repeat register_sidebar() code for additional sidebars. */
    add_action( 'widgets_init', 'softwarehub_widgets_init' );
    function register_my_menus() {
        register_nav_menus(
            array(
                'header-menu' => __( 'Header Menu' ),
                'extra-menu' => __( 'Extra Menu' )
            )
        );
    }
    add_action( 'init', 'register_my_menus' );
    function process_title($title){
        $arr = array("Free","Download","Offline","Installer","ISO");
        for ($i=0; $i <count($arr) ; $i++) { 
           $title = str_replace($arr[$i]." ", "", $title);
           $title = str_replace(strtolower($arr[$i])." ", "", $title);
           $title = str_replace($arr[$i], "", $title);
           $title = str_replace(strtolower($arr[$i]), "", $title);
        }
        return $title;
    }
    add_theme_support( 'post-thumbnails' );
    
    function custom_settings_add_menu() {
      add_menu_page( 'Theme Settings', 'Theme Settings', 'manage_options', 'softwarehub-settings', 'softwarehub_settings_page', null, 99 );
    }
    add_action( 'admin_menu', 'custom_settings_add_menu' );
    function softwarehub_settings_page() { ?>
      <div class="wrap">
        <h1>Custom Settings</h1>
        <form method="post" action="options.php">
           <?php
               settings_fields( 'section' );
               do_settings_sections( 'theme-options' );      
               submit_button(); 
           ?>          
        </form>
      </div>
    <?php }
    function setting_twitter() { ?>
      <input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
    <?php }
    function setting_facebook() { ?>
      <input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
    <?php }
    function setting_gplus() { ?>
      <input type="text" name="gplus" id="gplus" value="<?php echo get_option('gplus'); ?>" />
    <?php }
    function setting_insta() { ?>
      <input type="text" name="insta" id="insta" value="<?php echo get_option('insta'); ?>" />
    <?php }
    function setting_contact_phone() { ?>
      <input type="text" name="contact_phone" id="contact_phone" value="<?php echo get_option('contact_phone'); ?>" />
    <?php }
    function setting_contact_email() { ?>
      <input type="text" name="contact_email" id="contact_email" value="<?php echo get_option('contact_email'); ?>" />
    <?php }
    function custom_settings_page_setup() {
      add_settings_section( 'section', 'All Settings', null, 'theme-options' );
      $array = array("twitter","facebook","gplus","insta","contact_phone","contact_email");
      for ($i=0; $i <count($array) ; $i++) { 
        if ($array[$i]=="contact_phone") {
            $support_phone = "Contact Phone";
            add_settings_field( $array[$i], $support_phone.' URL', 'setting_'.$array[$i], 'theme-options', 'section' );
        }else if ($array[$i]=="contact_email") {
            $support_email = "Contact Email";
            add_settings_field( $array[$i], $support_email.' URL', 'setting_'.$array[$i], 'theme-options', 'section' );
        }else{
            add_settings_field( $array[$i], $array[$i].' URL', 'setting_'.$array[$i], 'theme-options', 'section' );
        }
        register_setting('section', $array[$i]);
      }
    }
    add_action( 'admin_init', 'custom_settings_page_setup' );
    function new_excerpt_more($more) {
   global $post;
   return '...';
  // return '... <a class="btn btn-default" href="'. get_permalink($post->ID) . '">' . '<i class="fa fa-download" aria-hidden="true"></i> Read More' . '</a>';
   }
   add_filter('excerpt_more', 'new_excerpt_more');
   function admin_bar(){

  if(is_user_logged_in()){
    add_filter( 'show_admin_bar', '__return_true' , 1000 );
  }
}
add_action('init', 'admin_bar' );


  function blog_posting_schema() {
    if(is_single()==true){
      $post_data = get_post();
      $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full" );
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      echo '<script type="application/ld+json">
      {
          "@context": "http://schema.org",
          "@type": "BlogPosting",
          "mainEntityOfPage": {
              "@type": "WebPage",
              "@id": "'.get_permalink().'"
          },
          "headline": "'. $post_data->post_title.'",
          "image": {
              "@type": "ImageObject",
              "url": "'.$image_data[0].'",
              "width": '.$image_data[1].',
              "height": '.$image_data[2].'
          },
          "datePublished": "'.get_the_date('c').'",
          "dateModified": "'.get_post_modified_time('c').'",
          "author": {
              "@type": "Person",
              "name": "'.get_the_author().'"
          },
          "publisher": {
              "@type": "Organization",
              "name": "'.get_bloginfo( 'name' ).'",
              "logo": {
                  "@type": "ImageObject",
                  "url": "'.$image[0].'",
                  "width": "'.$image[1].'",
                  "height": "'.$image[2].'"
              }
          },
          "description": "'. substr($post_data->post_content, 0, 200).'"
      }
      </script>';
    }
  }
  add_action('wp_head', 'blog_posting_schema');

  function theme_prefix_setup() {
  
  add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
  ) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );
function get_custom_log(){
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  return $image[0];
}
// add the ajax fetch js
add_action( 'wp_footer', 'ajax_fetch' );
function ajax_fetch() {
?>
<script type="text/javascript">
function fetch(){
  var timeout;
  if (jQuery('#keyword').val().length>3) {
    if (timeout) {  
      clearTimeout(timeout);
    }
    timeout = setTimeout(function() {
      doSearch(); //this is your existing function
    }, 1000);
  }
}
function doSearch(){
      var waiting = '<div class="row"><div class="col-md-12 text-center"><h3 class="ajax_search_title"><i class="fa fa-spinner fa-pulse fa-3x fa-fw margin-bottom"></i></h3></div></div>';
      jQuery('#datafetch').html( waiting );
      jQuery.ajax({
          url: '<?php echo admin_url('admin-ajax.php'); ?>',
          type: 'post',
          data: { action: 'data_fetch', keyword: jQuery('#keyword').val() },
          success: function(data) {
              jQuery('#datafetch').html( data );
          }
      });
}
</script>

<?php
}

// the ajax function
add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');
function data_fetch(){
    $the_query = new WP_Query( array( 'posts_per_page' => -1, 's' => esc_attr( $_POST['keyword'] ), 'post_type' => 'post' ) );
    if( $the_query->have_posts() ) :
        while( $the_query->have_posts() ): $the_query->the_post();?>
                          <p class="ajax_search_title"><a title="<?php the_title_attribute(); ?>" target="_blank" href="<?php the_permalink(); ?>"><?php echo get_the_title();
              ?></a></p>
        <?php endwhile;
        wp_reset_postdata();  
    endif;

    die();
}
?>
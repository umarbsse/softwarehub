<!DOCTYPE html>
<html lang="en">
  <head  itemscope itemtype="http://schema.org/WebSite">
        
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- [ Meta Tag SEO ] -->
    <meta content='width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1' name='viewport'/>

    <link href='<?php echo get_bloginfo( 'template_directory' );?>/' rel='canonical'/>

    
<meta itemprop="name" content="<?php echo get_bloginfo( 'name' ); ?>" />
        <meta itemprop="url" content="<?php echo get_site_url(); ?>" />

    

    <!-- Bootstrap -->
    <link href="<?php echo get_bloginfo( 'template_directory' );?>/assets/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo( 'template_directory' );?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/assets/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/assets/css/select2-skins.min.css">
    
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/assets/plugins/iCheck/square/blue.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/assets/plugins/iCheck/square/red.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/assets/cs/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/assets/cameo_admin_template/css/theme.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/assets/cameo_admin_template/css/theme.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/assets/cameo_admin_template/css/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/assets/cameo_admin_template/css/jquery.bxslider.css">
     
     
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/assets/cameo_admin_template/css/animate.min.css">
     
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/assets/cameo_admin_template/css/panel.css">
     
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/assets/cameo_admin_template/css/palette.1.css" id="skin">
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/assets/cameo_admin_template/css/style.1.css" id="font">
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/assets/cameo_admin_template/css/main.css">
            <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/assets/cs/custom.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/assets/cs/responsive.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
  </head>
<?php echo '<body id="blog" itemscope itemtype="http://schema.org/WebPage" class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>
<header id="site-header" role="banner" itemscope="" itemtype="http://schema.org/WPHeader">
  <div id="primary-navigation" class="primary-navigation" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar_multiple" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
              <?php $custom_logo = get_custom_log(); ?>
              <img class="img-responsive logo" src="<?php echo $custom_logo;?>">
            </a><br>
          </div>
          <div id="navbar" class="collapse navbar-collapse navbar_multiple">
            <ul class="nav navbar-nav navbar-right social_icons_navbar">
              <p class="navbar-form social_icons">
                <a href="<?php echo get_option('facebook'); ?>"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/social/fb.png"> </a>
                <a href="<?php echo get_option('twitter'); ?>"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/social/tw.png"> </a>
                <a href="<?php echo get_option('gplus'); ?>"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/social/g.png"> </a>
                <a href="<?php echo get_option('insta'); ?>"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/social/ln.png"> </a>
              </p>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
        <div class="container">
          <div class="navbar-header links_navbar_header">
            <div id="navbar" class="collapse navbar-collapse navbar_multiple">
              <?php wp_nav_menu( array( 
                                      'theme_location' => 'header-menu',
                                      "menu_class"=> 'nav navbar-nav navbar-left menue_links',
                                      "container" =>false ) ); ?>
                                      <?php /* ?>
              <ul class="nav navbar-nav navbar-left menue_links">
                <a href="#" class="btn btn-link">
                  <i class="fa fa-windows"></i> Windows
                </a>
                <a href="#" class="btn btn-link">
                  <i class="fa fa-linux"></i> Linux
                </a>
                <a href="#" class="btn btn-link">
                  <i class="fa fa-apple"></i> Mac
                </a>
              </ul>

                                      <?php */ ?>
            </div>
          </div>
          <form class="navbar-form navbar-right" method="get" action="<?php echo get_site_url(); ?>">
            <div class="input-group ">
                    <input type="text" name="s" class="form-control" placeholder="Windows 10, Office 365 etc...">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Find Softwares!</button>
                    </span>
            </div>
          </form>
        </div>
    </nav>
  </div>
</header>
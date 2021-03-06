<!DOCTYPE html><!-- HTML 5 -->
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php // Get Theme Options from Database
    $theme_options = dynamicnews_theme_options();
?>

<div id="wrapper" class="hfeed">
    
    <div id="header-wrap">
    
        <header id="header" class="container clearfix" role="banner">

            <div id="logo" class="clearfix">
           
            </div>
            
            <div id="header-content" class="clearfix">
                <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <?php // Display Custom Header Image
                        dynamicnews_display_custom_header(); 
                    ?>
                </a>
            </div>

        </header>
    
    </div>
    
    <div id="navi-wrap">
        <nav id="mainnav" class="container clearfix" role="navigation">
            <?php 
                // Get Navigation out of Theme Options
                wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_id' => 'mainnav-menu', 'echo' => true, 'fallback_cb' => 'dynamicnews_default_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'depth' => 0));
            ?>
        </nav>
    </div>
    
    
        

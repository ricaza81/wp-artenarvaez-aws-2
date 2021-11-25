<?php
/**
 * Header file for the Tanda WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tanda
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php if ( ! ( function_exists( 'has_site_icon' ) && has_site_icon() ) ) { ?>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri() . '/img/favicon.png'); ?>" type="image/x-icon">
    
<?php } wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    
        <!-- Preloader Start -->
    <div id="site-preloader" class="site-preloader">
        <div class="loader-wrap">
            <div class="ring">
                <span></span>
            </div>
        </div>
    </div>
    <!-- Preloader Ends -->
    
    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default active-border navbar-sticky bootsnav">

            <div class="container">

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/logo.png'); ?>" class="logo" alt="<?php echo esc_attr__( 'Logo', 'tanda' )?>">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <?php 
					wp_nav_menu( array(
					'theme_location'  => 'main-menu',
					'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
				    'container'       => 'div',
				    'container_class' => 'collapse navbar-collapse',
				    'container_id'    => 'navbar-menu',
				    'menu_class'      => 'nav navbar-nav navbar-center',
				    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
				    'walker'          => new WP_Bootstrap_Navwalker(),
					) );
				?>
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->
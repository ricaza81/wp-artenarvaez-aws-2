<?php
global $tanda_options;
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
    <link rel="shortcut icon" href="<?php echo esc_url($tanda_options['sticky-logo']['url']); ?>" type="image/x-icon">
    
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
        <nav class="navbar navbar-default navbar-fixed dark no-background bootsnav">

            <!-- Start Top Search -->
            <div class="container-full">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                             <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                    <input type='search' name="s" placeholder="<?php esc_attr_e( 'Search Here...', 'tanda' )?>" class="form-control" id="search-box" value="<?php the_search_query(); ?>" >
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container-full">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav inc-border">
                    <ul>
                        <li class="search"><a href="#"><i class="ti-search"></i></a></li>
                        <li class="side-menu"><a href="#"><i class="ti-menu-alt"></i></a></li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo esc_url($tanda_options['sticky-logo']['url']); ?>" class="logo" alt="<?php echo esc_attr__( 'Logo', 'tanda' )?>">
                    </a>
                </div>
                <!-- End Header Navigation -->

                 <?php 
                    wp_nav_menu( array(
                    'theme_location'  => 'main-menu',
                    'depth'           => 8, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'navbar-menu',
                    'menu_class'      => 'nav navbar-nav navbar-center',
                    'fallback_cb'     => 'tanda_Bootstrap_Navwalker::fallback',
                    'items_wrap'      => '<ul data-in="#" data-out="#" class="%2$s" id="%1$s">%3$s</ul>',
                    'walker'          => new tanda_Bootstrap_Navwalker(),
                    ) );
                ?>
            </div>

             <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="ti-close"></i></a>
                <div class="widget">
                    <h4 class="title"><?php echo esc_html($tanda_options['headingsection1']); ?></h4>
                    <ul class="contact">
                        <li>
                            <div class="icon">
                                <i class="<?php echo esc_attr($tanda_options['t_icon4']); ?>"></i>
                            </div>
                            <div class="info">
                                <span><?php echo esc_html($tanda_options['t_title4']); ?></span> <?php echo esc_html($tanda_options['t_text4']); ?>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="<?php echo esc_attr($tanda_options['t_icon2']); ?>"></i>
                            </div>
                            <div class="info">
                                <span><?php echo esc_html($tanda_options['t_title2']); ?></span> <?php echo esc_html($tanda_options['t_text2']); ?>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="<?php echo esc_attr($tanda_options['t_icon3']); ?>"></i>
                            </div>
                            <div class="info">
                                <span><?php echo esc_html($tanda_options['t_title3']); ?></span> <?php echo esc_html($tanda_options['t_text3']); ?>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="widget">
                    <h4 class="title"><?php echo esc_html($tanda_options['headingsection2']); ?></h4>
                    <?php 
                                wp_nav_menu( array(
                                'theme_location'  => 'additional-menu',
                                ) );
                            ?>
                </div>
                <div class="widget social">
                    <h4 class="title"><?php echo esc_html($tanda_options['headingsection3']); ?></h4>
                    <ul class="link">
                        <li class="facebook"><a href="<?php echo esc_html($tanda_options['sl1']); ?>"><i class="<?php echo esc_attr($tanda_options['sicon1']); ?>"></i></a></li>
                        <li class="twitter"><a href="<?php echo esc_html($tanda_options['sl2']); ?>"><i class="<?php echo esc_attr($tanda_options['sicon2']); ?>"></i></a></li>
                        <li class="pinterest"><a href="<?php echo esc_html($tanda_options['sl3']); ?>"><i class="<?php echo esc_attr($tanda_options['sicon3']); ?>"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Side Menu -->

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->
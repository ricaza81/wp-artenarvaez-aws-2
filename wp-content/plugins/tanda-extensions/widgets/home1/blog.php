<?php

/**
* Adds new shortcode "home1-feature-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'blog_section' ) ) {

    class blog_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-blog-section-shortcode', array( 'blog_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-blog-section-shortcode', array( 'blog_section', 'map' ) );
            }

        }


        /**
        * Map shortcode to VC
    *
    * This is an array of all your settings which become the shortcode attributes ($atts)
        * for the output.
        *
        */
        public static function map() {
            return array(
                'name'        => esc_html__( 'Blog Section', 'tanda' ),
                'description' => esc_html__( 'Home1 - Blog Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-1', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'heading' => esc_html__( 'Class', 'tanda' ),
                        'value' => esc_html__( 'blog-area content-less default-padding bottom-less', 'tanda' ),
                        'param_name' => 'class',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title', 'tanda' ),
                        'param_name' => 'title',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'p',
                        'heading' => esc_html__( 'Heading', 'tanda' ),
                        'param_name' => 'heading',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Category Slug', 'tanda' ),
                        'description' => esc_html__( 'Display Three Latest Post From Category or Leave empty to display three latest post', 'tanda' ),
                        'param_name' => 'slug',
                        'admin_label' => false,
                        'group' => 'Posts',
                    ),
                    
                ),
            );
        }


        /**
        * Shortcode output
        *
        */
        public static function output( $atts = null ) {

            extract(
                shortcode_atts(
                    array(
                        'title'   => '',
                        'class'   => 'blog-area content-less default-padding bottom-less',
                        'heading'   => '',
                        'slug' => '',
                    ),
                    $atts
                )
            ); ?>
       
<!-- Start Blog 
    ============================================= -->
    <div class="<?php echo $class; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4><?php echo $title; ?></h4>
                        <h2><?php echo $heading; ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="blog-items">
                <div class="row"> 

   <?php if (empty($slug)) {
        $qry_args = array(
        'posts_per_page' => 3,
        'ignore_sticky_posts' => 1,
      );
    }
            else {
        $qry_args = array(
        'posts_per_page' => 3,
        'ignore_sticky_posts' => 1,
        'category_name' => $slug,
    ); }

    $qry = new WP_Query( $qry_args );

    if( $qry->have_posts() ) {

                while ( $qry->have_posts() ) : $qry->the_post(); ?>

<div class="col-lg-4 col-md-6 single-item">
    <div class="item wow fadeInUp">
        <div class="thumb">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('tanda-blog-sidebar'); ?>
            </a>
        </div>
        <div class="info">
            <div class="meta">
                <ul>
                    <li><i class="fas fa-calendar-alt"></i> <?php the_time('F j Y'); ?></li>
                    <li><i class="fas fa-user"></i><?php echo get_the_author_link() ?></li>
                </ul>
            </div>
            <h4>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h4>
                <?php the_excerpt(); ?>
            <a class="btn-simple" href="<?php the_permalink(); ?>"><?php esc_html_e ('Read More','tanda' ); ?> <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
</div>
<?php
                endwhile;
                
                //Reset Post Data
                wp_reset_postdata(); } ?>
    

   </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

        <?php }

    }

}
new blog_section;

             
<?php

/**
* Adds new shortcode "pages-video-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'pages_video_section' ) ) {

    class pages_video_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-video-section-shortcode', array( 'pages_video_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-video-section-shortcode', array( 'pages_video_section', 'map' ) );
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
                'name'        => esc_html__( 'Pages Video Section', 'tanda' ),
                'description' => esc_html__( 'Pages - video Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attributes
                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Background Image', 'tanda' ),
                        'param_name' => 'heroimg',
                        // 'value' => __( 'Default value', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image', 'tanda' ),
                        'param_name' => 'heroimg1',
                        // 'value' => __( 'Default value', 'tanda' ),
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
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Heading', 'tanda' ),
                        'param_name' => 'heading',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'p',
                        'heading' => esc_html__( 'Heading 2', 'tanda' ),
                        'param_name' => 'heading2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                    'type' => 'textfield',
                    'holder' => 'h1',
                    'heading' => esc_html__( 'Icon Class', 'tanda' ),
                    'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                    'param_name' => 'icon',
                    'admin_label' => false,
                    'weight' => 0,
                    'group' => 'General',
                    ),

                    array(
                    'type' => 'textfield',
                    'holder' => 'p',
                    'heading' => esc_html__( 'Link Url', 'tanda' ),
                    'param_name' => 'link',
                    'admin_label' => false,
                    'weight' => 0,
                    'group' => 'General',
                    ),

                    array(
                    'type' => 'textfield',
                    'holder' => 'p',
                    'heading' => esc_html__( 'Title', 'tanda' ),
                    'param_name' => 'listtitle1',
                    'admin_label' => false,
                    'weight' => 0,
                    'group' => 'Box1',
                    ),

                    array(
                    'type' => 'textarea',
                    'holder' => 'p',
                    'heading' => esc_html__( 'Description', 'tanda' ),
                    'param_name' => 'listdes1',
                    'admin_label' => false,
                    'weight' => 0,
                    'group' => 'Box1',
                    ),

                    array(
                    'type' => 'textfield',
                    'holder' => 'h1',
                    'heading' => esc_html__( 'Icon Class', 'tanda' ),
                    'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                    'param_name' => 'listicon1',
                    'admin_label' => false,
                    'weight' => 0,
                    'group' => 'Box1',
                    ),

                    array(
                    'type' => 'textfield',
                    'holder' => 'p',
                    'heading' => esc_html__( 'Icon Text', 'tanda' ),
                    'param_name' => 'listtext1',
                    'admin_label' => false,
                    'weight' => 0,
                    'group' => 'Box1',
                    ),

                    array(
                    'type' => 'textfield',
                    'holder' => 'p',
                    'heading' => esc_html__( 'Icon Span Text', 'tanda' ),
                    'value' => esc_html__( '+123 456 7890', 'tanda' ),
                    'param_name' => 'listspan1',
                    'admin_label' => false,
                    'weight' => 0,
                    'group' => 'Box1',
                    ),

                    array(
                    'type' => 'textfield',
                    'holder' => 'p',
                    'heading' => esc_html__( 'Icon Description', 'tanda' ),
                    'param_name' => 'listdes1',
                    'admin_label' => false,
                    'weight' => 0,
                    'group' => 'Box1',
                    ),

                    array(
                    'type' => 'textfield',
                    'holder' => 'p',
                    'heading' => esc_html__( 'Title', 'tanda' ),
                    'param_name' => 'listtitle2',
                    'admin_label' => false,
                    'weight' => 0,
                    'group' => 'Box2',
                    ),

                    array(
                    'type' => 'textarea',
                    'holder' => 'p',
                    'heading' => esc_html__( 'Description', 'tanda' ),
                    'param_name' => 'listdes2',
                    'admin_label' => false,
                    'weight' => 0,
                    'group' => 'Box2',
                    ),

                    array(
                    'type' => 'textfield',
                    'holder' => 'h1',
                    'heading' => esc_html__( 'Icon Class', 'tanda' ),
                    'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                    'param_name' => 'listicon2',
                    'admin_label' => false,
                    'weight' => 0,
                    'group' => 'Box2',
                    ),

                    array(
                    'type' => 'textfield',
                    'holder' => 'p',
                    'heading' => esc_html__( 'Button Text', 'tanda' ),
                    'param_name' => 'listtext2',
                    'admin_label' => false,
                    'weight' => 0,
                    'group' => 'Box2',
                    ),

                    array(
                    'type' => 'textfield',
                    'holder' => 'p',
                    'heading' => esc_html__( 'Button Link', 'tanda' ),
                    'param_name' => 'listlink2',
                    'admin_label' => false,
                    'weight' => 0,
                    'group' => 'Box2',
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
                        'heroimg' => 'heroimg',
                        'heroimg1' => 'heroimg1',
                        'title'   => '',
                        'heading' => '',
                        'heading2'   => '',
                        'icon' => '',
                        'link'   => '',
                        'listtitle1' => '',
                        'listdes1' => '',
                        'listicon1' => '',
                        'listtext1' => '',
                        'listspan1' => '+123 456 7890',
                        'listtitle2' => '',
                        'listdes2' => '',
                        'listicon2' => '',
                        'listtext2' => '',
                        'listlink2' => '',



                    ),
                    $atts
                )
            );

        $bgimg = wp_get_attachment_image_src( $heroimg, "full");
        $img_url1 = wp_get_attachment_image_src( $heroimg1, "full");
        

        // Fill $html var with data
        $html = '<!-- Start Video Area 
    ============================================= -->
    <div class="video-area extra-padding text-center default-padding faq-area bg-gray bg-fixed shadow dark text-light" style="background-image: url('. $bgimg[0] .');">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h5>'. $title .'</h5>
                        <h2>'. $heading .' <br> '. $heading2 .'</h2>
                        <a class="popup-youtube relative video-play-button" href="'. $link .'">
                            <i class="'. $icon .'"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fixed Shpae Bottom -->
        <div class="fixed-shape-bottom">
            <img src="'. $img_url1[0] .'" alt="Shape">
        </div>
        <!-- Fixed Shpae Bottom -->
    </div>
    <!-- End Video Area -->
    <!-- Start Why Choose Us 
============================================= -->
<div class="choose-us-area default-padding-bottom">
    <div class="container">
        <div class="items-box">
            <div class="row">
                <!-- SIngle item-->
                <div class="single-item col-lg-6 col-mg-6">
                    <div class="item">
                        <div class="info">
                            <h4>'. $listtitle1 .'</h4>
                            <p>
                                '. $listdes1 .'
                            </p>
                            <div class="call">
                                <div class="icons">
                                    <i class="'. $listicon1 .'"></i>
                                </div>
                                <div class="info">
                                    <span>'. $listtext1 .'</span> '. $listspan1 .'
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End SIngle item-->
                                    <!-- SIngle item-->
                <div class="single-item col-lg-6 col-mg-6">
                    <div class="item">
                        <div class="icon">
                            <i class="'. $listicon2 .'"></i>
                        </div>
                        <div class="info">
                            <h4>'. $listtitle2 .'</h4>
                            <p>
                                '. $listdes2 .'
                            </p>
                            <a href="'. $listlink2 .'" class="btn-more">'. $listtext2 .'</a>
                        </div>
                    </div>
                </div>
                <!-- End SIngle item-->
            </div>
        </div>
    </div>
</div>
<!-- End Why Choose Us Area -->';

        return $html;

        }

    }

}
new pages_video_section;
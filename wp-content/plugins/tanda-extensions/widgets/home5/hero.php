<?php

/**
* Adds new shortcode "home5-hero-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home5_hero_section' ) ) {

    class home5_hero_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home5-hero-section-shortcode', array( 'home5_hero_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home5-hero-section-shortcode', array( 'home5_hero_section', 'map' ) );
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
                'name'        => esc_html__( 'Home-5 Hero Section', 'tanda' ),
                'description' => esc_html__( 'Home5 - Hero Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-5', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attributes
                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Hero Image', 'tanda' ),
                        'param_name' => 'heroimg',
                        // 'value' => __( 'Default value', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'heading' => esc_html__( 'Background Image', 'tanda' ),
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
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Heading Bold Text', 'tanda' ),
                        'param_name' => 'bold',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Text', 'tanda' ),
                        'param_name' => 'bttext1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Link', 'tanda' ),
                        'param_name' => 'btlink1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Icon Class', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'bticon2', 
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Link', 'tanda' ),
                        'param_name' => 'btlink2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button',
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
                        'heading'   => '',
                        'bold' => '',
                        'bttext1'   => '',
                        'btlink1'   => '',
                        'bticon2'   => '',
                        'btlink2'   => '',
                    ),
                    $atts
                )
            );

        $img_url = wp_get_attachment_image_src( $heroimg, "full");
        $bgimg = wp_get_attachment_image_src( $heroimg1, "full");
        

        // Fill $html var with data
        $html = '<!-- Start Banner 
    ============================================= -->
    <div class="banner-area home2-banner-fix content-less bottom-shape bg-gradient text-light center-item text-color">
        <!-- Fixed Shape -->
        <div class="fixed-shape">
            <img src="'. $bgimg[0] .'" alt="Shape">
        </div>
        <!-- End Fixed Shape -->
        <div class="item">
            <div class="container">
                <div class="row align-center">
                                    
                    <div class="col-lg-6">
                        <div class="content">
                            <h4 class="wow fadeInLeft">'. $title .'</h4>
                            <h2 class="wow fadeInDown">'. $heading .' <strong>'. $bold .'</strong></h2>
                            <div class="bottom">
                                <a class="wow fadeInUp btn circle btn-light border btn-md" href="'. $btlink1 .'">'. $bttext1 .'</a>
                                <a class="popup-youtube relative video-play-button" href="'. $btlink2 .'">
                                    <i class="'. $bticon2 .'"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 thumb">
                        <img class="wow fadeInUp" src="'. $img_url[0] .'" alt="Thumb">
                    </div>

                </div>
            </div>
        </div>
        <!-- Fixed Shape -->
        <div class="fixed-shape-bottom">
            <img src="assets/img/shape/13.png" alt="Shape">
        </div>
        <!-- End Fixed Shape -->
    </div>
    <!-- End Banner -->';

        return $html;

        }

    }

}
new home5_hero_section;
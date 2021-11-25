<?php

/**
* Adds new shortcode "home4-section1-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home4_section1_start' ) ) {

    class home4_section1_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home4-section1-start-shortcode', array( 'home4_section1_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home4-section1-start-shortcode', array( 'home4_section1_start', 'map' ) );
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
                'name'        => esc_html__( 'Home-4 Section1 start', 'tanda' ),
                'description' => esc_html__( 'home4 - Section1 start', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-4', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attributes

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image', 'tanda' ),
                        'param_name' => 'heroimg',
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
                        'title' => '',
                        'heading' => '',
                        
                    ),
                    $atts
                )
            );

        
        $img_url = wp_get_attachment_image_src( $heroimg, "full");
        // Fill $html var with data
        $html = '<!-- Star Featured Services Area
    ============================================= -->
    <div class="featured-services-area text-center default-padding-bottom bottom-less">
        <!-- Fixed Shape  -->
        <div class="fixed-shape-left-top">
            <img src="'. $img_url[0] .'" alt="Shape">
        </div>
        <!-- End Fixed Shape  -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>'. $title .'</h4>
                        <h2>'. $heading .'</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">';

        return $html;

        }

    }

}
new home4_section1_start;
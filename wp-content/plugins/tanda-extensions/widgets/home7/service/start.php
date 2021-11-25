<?php

/**
* Adds new shortcode "home7-service-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home7_service_section_start' ) ) {

    class home7_service_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home7-service-section-start-shortcode', array( 'home7_service_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home7-service-section-start-shortcode', array( 'home7_service_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Home 7 Service Section Start', 'tanda' ),
                'description' => esc_html__( 'Home7 - Service1 Section Start', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-7', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

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
                        'title'   => '',
                        'heading' => '',
                    ),
                    $atts
                )
            );
        

        // Fill $html var with data
        $html = '<!-- Start Services 
    ============================================= -->
    <div class="thumb-services-area carousel-shadow relative bg-cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>'. $heading .'</h4>
                        <h2>'. $title .'</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="services-items services-carousel owl-carousel owl-theme text-center">';

        return $html;

        }

    }

}
new home7_service_section_start;
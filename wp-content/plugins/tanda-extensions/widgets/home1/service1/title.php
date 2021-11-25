<?php

/**
* Adds new shortcode "home1-service1-section-title-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'service1_section_title' ) ) {

    class service1_section_title {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-service1-section-title-shortcode', array( 'service1_section_title', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-service1-section-title-shortcode', array( 'service1_section_title', 'map' ) );
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
                'name'        => esc_html__( 'Service1 Section NoTitle', 'tanda' ),
                'description' => esc_html__( 'Home1 - Service1 Section title', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-1', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

    
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
                        
                    ),
                    $atts
                )
            );
        

        // Fill $html var with data
        $html = '<!-- Start Services 
    ============================================= -->
    <div class="services-area carousel-shadow default-padding bg-cover">
        <div class="container">
            <div class="services-items services-carousel owl-carousel owl-theme text-center">';

        return $html;

        }

    }

}
new service1_section_title;
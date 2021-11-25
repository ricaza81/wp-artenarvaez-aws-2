<?php

/**
* Adds new shortcode "home3-section1-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home3_section1_start' ) ) {

    class home3_section1_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home3-section1-start-shortcode', array( 'home3_section1_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home3-section1-start-shortcode', array( 'home3_section1_start', 'map' ) );
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
                'name'        => esc_html__( 'Home-3 Section1 Start', 'tanda' ),
                'description' => esc_html__( 'Home3 - Section1 Start', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-3', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attributes
                   
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
        $html = '<!-- Start Features Area 
    ============================================= -->
    <div class="top-features-area default-padding-top bg-gray bottom-less">
        <div class="container">
            <div class="feature-items text-center">
                <div class="row">';

        return $html;

        }

    }

}
new home3_section1_start;
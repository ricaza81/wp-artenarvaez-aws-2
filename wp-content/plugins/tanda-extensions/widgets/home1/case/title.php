<?php

/**
* Adds new shortcode "home1-case-section-title-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'case_section_title' ) ) {

    class case_section_title {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-case-section-title-shortcode', array( 'case_section_title', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-case-section-title-shortcode', array( 'case_section_title', 'map' ) );
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
                'name'        => esc_html__( 'Case Section NoTitle Start', 'tanda' ),
                'description' => esc_html__( 'Home1 - Case Section Start', 'tanda' ),
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
        $html = '<!-- Start Case Studies Area
    ============================================= -->
    <div class="case-studies-area default-padding">
        <div class="container-fluid">
            <div class="case-carousel owl-carousel owl-theme">';

        return $html;

        }

    }

}
new case_section_title;
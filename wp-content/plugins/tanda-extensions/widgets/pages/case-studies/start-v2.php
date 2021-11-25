<?php

/**
* Adds new shortcode "pages-casestudies-section-startv2-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'casestudies_section_startv2' ) ) {

    class casestudies_section_startv2 {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-casestudies-section-startv2-shortcode', array( 'casestudies_section_startv2', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-casestudies-section-startv2-shortcode', array( 'casestudies_section_startv2', 'map' ) );
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
                'name'        => esc_html__( 'Case Section Start V2', 'tanda' ),
                'description' => esc_html__( 'Pages - Case Section Start', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'tanda'),
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
        $html = ' <!-- Start Case Studies Area
    ============================================= -->
    <div class="case-studies-area overflow-hidden grid-items default-padding">
        <div class="container-full">
            <div class="case-items-area">
                <div class="masonary">
                    <div id="portfolio-grid" class="case-items colums-3">';

        return $html;

        }

    }

}
new casestudies_section_startv2;
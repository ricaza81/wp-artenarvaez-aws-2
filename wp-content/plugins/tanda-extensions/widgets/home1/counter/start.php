<?php

/**
* Adds new shortcode "home1-counter-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'counter_section_start' ) ) {

    class counter_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-counter-section-start-shortcode', array( 'counter_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-counter-section-start-shortcode', array( 'counter_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Counter Section Start', 'tanda' ),
                'description' => esc_html__( 'Home1 - Counter Section Start', 'tanda' ),
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
        $html = '<!-- Start Fun Factor Area
    ============================================= -->
    <div class="fun-factor-area overflow-hidden">
        <div class="container">
            <div class="fun-fact-items default-padding">
                <div class="row">';

        return $html;

        }

    }

}
new counter_section_start;
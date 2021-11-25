<?php

/**
* Adds new shortcode "home6-classstart-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home6_faq_class_start' ) ) {

    class home6_faq_class_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home6-classstart-section-shortcode', array( 'home6_faq_class_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home6-classstart-section-shortcode', array( 'home6_faq_class_start', 'map' ) );
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
                'name'        => esc_html__( 'Home6 Faq Class Start Section', 'tanda' ),
                'description' => esc_html__( 'Home6 - Faq', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-6', 'tanda'),
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
        $html = '<!-- Star About Area
    ============================================= -->
    <div class="faq-area default-padding-top">
        <div class="container">
            <div class="row">';

        return $html;

        }

    }

}
new home6_faq_class_start;
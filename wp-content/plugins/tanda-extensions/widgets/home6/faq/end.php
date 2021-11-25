<?php

/**
* Adds new shortcode "home6-faq-section-end-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home_6_faq_section_end' ) ) {

    class home_6_faq_section_end {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home6-faq-section-end-shortcode', array( 'home_6_faq_section_end', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home6-faq-section-end-shortcode', array( 'home_6_faq_section_end', 'map' ) );
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
                'name'        => esc_html__( 'Home6 Faq Section End', 'tanda' ),
                'description' => esc_html__( 'Home6 - faq Section End', 'tanda' ),
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
        $html = '</div>
                    </div>';

        return $html;

        }

    }

}
new home_6_faq_section_end;
<?php

/**
* Adds new shortcode "home4-section1-end-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home4_section1_end' ) ) {

    class home4_section1_end {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home4-section1-end-shortcode', array( 'home4_section1_end', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home4-section1-end-shortcode', array( 'home4_section1_end', 'map' ) );
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
                'name'        => esc_html__( 'Home-4 Section1 end', 'tanda' ),
                'description' => esc_html__( 'home4 - Section1 end', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-4', 'tanda'),
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
        </div>
    </div>
    <!-- End Feature Services Area -->';

        return $html;

        }

    }

}
new home4_section1_end;
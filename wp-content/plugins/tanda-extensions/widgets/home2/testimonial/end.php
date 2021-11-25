<?php

/**
* Adds new shortcode "home1-testimonial-section-end-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'testimonial_section_end' ) ) {

    class testimonial_section_end {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-testimonial-section-end-shortcode', array( 'testimonial_section_end', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-testimonial-section-end-shortcode', array( 'testimonial_section_end', 'map' ) );
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
                'name'        => esc_html__( 'Testimonial Section end', 'tanda' ),
                'description' => esc_html__( 'Home2 - Testimonial Section end', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-2', 'tanda'),
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
    </div>
    <!-- End Testimonials Area -->';

        return $html;

        }

    }

}
new testimonial_section_end;
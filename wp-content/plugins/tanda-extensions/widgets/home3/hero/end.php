<?php

/**
* Adds new shortcode "home1-home3heroend-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home3heroend_section' ) ) {

    class home3heroend_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-home3heroend-section-shortcode', array( 'home3heroend_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-home3heroend-section-shortcode', array( 'home3heroend_section', 'map' ) );
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
                'name'        => esc_html__( 'Home3 hero Section End', 'tanda' ),
                'description' => esc_html__( 'Home3 - hero Section end', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-3', 'tanda'),
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
        $html = ' </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->';

        return $html;

        }

    }

}
new home3heroend_section;
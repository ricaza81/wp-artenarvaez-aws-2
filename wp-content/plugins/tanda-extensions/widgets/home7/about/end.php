<?php

/**
* Adds new shortcode "home7-about-end-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home7_about_end' ) ) {

    class home7_about_end {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home7-about-end-shortcode', array( 'home7_about_end', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home7-about-end-shortcode', array( 'home7_about_end', 'map' ) );
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
                'name'        => esc_html__( 'Home 7 About Section End', 'tanda' ),
                'description' => esc_html__( 'Home 7 About', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-7', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attribute
                   
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
        </div>
    </div>
    <!-- End About Area -->';

        return $html;

        }

    }

}
new home7_about_end;
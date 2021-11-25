<?php

/**
* Adds new shortcode "pages-casestudies-section-endcase-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'casestudies_section_endcase' ) ) {

    class casestudies_section_endcase {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-casestudies-section-endcase-shortcode', array( 'casestudies_section_endcase', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-casestudies-section-endcase-shortcode', array( 'casestudies_section_endcase', 'map' ) );
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
                'name'        => esc_html__( 'Case Section End', 'tanda' ),
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
        $html = '</div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Case Studies Area -->';

        return $html;

        }

    }

}
new casestudies_section_endcase;
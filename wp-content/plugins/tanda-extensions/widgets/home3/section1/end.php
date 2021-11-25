<?php

/**
* Adds new shortcode "home3-section1-end-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home3_section1_end' ) ) {

    class home3_section1_end {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home3-section1-end-shortcode', array( 'home3_section1_end', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home3-section1-end-shortcode', array( 'home3_section1_end', 'map' ) );
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
                'name'        => esc_html__( 'Home-3 Section1 end', 'tanda' ),
                'description' => esc_html__( 'Home3 - Section1 end', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-3', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attributes

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image', 'tanda' ),
                        'param_name' => 'heroimg',
                        // 'value' => __( 'Default value', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),
                   
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
                        'heroimg' => 'heroimg',
                        
                    ),
                    $atts
                )
            );

        
        $img_url = wp_get_attachment_image_src( $heroimg, "full");
        // Fill $html var with data
        $html = '</div>
            </div>
        </div>
        <!-- Fixed Shpae Bottom -->
        <div class="fixed-shape-bottom">
            <img src="'. $img_url[0] .'" alt="Shape">
        </div>
        <!-- Fixed Shpae Bottom -->
    </div>
    <!-- End Features Area -->';

        return $html;

        }

    }

}
new home3_section1_end;
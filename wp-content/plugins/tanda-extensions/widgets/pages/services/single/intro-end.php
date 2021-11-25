<?php

/**
* Adds new shortcode "service-single-section1-end-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'service_single_section1_end' ) ) {

    class service_single_section1_end {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'service-single-section1-end-shortcode', array( 'service_single_section1_end', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'service-single-section1-end-shortcode', array( 'service_single_section1_end', 'map' ) );
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
                'name'        => esc_html__( 'service Single Section 1 End', 'tanda' ),
                'description' => esc_html__( 'Pages - service Single End', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                     array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image', 'tanda' ),
                        'param_name' => 'hero',
                        // 'value' => __( 'Default value', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image 2', 'tanda' ),
                        'param_name' => 'hero1',
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

                        'hero' => 'hero',
                        'hero1' => 'hero1',

                    ),
                    $atts
                )
            );

            $heroimg = wp_get_attachment_image_src( $hero, "full");
            $heroimg1 = wp_get_attachment_image_src( $hero1, "full");
        

        // Fill $html var with data
        $html = '<div class="row thumbs">
                        <div class="col-lg-6 col-md-6">
                            <img src="'. $heroimg[0] .'" alt="Thumb">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <img src="'. $heroimg1[0] .'" alt="Thumb">
                        </div>
                    </div>
                </div>';

        return $html;

        }

    }

}
new service_single_section1_end;
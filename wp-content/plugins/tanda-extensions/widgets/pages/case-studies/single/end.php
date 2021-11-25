<?php

/**
* Adds new shortcode "pages-casestudiessingle-section-end-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'casestudiessingle_section_end' ) ) {

    class casestudiessingle_section_end {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-casestudiessingle-section-end-shortcode', array( 'casestudiessingle_section_end', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-casestudiessingle-section-end-shortcode', array( 'casestudiessingle_section_end', 'map' ) );
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
                'name'        => esc_html__( 'Case Single End', 'tanda' ),
                'description' => esc_html__( 'Pages - Case Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image', 'tanda' ),
                        'param_name' => 'image',
                        // 'value' => __( 'Default value', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Image',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image 2', 'tanda' ),
                        'param_name' => 'image2',
                        // 'value' => __( 'Default value', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Image',
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
                        'image' => 'image',
                        'image2' => 'image2',
                    ),
                    $atts
                )
            );
        
        $img_url = wp_get_attachment_image_src( $image, "full");
        $img_url2 = wp_get_attachment_image_src( $image2, "full");

        // Fill $html var with data
        $html = '<div class="row thumbs">
                        <div class="col-lg-6 col-md-6">
                            <img src="'. $img_url[0] .'" alt="Thumb">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <img src="'. $img_url2[0] .'" alt="Thumb">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Case Details -->';

        return $html;

        }

    }

}
new casestudiessingle_section_end;
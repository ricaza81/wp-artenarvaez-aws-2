<?php

/**
* Adds new shortcode "home5-about-end-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home5_about_section_end' ) ) {

    class home5_about_section_end {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home5-about-end-shortcode', array( 'home5_about_section_end', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home5-about-end-shortcode', array( 'home5_about_section_end', 'map' ) );
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
                'name'        => esc_html__( 'About End', 'tanda' ),
                'description' => esc_html__( 'Home5 - About Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-5', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                     array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Bg Image', 'tanda' ),
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

                <div class="col-lg-6 thumbs">
                    <img src="'. $img_url[0] .'" alt="Thumb">
                </div>

            </div>
        </div>
    </div>
    <!-- End About Area -->';

        return $html;

        }

    }

}
new home5_about_section_end;
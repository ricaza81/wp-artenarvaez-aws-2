<?php

/**
* Adds new shortcode "home3-section1-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home3_section1' ) ) {

    class home3_section1 {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home3-section1-section-shortcode', array( 'home3_section1', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home3-section1-section-shortcode', array( 'home3_section1', 'map' ) );
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
                'name'        => esc_html__( 'Home3 Section1', 'tanda' ),
                'description' => esc_html__( 'Home3 - Section1', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-3', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title', 'tanda' ),
                        'param_name' => 'title',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Description', 'tanda' ),
                        'param_name' => 'des',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Link', 'tanda' ),
                        'param_name' => 'link',
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
                        'icon' => '',
                        'title'   => '',
                        'des' => '',
                        'link' => '',
                    ),
                    $atts
                )
            );

        

        // Fill $html var with data
        $html = '<!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item">
                            <div class="icon">
                                <i class="'. $icon .'"></i>
                            </div>
                            <h5><a href="'. $link .'">'. $title .'</a></h5>
                            <p>
                                '. $des .'
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->';

        return $html;

        }

    }

}
new home3_section1;
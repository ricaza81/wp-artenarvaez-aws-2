<?php

/**
* Adds new shortcode "service-single-section2-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'service_single_section2' ) ) {

    class service_single_section2 {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'service-single-section2-shortcode', array( 'service_single_section2', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'service-single-section2-shortcode', array( 'service_single_section2', 'map' ) );
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
                'name'        => esc_html__( 'service Single Sidebar section2 Section', 'tanda' ),
                'description' => esc_html__( 'Pages - service Single Sidebar Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

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
                        'type' => 'textfield',
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
                        'heading' => esc_html__( 'Icon Class', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon1',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Text', 'tanda' ),
                        'param_name' => 'text1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon1',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Link', 'tanda' ),
                        'param_name' => 'link1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon1',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon2',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Text', 'tanda' ),
                        'param_name' => 'text2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon2',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Link', 'tanda' ),
                        'param_name' => 'link2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon2',
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
                        'title' => '',
                        'des' => '',
                        'icon1' => '',
                        'text1' => '',
                        'link1' => '',
                        'icon2' => '',
                        'text2' => '',
                        'link2' => '',

                    ),
                    $atts
                )
            );

        // Fill $html var with data
        $html = '<div class="sidebar-item brochure">
                        <div class="title">
                            <h4>'. $title .'</h4>
                        </div>
                        <p>
                            '. $des .'
                        </p>
                        <a href="'. $link1 .'"><i class="'. $icon1 .'"></i> '. $text1 .'</a>
                        <a href="'. $link2 .'"><i class="'. $icon2 .'"></i> '. $text2 .'</a>
                    </div>';

        return $html;

        }

    }

}
new service_single_section2;
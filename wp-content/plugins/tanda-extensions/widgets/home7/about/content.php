<?php

/**
* Adds new shortcode "home7-about-content-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home7_about_content' ) ) {

    class home7_about_content {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home7-about-content-shortcode', array( 'home7_about_content', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home7-about-content-shortcode', array( 'home7_about_content', 'map' ) );
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
                'name'        => esc_html__( 'Home 7 About Tab Content', 'tanda' ),
                'description' => esc_html__( 'Home 7 About', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-7', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attributes

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Id', 'tanda' ),
                        'param_name' => 'id',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Active Class', 'tanda' ),
                        'param_name' => 'class',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),
                    
                    array(
                        'type' => 'textarea',
                        'holder' => 'p',
                        'heading' => esc_html__( 'Description', 'tanda' ),
                        'param_name' => 'des',
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
                        'id' => '',
                        'class' => '',
                        'des' => '',
                    ),
                    $atts
                )
            );


        // Fill $html var with data
        $html = '<div id="'. $id .'" class="tab-pane fade '. $class .'">
                                <p>
                                    '. $des .'
                                </p>
                            </div>';

        return $html;

        }

    }

}
new home7_about_content;
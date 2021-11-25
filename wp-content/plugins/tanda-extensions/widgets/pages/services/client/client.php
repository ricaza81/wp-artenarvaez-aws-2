<?php

/**
* Adds new shortcode "home1-client-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'client_section' ) ) {

    class client_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-client-section-shortcode', array( 'client_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-client-section-shortcode', array( 'client_section', 'map' ) );
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
                'name'        => esc_html__( 'client Section', 'tanda' ),
                'description' => esc_html__( 'Home1 - client Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-1', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image', 'tanda' ),
                        'param_name' => 'client',
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
                        'client' => 'client',
                    ),
                    $atts
                )
            );
        
        $client1 = wp_get_attachment_image_src( $client, "full");

        // Fill $html var with data
        $html = '<img src="'. $client1[0] .'" alt="Client">';

        return $html;

        }

    }

}
new client_section;
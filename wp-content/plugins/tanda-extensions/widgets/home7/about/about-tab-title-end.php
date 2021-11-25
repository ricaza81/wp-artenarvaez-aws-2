<?php

/**
* Adds new shortcode "home7-about-tab-title-end-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home7_about_title_end' ) ) {

    class home7_about_title_end {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home7-about-tab-title-end-shortcode', array( 'home7_about_title_end', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home7-about-tab-title-end-shortcode', array( 'home7_about_title_end', 'map' ) );
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
                'name'        => esc_html__( 'Home 7 About Title End', 'tanda' ),
                'description' => esc_html__( 'Home 7 About', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-7', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attributes

                   
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
        $html = '</ul>
                        <div id="tabsContent" class="tab-content wow fadeInUp" data-wow-delay="0.5s">';

        return $html;

        }

    }

}
new home7_about_title_end;
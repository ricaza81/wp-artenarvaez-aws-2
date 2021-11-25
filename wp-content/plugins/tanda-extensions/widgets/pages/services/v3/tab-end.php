<?php

/**
* Adds new shortcode "service3-section-tab-end-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'service3_tab_section_end' ) ) {

    class service3_tab_section_end {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'service3-section-tab-end-shortcode', array( 'service3_tab_section_end', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'service3-section-tab-end-shortcode', array( 'service3_tab_section_end', 'map' ) );
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
                'name'        => esc_html__( 'service3 Section Tab End', 'tanda' ),
                'description' => esc_html__( 'Pages - service3 Section end', 'tanda' ),
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
        $html = '</ul>
                <div id="tabsContent" class="tab-content wow fadeInUp" data-wow-delay="0.5s">';

        return $html;

        }

    }

}
new service3_tab_section_end;
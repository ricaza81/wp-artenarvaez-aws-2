<?php

/**
* Adds new shortcode "home1-case-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'case_section_start' ) ) {

    class case_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-case-section-start-shortcode', array( 'case_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-case-section-start-shortcode', array( 'case_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Case Section Start', 'tanda' ),
                'description' => esc_html__( 'Home1 - Case Section Start', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-1', 'tanda'),
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
                        'heading' => esc_html__( 'Heading', 'tanda' ),
                        'param_name' => 'heading',
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
                        'title'   => '',
                        'heading' => '',
                    ),
                    $atts
                )
            );
        

        // Fill $html var with data
        $html = '<!-- Start Case Studies Area
    ============================================= -->
    <div class="case-studies-area half-bg default-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>'. $title .'</h4>
                        <h2>'. $heading .'</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fill">
            <div class="case-carousel owl-carousel owl-theme">';

        return $html;

        }

    }

}
new case_section_start;
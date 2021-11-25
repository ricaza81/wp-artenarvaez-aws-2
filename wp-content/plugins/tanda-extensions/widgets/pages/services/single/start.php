<?php

/**
* Adds new shortcode "service-single-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'service_single_section_start' ) ) {

    class service_single_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'service-single-section-start-shortcode', array( 'service_single_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'service-single-section-start-shortcode', array( 'service_single_section_start', 'map' ) );
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
                'name'        => esc_html__( 'service Single Section Start', 'tanda' ),
                'description' => esc_html__( 'Pages - service Single Section Start', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                     array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image', 'tanda' ),
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

                        'hero1' => 'hero1',

                    ),
                    $atts
                )
            );

            $heroimg1 = wp_get_attachment_image_src( $hero1, "full");
        

        // Fill $html var with data
        $html = '<!-- Start Services Details 
    ============================================= -->
    <div class="services-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 content">
                    <div class="thumb">
                        <img src="'. $heroimg1[0] .'" alt="Thumb">
                    </div>';

        return $html;

        }

    }

}
new service_single_section_start;
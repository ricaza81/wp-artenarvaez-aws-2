<?php

/**
* Adds new shortcode "pages-mission-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'pages_mission_section_start' ) ) {

    class pages_mission_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-mission-section-start-shortcode', array( 'pages_mission_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-mission-section-start-shortcode', array( 'pages_mission_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Pages Mission Start Section', 'tanda' ),
                'description' => esc_html__( 'Pages - Mission Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attributes

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Background Image', 'tanda' ),
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
                        'heroimg'   => 'heroimg',
                    ),
                    $atts
                )
            );

        $img_url = wp_get_attachment_image_src( $heroimg, "full");

        // Fill $html var with data
        $html = '<!-- Start Who We Area 
    ============================================= -->
    <div class="who-we-area-area bg-dark text-light">
        <div class="container-fluid">
            <div class="who-we-area-box">
                <div class="row">
                    <div class="col-lg-6 thumb bg-cover" style="background-image: url('. $img_url[0] .');"></div>
                    <div class="col-lg-6 info">
                        <div class="row">';

        return $html;

        }

    }

}
new pages_mission_section_start;
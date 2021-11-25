<?php

/**
* Adds new shortcode "home5-about-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home5_about_section_start' ) ) {

    class home5_about_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home5-about-start-shortcode', array( 'home5_about_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home5-about-start-shortcode', array( 'home5_about_section_start', 'map' ) );
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
                'name'        => esc_html__( 'About Start', 'tanda' ),
                'description' => esc_html__( 'Home5 - About Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-5', 'tanda'),
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

                    array(
                        'type' => 'textarea',
                        'holder' => 'h1',
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
                        'title' => '',
                        'heading' => '',
                        'des' => '',
                    ),
                    $atts
                )
            );
        
        
        // Fill $html var with data
        $html = ' <!-- Star About Area
    ============================================= -->
    <div class="about-area relative reverse">
        <div class="container">
            <div class="row align-center">
                
                <div class="col-lg-6 info">
                    <h5>'. $title .'</h5>
                    <h2>'. $heading .'</h2>
                    <p>
                        '. $des .'
                    </p>
                    <div class="skill-items">';

        return $html;

        }

    }

}
new home5_about_section_start;
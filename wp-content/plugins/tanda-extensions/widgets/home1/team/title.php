<?php

/**
* Adds new shortcode "home1-team-title-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'team_title_section_start' ) ) {

    class team_title_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-team-title-section-start-shortcode', array( 'team_title_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-team-title-section-start-shortcode', array( 'team_title_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Team Section NoTitle Start', 'tanda' ),
                'description' => esc_html__( 'Home1 - Team Section Start', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-1', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'tanda' ),
                        'param_name' => 'class',
                        'value' => esc_html__( 'team-area default-padding bottom-less', 'tanda' ),
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
                        'class' => 'team-area default-padding bottom-less',
                    ),
                    $atts
                )
            );
        

        // Fill $html var with data
        $html = '<!-- Start Team 
    ============================================= -->
    <div class="'. $class .'">
        <div class="container">
            <div class="team-items text-center">
                <div class="row">';

        return $html;

        }

    }

}
new team_title_section_start;
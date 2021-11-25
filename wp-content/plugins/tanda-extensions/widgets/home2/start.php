<?php

/**
* Adds new shortcode "home2-hero-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home2_hero_section_start' ) ) {

    class home2_hero_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home2-hero-section-start-shortcode', array( 'home2_hero_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home2-hero-section-start-shortcode', array( 'home2_hero_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Home-2 Hero Section Start', 'tanda' ),
                'description' => esc_html__( 'Home2 - Hero Section Start', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-2', 'tanda'),
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
        $html = '<!-- Start Banner 
    ============================================= -->
    <div class="banner-area home2-banner-fix top-pad-60-responsive border-shadow text-center content-less text-large">
        <div id="bootcarousel" class="carousel text-light slide carousel-fade animate_text" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">';

        return $html;

        }

    }

}
new home2_hero_section_start;
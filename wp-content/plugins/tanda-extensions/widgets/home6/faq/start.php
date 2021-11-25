<?php

/**
* Adds new shortcode "home6-faq-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home6_faq_section_start' ) ) {

    class home6_faq_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home6-faq-section-start-shortcode', array( 'home6_faq_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home6-faq-section-start-shortcode', array( 'home6_faq_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Faq Section Start', 'tanda' ),
                'description' => esc_html__( 'Home6 - Faq Section Start', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-6', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title', 'tanda' ),
                        'param_name' => 'title',
                        'value' => esc_html__( 'We Help IT Companies Scale Engineering Capacity', 'tanda' ),     
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Description', 'tanda' ),
                        'value' => esc_html__( 'Dissuade ecstatic and properly saw entirely sir why laughter endeavor. In on my jointure horrible margaret suitable he followed speedily. Indeed vanity excuse or mr lovers of on. By offer scale an stuff.', 'tanda' ),
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
                        'title'   => 'We Help IT Companies Scale Engineering Capacity',
                        'des' => 'Dissuade ecstatic and properly saw entirely sir why laughter endeavor. In on my jointure horrible margaret suitable he followed speedily. Indeed vanity excuse or mr lovers of on. By offer scale an stuff.',
                    ),
                    $atts
                )
            );
        

        // Fill $html var with data
        $html = '<div class="col-lg-6 info wow fadeInLeft">
                        <h2>'. $title .'</h2>
                        <p>
                            '. $des .'
                        </p>
                        <div class="faq-content accordion" id="accordionExample">';

        return $html;

        }

    }

}
new home6_faq_section_start;
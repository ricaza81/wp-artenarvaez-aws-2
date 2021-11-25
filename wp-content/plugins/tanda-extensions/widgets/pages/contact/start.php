<?php

/**
* Adds new shortcode "pages-contact-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'pages_contact_section_start' ) ) {

    class pages_contact_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-contact-section-start-shortcode', array( 'pages_contact_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-contact-section-start-shortcode', array( 'pages_contact_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Pages contact Section Start', 'tanda' ),
                'description' => esc_html__( 'Pages - contact Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attributes

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'tanda' ),
                        'value' => esc_html__( 'contact-area overflow-hidden default-padding', 'tanda' ),
                        'param_name' => 'class',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

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
                        'class' => 'contact-area overflow-hidden default-padding',

                    ),
                    $atts
                )
            );

        // Fill $html var with data
        $html = '<!-- Start Contact 
    ============================================= -->
    <div class="'. $class .'">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 contact-form-box">
                    <div class="content">
                        <div class="heading">
                            <h2>'. $title .'</h2>
                            <p>'. $heading .'</p>
                        </div>';

        return $html;

        }

    }

}
new pages_contact_section_start;
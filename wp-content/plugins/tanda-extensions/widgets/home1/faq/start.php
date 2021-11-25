<?php

/**
* Adds new shortcode "home1-faq-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'faq_section_start' ) ) {

    class faq_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-faq-section-start-shortcode', array( 'faq_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-faq-section-start-shortcode', array( 'faq_section_start', 'map' ) );
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
                'description' => esc_html__( 'Home1 - Faq Section Start', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-1', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'tanda' ),
                        'value' => esc_html__( 'faq-area default-padding bg-gray', 'tanda' ),
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
                        'value' => esc_html__( 'Most common answer and question', 'tanda' ),
                        'param_name' => 'heading1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Text', 'tanda' ),
                        'param_name' => 'bttext',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Link', 'tanda' ),
                        'param_name' => 'btlink',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button',
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
                        'class' => 'faq-area default-padding bg-gray',
                        'title'   => '',
                        'heading1' => 'Most common answer and question',
                        'bttext' => '',
                        'btlink' => '',
                    ),
                    $atts
                )
            );
        

        // Fill $html var with data
        $html = '<!-- Start Faq 
    ============================================= -->
    <div class="'. $class.'">
        <div class="container">
            <div class="faq-items">
                <div class="row">

                    <div class="col-lg-5 info">
                        <h5>'. $title .'</h5>
                        <h2>'. $heading1 .'</h2>';
        if (empty($bttext)) {}
            else {
        $html.= '<a href="'. $btlink .'" class="btn btn-theme effect btn-md">'. $bttext .'</a>';
    }
        $html.= '</div>
                    <div class="col-lg-7">
                        <div class="faq-content">
                            <div class="accordion" id="accordionExample">';

        return $html;

        }

    }

}
new faq_section_start;
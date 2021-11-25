<?php

/**
* Adds new shortcode "home6-formstart-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home6_formstart_section' ) ) {

    class home6_formstart_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home6-formstart-section-shortcode', array( 'home6_formstart_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home6-formstart-section-shortcode', array( 'home6_formstart_section', 'map' ) );
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
                'name'        => esc_html__( 'Home6 Contact Start Section', 'tanda' ),
                'description' => esc_html__( 'Home6 - Contact Start Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-6', 'tanda'),
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
                        'title'   => '',
                        'des' => '',

                    ),
                    $atts
                )
            );

        // Fill $html var with data
        $html = '<!-- Start Appoinment Form -->
                        <div class="form col-lg-5 offset-lg-1">
                            <div class="appoinment-form wow fadeInUp">
                                <div class="heading">
                                    <h4>'. $title .'</h4>
                                    <p>
                                        '. $des .'
                                    </p>
                                </div>';

        return $html;

        }

    }

}
new home6_formstart_section;
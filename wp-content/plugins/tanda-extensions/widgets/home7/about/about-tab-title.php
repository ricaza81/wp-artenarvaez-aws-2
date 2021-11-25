<?php

/**
* Adds new shortcode "home7-about-tab-title-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home7_about_title_start' ) ) {

    class home7_about_title_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home7-about-tab-title-shortcode', array( 'home7_about_title_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home7-about-tab-title-shortcode', array( 'home7_about_title_start', 'map' ) );
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
                'name'        => esc_html__( 'Home 7 About Tab Title Start', 'tanda' ),
                'description' => esc_html__( 'Home 7 About', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-7', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attributes
                    
                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Active Class', 'tanda' ),
                        'value' => esc_html__( 'active', 'tanda' ),
                        'param_name' => 'class',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Id', 'tanda' ),
                        'param_name' => 'id',
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
                        'class' => 'active',
                        'id' => '',
                        'title' => '',
                    ),
                    $atts
                )
            );


        // Fill $html var with data
        $html = '<li class="nav-item">
                                <a href="" data-target="#'. $id .'" data-toggle="tab" class="'. $class .' nav-link">'. $title .'</a>';

        return $html;

        }

    }

}
new home7_about_title_start;
<?php

/**
* Adds new shortcode "home7-about-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home7_about_section_start' ) ) {

    class home7_about_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home7-about-section-start-shortcode', array( 'home7_about_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home7-about-section-start-shortcode', array( 'home7_about_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Home 7 About Section Start', 'tanda' ),
                'description' => esc_html__( 'Home 7 About', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-7', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attributes

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image', 'tanda' ),
                        'param_name' => 'heroimg',
                        // 'value' => __( 'Default value', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon',
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
                        'heading' => esc_html__( 'Sub title', 'tanda' ),
                        'param_name' => 'sub',
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
                        'holder' => 'p',
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
                        'heroimg' => 'heroimg',
                        'title'   => '',
                        'heading' => '',
                        'des'   => '',
                        'sub' => '',
                        'icon' => '',
                    ),
                    $atts
                )
            );

        $img_url1 = wp_get_attachment_image_src( $heroimg, "full");

        // Fill $html var with data
        $html = '<!-- Star About Area
    ============================================= -->
    <div class="about-content-area bg-gray default-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="thumb">
                        <img src="'. $img_url1[0] .'" alt="Thumb">
                        <div class="overlay">
                            <div class="icon">
                                <i class="'. $icon .'"></i>
                            </div>
                            <div class="content">
                                <h4>'. $title .'</h4>
                                <p>
                                    '. $sub .'
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 info">
                    <h2>'. $heading .'</h2>
                    <p>
                        '. $des .'
                    </p>
                    <div class="content-tabs">
                        <ul id="tabs" class="nav nav-tabs">';

        return $html;

        }

    }

}
new home7_about_section_start;
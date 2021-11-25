<?php

/**
* Adds new shortcode "pages-about2-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'pages_about2_section_start' ) ) {

    class pages_about2_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-about2-section-start-shortcode', array( 'pages_about2_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-about2-section-start-shortcode', array( 'pages_about2_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Pages About Section Start', 'tanda' ),
                'description' => esc_html__( 'Pages - About Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attributes
                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image One', 'tanda' ),
                        'param_name' => 'heroimg',
                        // 'value' => __( 'Default value', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image Two', 'tanda' ),
                        'param_name' => 'heroimg1',
                        // 'value' => __( 'Default value', 'tanda' ),
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
                        'heroimg1' => 'heroimg1',
                        'title'   => '',
                        'heading' => '',
                        'des'   => '',


                    ),
                    $atts
                )
            );

        $img_url = wp_get_attachment_image_src( $heroimg, "full");
        $img_url1 = wp_get_attachment_image_src( $heroimg1, "full");
        

        // Fill $html var with data
        $html = '<!-- Star About Area
    ============================================= -->
    <div class="about-area faq-area inc-shape default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="thumb"> 
                    <img src="'. $img_url[0] .'" alt="Thumb">
                    <img src="'. $img_url1[0] .'" alt="Thumb">
                    <div class="overlay">
                        <div class="content">
                            <h4>'. $title .'</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 info">
                <h2>'. $heading .'</h2>
                <p>
                    '. $des .' 
                </p>
                <div class="faq-content accordion" id="accordionExample">';

        return $html;

        }

    }

}
new pages_about2_section_start;
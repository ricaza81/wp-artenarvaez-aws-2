<?php

/**
* Adds new shortcode "pages-casestudiessingle-section-startv1-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'casestudiessingle_section_startv1' ) ) {

    class casestudiessingle_section_startv1 {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-casestudiessingle-section-startv1-shortcode', array( 'casestudiessingle_section_startv1', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-casestudiessingle-section-startv1-shortcode', array( 'casestudiessingle_section_startv1', 'map' ) );
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
                'name'        => esc_html__( 'Case Single Start', 'tanda' ),
                'description' => esc_html__( 'Pages - Case Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image', 'tanda' ),
                        'param_name' => 'image',
                        // 'value' => __( 'Default value', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Details',
                    ),
                    
                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Heading', 'tanda' ),
                        'param_name' => 'title',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Details',
                    ),
                    
                    array(
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Description', 'tanda' ),
                        'param_name' => 'des',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Details',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Text', 'tanda' ),
                        'param_name' => 'text1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Details', 'tanda' ),
                        'param_name' => 'des1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Text', 'tanda' ),
                        'param_name' => 'text2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Details', 'tanda' ),
                        'param_name' => 'des2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Text', 'tanda' ),
                        'param_name' => 'text3',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Details', 'tanda' ),
                        'param_name' => 'des3',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),


                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Text', 'tanda' ),
                        'param_name' => 'text4',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Details', 'tanda' ),
                        'param_name' => 'des4',
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
                        'image' => 'image',
                        'title' => '',
                        'des' => '',
                        'text1' => '',
                        'des1' => '',
                        'text2' => '',
                        'des2' => '',
                        'text3' => '',
                        'des3' => '',
                        'text4' => '',
                        'des4' => '',
                    ),
                    $atts
                )
            );
        
        $img_url = wp_get_attachment_image_src( $image, "full");

        // Fill $html var with data
        $html = '<!-- Start Case Details 
    ============================================= -->
    <div class="case-details-area services-details-area default-padding">
        <div class="container">
            <div class="case-content">
                <div class="top-info">
                    <div class="row">
                        <div class="col-lg-7 thumb">
                            <img src="'. $img_url[0] .'" alt="Thumb">
                        </div>
                        <div class="col-lg-5 left-info">
                            <h2>'. $title.'</h2>
                            <p>
                                '. $des.'
                            </p>
                            <ul class="project-info">
                            <li>
                                <div class="title"><h5>'. $text1 .'</h5></div>
                                <div class="details">'. $des1 .'</div>
                            </li>
                            <li>
                                <div class="title"><h5>'. $text2 .'</h5></div>
                                <div class="details">'. $des2 .'</div>
                            </li>
                            <li>
                                <div class="title"><h5>'. $text3 .'</h5></div>
                                <div class="details">'. $des3 .'</div>
                            </li>
                            <li>
                                <div class="title"><h5>'. $text4 .'</h5></div>
                                <div class="details">'. $des4 .'</div>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>';

        return $html;

        }

    }

}
new casestudiessingle_section_startv1;
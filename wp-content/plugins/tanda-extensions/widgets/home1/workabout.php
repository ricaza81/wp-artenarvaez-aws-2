<?php

/**
* Adds new shortcode "home1-workabout-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'workabout_section' ) ) {

    class workabout_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-workabout-section-shortcode', array( 'workabout_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-workabout-section-shortcode', array( 'workabout_section', 'map' ) );
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
                'name'        => esc_html__( 'Work About Section', 'tanda' ),
                'description' => esc_html__( 'Home1 - Work About Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-1', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Hero Image', 'tanda' ),
                        'param_name' => 'heroimg',
                        // 'value' => __( 'Default value', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'tanda' ),
                        'value' => esc_html__( 'works-about-area overflow-hidden', 'tanda' ),
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

                  array(
                    'type' => 'textfield',
                    'holder' => 'h1',
                    'heading' => esc_html__( 'Heading Two', 'tanda' ),
                    'param_name' => 'headingtwo',
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

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'List One Title', 'tanda' ),
                        'param_name' => 'listone',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'List',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'List Two Title', 'tanda' ),
                        'param_name' => 'listtwo',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'List',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Counter Title', 'tanda' ),
                        'param_name' => 'countertitle',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Counter',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Counter Number', 'tanda' ),
                        'param_name' => 'counter',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Counter',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title', 'tanda' ),
                        'param_name' => 'bttext',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Link', 'tanda' ),
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
                        'class' => 'works-about-area overflow-hidden',
                        'title'   => '',
                        'heading'   => '',
                        'headingtwo'   => '',
                        'des' => '',
                        'listone'   => '',
                        'listtwo'   => '',
                        'counter'   => '',
                        'countertitle'   => '',
                        'bttext'   => '',
                        'btlink'   => '',
                        'heroimg' => 'heroimg',
                    ),
                    $atts
                )
            );

            $img_url = wp_get_attachment_image_src( $heroimg, "full");
        

        // Fill $html var with data
        $html = '<!-- Start Works About 
    ============================================= -->
    <div class="'. $class .'">
        <div class="container">
            <div class="works-about-items default-padding">
                <div class="row align-center">
                    <div class="col-lg-6 info">
                        <h5>'. $title .'</h5>
                        <h2>'. $heading .'<br>'. $headingtwo .'</h2>
                        <p>
                             '. $des .' 
                        </p>
                        <ul>
                            <li>
                                <h5>'. $listone .'</h5>
                            </li>
                            <li>
                                <h5>'. $listtwo .'</h5>
                            </li>
                        </ul>';
                        if (empty($bttext)) {}
                            else {
                        $html.='<a href="'. $btlink .'" class="btn btn-theme effect btn-sm">'. $bttext .'</a>';
                    }
                   $html.= '</div>
                    <div class="col-lg-6">
                        <div class="thumb">
                            <img src="'. $img_url[0] .'" alt="Thumb">
                            <div class="fun-fact">
                                <div class="timer" data-to="'. $counter .'" data-speed="5000"></div>
                                <span class="medium">'. $countertitle .'</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Works About Area -->';

        return $html;

        }

    }

}
new workabout_section;
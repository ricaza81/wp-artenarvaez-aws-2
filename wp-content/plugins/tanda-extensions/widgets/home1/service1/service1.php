<?php

/**
* Adds new shortcode "home1-service1-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'service1_section' ) ) {

    class service1_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-service1-section-shortcode', array( 'service1_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-service1-section-shortcode', array( 'service1_section', 'map' ) );
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
                'name'        => esc_html__( 'Service1 Section', 'tanda' ),
                'description' => esc_html__( 'Home1 - Service1 Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-1', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                   array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'tanda' ),
                        'value' => esc_html__( 'flaticon-cogwheel', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon1',
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
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Description', 'tanda' ),
                        'param_name' => 'des',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Link', 'tanda' ),
                        'value' => esc_html__( 'https://creativedigital.tech/tandawordpress/services-single/', 'tanda' ),
                        'param_name' => 'btlink1',
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
                        'icon1' => 'flaticon-cogwheel',
                        'title'   => '',
                        'des' => '',
                        'bttext' => '',
                        'btlink1' => 'https://creativedigital.tech/tandawordpress/services-single/',
                    ),
                    $atts
                )
            );
        

        // Fill $html var with data
        $html = '<!-- Single Item -->
                <div class="item">
                    <div class="icon">
                        <i class="'. $icon1 .'"></i>
                    </div>
                    <div class="info">
                        <h4><a href="'. $btlink1 .'">'. $title .'</a></h4>
                        <p>
                            '. $des .'
                        </p>
                        <a href="https://creativedigital.tech/tandawordpress/services-single/"><i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                <!-- End Single Item -->';

        return $html;

        }

    }

}
new service1_section;
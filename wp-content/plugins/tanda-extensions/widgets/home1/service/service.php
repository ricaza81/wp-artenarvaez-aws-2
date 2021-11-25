<?php

/**
* Adds new shortcode "home1-service-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'service_section' ) ) {

    class service_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-service-section-shortcode', array( 'service_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-service-section-shortcode', array( 'service_section', 'map' ) );
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
                'name'        => esc_html__( 'Service Section', 'tanda' ),
                'description' => esc_html__( 'Home1 - Service Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-1', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'One',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title', 'tanda' ),
                        'param_name' => 'title',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'One',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'p',
                        'heading' => esc_html__( 'Link', 'tanda' ),
                        'param_name' => 'link',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'One',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'p',
                        'heading' => esc_html__( 'Description', 'tanda' ),
                        'param_name' => 'des',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'One',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Two',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title', 'tanda' ),
                        'param_name' => 'title1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Two',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'p',
                        'heading' => esc_html__( 'Link', 'tanda' ),
                        'param_name' => 'link1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Two',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'p',
                        'heading' => esc_html__( 'Description', 'tanda' ),
                        'param_name' => 'des1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Two',
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
                        'link' => '',
                        'icon'   => '',
                        'des'   => '',
                        'title1'   => '',
                        'link1' => '',
                        'icon1'   => '',
                        'des1'   => '',
                    ),
                    $atts
                )
            );
        

        // Fill $html var with data
        $html = '<div class="col-lg-6 col-md-6 item-grid">
        <!-- Single Item -->
                        <div class="item">
                            <i class="'. $icon .'"></i>
                            <h5><a href="'. $link .'">'. $title .'</a></h5>
                            <p>
                                 '. $des .'
                            </p>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <i class="'. $icon1 .'"></i>
                            <h5><a href="'. $link1 .'">'. $title1 .'</a></h5>
                            <p>
                                 '. $des1 .'
                            </p>
                        </div>
                        <!-- End Single Item -->

                        </div>';

        return $html;

        }

    }

}
new service_section;
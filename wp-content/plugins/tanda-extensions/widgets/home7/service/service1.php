<?php

/**
* Adds new shortcode "home7-service-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home7_service_section' ) ) {

    class home7_service_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home7-service-section-shortcode', array( 'home7_service_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home7-service-section-shortcode', array( 'home7_service_section', 'map' ) );
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
                'name'        => esc_html__( 'Home 7 Service Section', 'tanda' ),
                'description' => esc_html__( 'Home7 - Service Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-7', 'tanda'),
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
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Icon Class', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'bticon',
                        'value' => esc_html__( 'fas fa-arrow-alt-circle-right', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button',
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
                        'heading' => esc_html__( 'Link', 'tanda' ),
                        'value' => esc_html__( 'https://creativedigital.tech/tandawordpress/services-single/', 'tanda' ),
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
                        'heroimg' => 'heroimg',
                        'title'   => '',
                        'des' => '',
                        'bttext' => '',
                        'btlink' => 'https://creativedigital.tech/tandawordpress/services-single/',
                        'bticon' => '',
                    ),
                    $atts
                )
            );
         $img_url = wp_get_attachment_image_src( $heroimg, "full");

        // Fill $html var with data
        $html = '    <!-- Single Item -->
                <div class="item">
                    <div class="icon">
                        <img src="'. $img_url[0] .'" alt="Icon">
                    </div>
                    <div class="info">
                        <h4>'. $title .'</h4>
                        <p>
                            '. $des .' 
                        </p>
                        <a href="'. $btlink .'">'. $bttext .' <i class="'. $bticon .'"></i></a>
                    </div>
                </div>
                <!-- End Single Item -->';

        return $html;

        }

    }

}
new home7_service_section;
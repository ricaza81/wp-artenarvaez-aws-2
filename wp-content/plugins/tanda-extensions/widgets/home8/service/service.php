<?php

/**
* Adds new shortcode "home8-service-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home8_service_section' ) ) {

    class home8_service_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home8-service-section-shortcode', array( 'home8_service_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home8-service-section-shortcode', array( 'home8_service_section', 'map' ) );
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
                'name'        => esc_html__( 'Home8 Service Section', 'tanda' ),
                'description' => esc_html__( 'Home8 - Service Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-8', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                   array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Icon Image', 'tanda' ),
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
                        'heading' => esc_html__( 'Number', 'tanda' ),
                        'param_name' => 'no',
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
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Link', 'tanda' ),
                        'value' => esc_html__( 'https://creativedigital.tech/tandawordpress/services-single/', 'tanda' ),
                        'param_name' => 'btlink',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button',
                    ),
                    
                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Icon Class', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'bticon', 
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
                        'no' => '',
                        'bttext' => '',
                        'bticon' => '',
                        'btlink' => 'https://creativedigital.tech/tandawordpress/services-single/',
                    ),
                    $atts
                )
            );
         $img_url = wp_get_attachment_image_src( $heroimg, "full");

        // Fill $html var with data
        $html = ' <!-- Single Item -->
                <div class="item">
                    <div class="icon">
                        <img src="'. $img_url[0] .'" alt="Icon">
                    </div>
                    <div class="info">
                        <h4>'. $title .'</h4>
                        <p>
                            '. $des .'
                        </p>
                        <div class="bottom">
                            <span>'. $no .'</span>';
                            if (empty($bttext)) {}
                            else {
                            $html.= '<a href="'. $btlink .'">'. $bttext .' <i class="'. $bticon .'"></i></a>'; }
                        $html.='</div>
                    </div>
                </div>';

        return $html;

        }

    }

}
new home8_service_section;
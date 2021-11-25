<?php

/**
* Adds new shortcode "service3-section-tab-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'service3_tab_section' ) ) {

    class service3_tab_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'service3-section-tab-shortcode', array( 'service3_tab_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'service3-section-tab-shortcode', array( 'service3_tab_section', 'map' ) );
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
                'name'        => esc_html__( 'service3 Section Tab', 'tanda' ),
                'description' => esc_html__( 'Pages - service3 Tab Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image', 'tanda' ),
                        'param_name' => 'heroimage',
                        // 'value' => __( 'Default value', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Active Class', 'tanda' ),
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
                        'heading' => esc_html__( 'List One Text', 'tanda' ),
                        'param_name' => 'l1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'List',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'List Two Text', 'tanda' ),
                        'param_name' => 'l2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'List',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'List Three Text', 'tanda' ),
                        'param_name' => 'l3',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'List',
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
                        'heading' => esc_html__( 'Button Link', 'tanda' ),
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
                        'heroimage' => 'heroimage',
                        'id' => '',
                        'class' => '',
                        'icon' => '',
                        'title' => '',
                        'des' => '',
                        'l1' => '',
                        'l2' => '',
                        'l3' => '',
                        'bttext' => '',
                        'btlink' => '',
                    ),
                    $atts
                )
            );

        $imageurl = wp_get_attachment_image_src( $heroimage, "full");
        
        // Fill $html var with data
        $html = '<div id="'. $id .'" class="tab-pane fade '. $class .'">
                        <div class="row">
                            <div class="col-lg-5 col-md-12 thumb" style="background-image: url('. $imageurl[0] .');"></div>
                            <div class="col-lg-7 col-md-12 info">
                                <div class="content">
                                    <i class="'. $icon .'"></i>
                                    <h2>'. $title .'</h2>
                                    <p>
                                        '. $des .'
                                    </p>
                                    <ul>
                                        <li>'. $l1 .'</li>
                                        <li>'. $l2 .'</li>
                                        <li>'. $l3 .'</li>
                                    </ul>';
        if (empty($bttext)) {}
            else {
        $html.= '<a href="'. $btlink .'" class="btn-more">'. $bttext .'</a>';
    }
        $html.= '</div>
                            </div>
                        </div>
                    </div>';

        return $html;

        }

    }

}
new service3_tab_section;
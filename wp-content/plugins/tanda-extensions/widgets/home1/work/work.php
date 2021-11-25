<?php

/**
* Adds new shortcode "home1-work-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'work_section' ) ) {

    class work_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-work-section-shortcode', array( 'work_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-work-section-shortcode', array( 'work_section', 'map' ) );
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
                'name'        => esc_html__( 'Work Section', 'tanda' ),
                'description' => esc_html__( 'Home1 - Work Section', 'tanda' ),
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
                        'value' => esc_html__( 'flaticon-help', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Number', 'tanda' ),
                        'param_name' => 'number',
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
                        'icon' => 'flaticon-help',
                        'number' => '',
                        'title'   => '',
                        'des' => '',
                    ),
                    $atts
                )
            );
        

        // Fill $html var with data
        $html = '<!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item">
                            <div class="item-inner">
                                <div class="icon">
                                    <i class="'. $icon .'"></i>
                                    <span>'. $number .'</span>
                                </div>
                                <h5>'. $title .'</h5>
                                <p>
                                    '. $des .'
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->';

        return $html;

        }

    }

}
new work_section;
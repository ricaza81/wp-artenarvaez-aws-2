<?php

/**
* Adds new shortcode "home1-counter-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'counter_section' ) ) {

    class counter_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-counter-section-shortcode', array( 'counter_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-counter-section-shortcode', array( 'counter_section', 'map' ) );
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
                'name'        => esc_html__( 'Counter Section', 'tanda' ),
                'description' => esc_html__( 'Home1 - Counter Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-1', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(
                    
                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'tanda' ),
                        'value' => esc_html__( 'fas fa-smile', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Counter Title', 'tanda' ),
                        'param_name' => 'title',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Counter Number', 'tanda' ),
                        'param_name' => 'number',
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
                        
                        'icon' => 'fas fa-smile',
                        'title' => '',
                        'number' => '',
                        
                    ),
                    $atts
                )
            );
        
    

        // Fill $html var with data
        $html = '<div class="col-lg-3 col-md-6 item">
	<div class="fun-fact">
		<div class="icon">
		     <i class="'. $icon .'"></i>
		 </div>
		 <div class="info">
		 	<div class="timer" data-to="'. $number .'" data-speed="5000">'. $number .'</div>
			<span class="medium">'. $title .'</span>
		 </div>
	</div>
</div>';

        return $html;

        }

    }

}
new counter_section;
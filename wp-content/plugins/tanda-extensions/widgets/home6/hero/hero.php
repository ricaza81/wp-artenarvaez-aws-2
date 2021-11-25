<?php

/**
* Adds new shortcode "home6hero-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home6hero_section' ) ) {

    class home6hero_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home6hero-section-shortcode', array( 'home6hero_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home6hero-section-shortcode', array( 'home6hero_section', 'map' ) );
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
                'name'        => esc_html__( 'Home6 hero Section', 'tanda' ),
                'description' => esc_html__( 'Home6 - hero Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-6', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // home4hero Attributes
                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image', 'tanda' ),
                        'param_name' => 'heroimg',
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

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Icon Class', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'bticon2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button2',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Text', 'tanda' ),
                        'param_name' => 'bttext2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button2',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Description', 'tanda' ),
                        'param_name' => 'btlink2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button2',
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
                        'class' => '',
                        'heroimg' => 'heroimg',
                        'title'   => '',
                        'heading' => '',
                        'des'   => 'Affixed pretend account ten natural. Need eat week even yet that. Incommode delighted he resolving sportsmen do in listening.',
                        'bttext'   => '',
                        'btlink'   => '',
                        'bticon2'   => '',
                        'bttext2'   => '',
                        'btlink2'   => '',
                    ),
                    $atts
                )
            );

        $img_url = wp_get_attachment_image_src( $heroimg, "full");
        

        // Fill $html var with data
        $html = '<div class="carousel-item '. $class .'">
    <div class="container">
        <div class="row align-center">
                    
            <div class="col-lg-6">
                <div class="content">
                    <h2 class="animated slideInDown">'. $title .' <strong>'. $heading .'</strong></h2>
                    <p class="animated slideInLeft">
                        '. $des .'
                    </p>
                    <div class="bottom">
                        <a class="btn btn-theme effect btn-md animated slideInLeft" href="'. $btlink .'">'. $bttext .'</a>
                        <div class="call-us animated slideInUp">
                            <div class="icon">
                                <i class="'. $bticon2 .'"></i>
                            </div>
                            <div class="info">
                                <h5>'. $bttext2 .'</h5>
                                <span>'. $btlink2 .'</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 thumbs">
                <img class="animated slideInUp" src="'. $img_url[0] .'" alt="Thumb">
            </div>

        </div>
    </div>
</div>';

        return $html;

        }

    }

}
new home6hero_section;
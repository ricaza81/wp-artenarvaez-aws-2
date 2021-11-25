<?php

/**
* Adds new shortcode "home7-hero-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home7_hero_section' ) ) {

    class home7_hero_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home7-hero-section-shortcode', array( 'home7_hero_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home7-hero-section-shortcode', array( 'home7_hero_section', 'map' ) );
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
                'name'        => esc_html__( 'Hero Section', 'tanda' ),
                'description' => esc_html__( 'Home7 - Hero Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-7', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attributes
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
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Background Image', 'tanda' ),
                        'param_name' => 'bgimg',
                        // 'value' => __( 'Default value', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Heading', 'tanda' ),
                        'param_name' => 'heading',
                        'value' => esc_html__( 'Creating a better', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Heading Bold Text', 'tanda' ),
                        'param_name' => 'bold',
                        'value' => esc_html__( 'IT solutions', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'p',
                        'heading' => esc_html__( 'Description', 'tanda' ),
                        'param_name' => 'des',
                        'value' => esc_html__( 'Affixed pretend account ten natural. Need eat week even yet that. Incommode delighted he resolving sportsmen do in listening.', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Text', 'tanda' ),
                        'param_name' => 'bttext',
                        'value' => esc_html__( 'start Now', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Link', 'tanda' ),
                        'param_name' => 'btlink',
                        'value' => esc_html__( '#', 'tanda' ),
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
                        'value' => esc_html__( 'fas fa-arrow-alt-circle-right', 'tanda' ),
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
                        'bgimg'   => 'bgimg',
                        'heading' => 'Creating a better',
                        'bold' => 'IT solutions',
                        'des'   => 'Affixed pretend account ten natural. Need eat week even yet that. Incommode delighted he resolving sportsmen do in listening.',
                        'bttext'   => 'start Now',
                        'btlink'   => '#',
                        'bticon'   => 'fas fa-arrow-alt-circle-right',
                    ),
                    $atts
                )
            );

        $img_url = wp_get_attachment_image_src( $heroimg, "full");
        $img_url1 = wp_get_attachment_image_src( $bgimg, "full");
        

        // Fill $html var with data
        $html = '<!-- Start Banner 
    ============================================= -->
    <div class="banner-area auto-height text-light bg-gradient mar-top-100p">
        <div class="item">
            <div class="container">
                <div class="row align-center">
                                    
                    <div class="col-lg-6">
                        <div class="content">
                            <h2 class="wow fadeInDown">'. $heading .' <strong>'. $bold .'</strong></h2>
                            <p class="wow fadeInLeft">
                                '. $des .'
                            </p>';
                            if (empty($bttext)) {}
            else {
                $html .= '<a class="btn circle btn-light effect btn-md wow fadeInUp" href="'. $btlink .'">'. $bttext .' <i class="'. $bticon .'"></i></a>';
            }
                            $html .= '</div>
                    </div>
                    <div class="col-lg-6 thumb">
                        <img class="wow fadeInUp" src="'. $img_url[0] .'" alt="Thumb">
                    </div>

                </div>
            </div>
        </div>
        <!-- Fixed Shape -->
        <div class="shape" style="background-image: url('. $img_url1[0] .');"></div>
        <!-- End Fixed Shape -->
    </div>
    <!-- End Banner -->';

        return $html;

        }

    }

}
new home7_hero_section;
<?php

/**
* Adds new shortcode "home1-home3hero-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home3hero_section' ) ) {

    class home3hero_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-home3hero-section-shortcode', array( 'home3hero_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-home3hero-section-shortcode', array( 'home3hero_section', 'map' ) );
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
                'name'        => esc_html__( 'Home3 hero Section', 'tanda' ),
                'description' => esc_html__( 'Home3 - hero Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-3', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // home3hero Attributes
                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'home3hero Image', 'tanda' ),
                        'param_name' => 'home3heroimg',
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
                        'value' => esc_html__( 'Optimize IT Systems', 'tanda' ),
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
                        'home3heroimg' => 'home3heroimg',
                        'title'   => 'Optimize IT Systems',
                        'heading' => 'Creating a better',
                        'bold' => 'IT solutions',
                        'des'   => 'Affixed pretend account ten natural. Need eat week even yet that. Incommode delighted he resolving sportsmen do in listening.',
                        'bttext'   => 'start Now',
                        'btlink'   => '#',
                    ),
                    $atts
                )
            );

        $img_url = wp_get_attachment_image_src( $home3heroimg, "full");
        

        // Fill $html var with data
        $html = '<!-- Start Banner 
    ============================================= -->
    <div class="banner-area home2-banner-fix shadow heading-border dark bg-cover text-light" style="background-image: url('. $img_url[0] .');">
        <div class="item-box">
            <div class="item">
                <div class="container">
                    <div class="row align-center">
                                        
                        <div class="col-lg-6">
                            <div class="content">
                                <h4 class="wow fadeInUp">'. $title .' </h4>
                                <h2 class="wow fadeInDown">'. $heading .' <strong>'. $bold .'</strong></h2>
                                <p class="wow fadeInLeft">
                                    '. $des .'
                                </p>';
        if (empty($bttext)) {}
            else {
        $html.= '<a class="btn btn-light effect btn-md wow fadeInUp" href="'. $btlink .'">'. $bttext .'</a>'; }
        $html.= '</div>
                        </div>';

        return $html;

        }

    }

}
new home3hero_section;
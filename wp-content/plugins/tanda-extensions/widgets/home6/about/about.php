<?php

/**
* Adds new shortcode "home6-about-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home6_about_section' ) ) {

    class home6_about_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home6-about-section-start-shortcode', array( 'home6_about_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home6-about-section-start-shortcode', array( 'home6_about_section', 'map' ) );
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
                'name'        => esc_html__( 'Home 6 About Section', 'tanda' ),
                'description' => esc_html__( 'Home 6 About', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-6', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attributes

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
                        'heading' => esc_html__( 'Icon Class', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Section1',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Heading', 'tanda' ),
                        'param_name' => 'title1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Section1',
                    ),

                     array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Link', 'tanda' ),
                        'value' => esc_html__( 'https://creativedigital.tech/tandawordpress/services-single/', 'tanda' ),
                        'param_name' => 'link1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Section1',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'p',
                        'heading' => esc_html__( 'Description', 'tanda' ),
                        'param_name' => 'des1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Section1',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Section2',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Heading', 'tanda' ),
                        'param_name' => 'title2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Section2',
                    ),

                     array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Link', 'tanda' ),
                        'value' => esc_html__( 'https://creativedigital.tech/tandawordpress/services-single/', 'tanda' ),
                        'param_name' => 'link2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Section2',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'p',
                        'heading' => esc_html__( 'Description', 'tanda' ),
                        'param_name' => 'des2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Section2',
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
                        'heading' => '',
                        'des'   => '',
                        'icon1' => '',
                        'link1' => 'https://creativedigital.tech/tandawordpress/services-single/',
                        'title1' => '',
                        'des1' => '',
                        'icon2' => '',
                        'link2' => 'https://creativedigital.tech/tandawordpress/services-single/',
                        'title2' => '',
                        'des2' => '',
                    ),
                    $atts
                )
            );

        $img_url1 = wp_get_attachment_image_src( $heroimg, "full");

        // Fill $html var with data
        $html = '<!-- Start Features Area 
    ============================================= -->
    <div class="feature-area bg-half bg-gray overflow-hidden default-padding">
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-6">
                        <h5>'. $title .'</h5>
                        <h2>
                            '. $heading .'
                        </h2>
                    </div>
                    <div class="col-lg-6">
                        <p>
                           '. $des .'
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="feature-box">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="thumb wow">
                            <img src="'. $img_url1[0] .'" alt="Thumb">
                        </div>
                    </div>
                    <div class="col-lg-6 content">
                        <div class="content-box">
                            <div class="item">
                                <div class="icon">
                                    <i class="'. $icon1 .'"></i>
                                </div>
                                <div class="info">
                                    <h5><a href="'. $link1 .'">'. $title1 .'</a></h5>
                                    <p>
                                         '. $des1 .'
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon">
                                    <i class="'. $icon2 .'"></i>
                                </div>
                                <div class="info">
                                    <h5><a href="'. $link2 .'">'. $title2 .'</a></h5>
                                    <p>
                                         '. $des2 .'
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features Area -->';

        return $html;

        }

    }

}
new home6_about_section;
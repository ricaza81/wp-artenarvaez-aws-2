<?php

/**
* Adds new shortcode "home1-about-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home1_about_section' ) ) {

    class home1_about_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-about-section-shortcode', array( 'home1_about_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-about-section-shortcode', array( 'home1_about_section', 'map' ) );
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
                'name'        => esc_html__( 'About Section', 'tanda' ),
                'description' => esc_html__( 'Home1 - About Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-1', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attributes
                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image One', 'tanda' ),
                        'param_name' => 'heroimg',
                        // 'value' => __( 'Default value', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image Two', 'tanda' ),
                        'param_name' => 'heroimg1',
                        // 'value' => __( 'Default value', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),
                    
                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'tanda' ),
                        'value' => esc_html__( 'about-area inc-shape default-padding', 'tanda' ),
                        'param_name' => 'class1',
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
                        'heading' => esc_html__( 'List Icon One', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'listicon1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'List',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'List Text One', 'tanda' ),
                        'param_name' => 'listtext1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'List',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'p',
                        'heading' => esc_html__( 'List Description One', 'tanda' ),
                        'param_name' => 'listdes1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'List',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'List Icon Two', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'listicon2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'List',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'List Text Two', 'tanda' ),
                        'param_name' => 'listtext2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'List',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'p',
                        'heading' => esc_html__( 'List Description Two', 'tanda' ),
                        'param_name' => 'listdes2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'List',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image', 'tanda' ),
                        'param_name' => 'heroimg2',
                        // 'value' => __( 'Default value', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Author',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Name', 'tanda' ),
                        'param_name' => 'authorname',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Author',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Job', 'tanda' ),
                        'param_name' => 'authorjob',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Author',
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
                        'heroimg1' => 'heroimg1',
                        'heroimg2' => 'heroimg2',
                        'class1' => 'about-area inc-shape default-padding',
                        'title'   => '',
                        'heading' => '',
                        'des'   => '',
                        'listicon1'   => '',
                        'listtext1'   => '',
                        'listdes1'   => '',
                        'listicon2'   => '',
                        'listtext2'   => '',
                        'listdes2'   => '',
                        'authorname' => '',
                        'authorjob' => '',

                    ),
                    $atts
                )
            );

        $img_url = wp_get_attachment_image_src( $heroimg, "full");
        $img_url1 = wp_get_attachment_image_src( $heroimg1, "full");
        $img_url2 = wp_get_attachment_image_src( $heroimg2, "full");
        

        // Fill $html var with data
        $html = '<!-- Star About Area
============================================= -->
<div class="'. $class1 .'">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="thumb">
                    <img src="'. $img_url[0] .'" alt="Thumb">
                    <img src="'. $img_url1[0] .'" alt="Thumb">
                    <div class="overlay">
                        <div class="content">
                            <h4>'. $title .'</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 info">
                <h2>'. $heading .'</h2>
                <p>
                    '. $des .' 
                </p>
                <ul>
                    <li>
                        <div class="icon">
                            <i class="'. $listicon1 .'"></i>
                        </div>
                        <div class="info">
                            <h4>'. $listtext1 .'</h4>
                            <p>
                                '. $listdes1 .' 
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="'. $listicon2 .'"></i>
                        </div>
                        <div class="info">
                            <h4>'. $listtext2 .'</h4>
                            <p>
                                '. $listdes2 .'
                            </p>
                        </div>
                    </li>
                </ul>
                <div class="author">
                    <div class="signature">
                        <img src="'. $img_url2[0] .'" alt="signature">
                    </div>
                    <div class="intro">
                        <h5>'. $authorname .'</h5>
                        <span>'. $authorjob .'</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Area -->
';

        return $html;

        }

    }

}
new home1_about_section;
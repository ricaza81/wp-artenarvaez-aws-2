<?php

/**
* Adds new shortcode "team-single-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'team_single_section_start' ) ) {

    class team_single_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'team-single-section-start-shortcode', array( 'team_single_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'team-single-section-start-shortcode', array( 'team_single_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Team Single Start', 'tanda' ),
                'description' => esc_html__( 'Pages - Team Single', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image', 'tanda' ),
                        'param_name' => 'image',
                        // 'value' => __( 'Default value', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),


                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Name', 'tanda' ),
                        'param_name' => 'name',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                    'type' => 'textfield',
                    'holder' => 'h1',
                    'heading' => esc_html__( 'Job', 'tanda' ),
                    'param_name' => 'job',
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
                        'heading' => esc_html__( 'Icon Class', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Social',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Link', 'tanda' ),
                        'param_name' => 'link1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Social',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Social',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Link', 'tanda' ),
                        'param_name' => 'link2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Social',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon3',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Social',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Link', 'tanda' ),
                        'param_name' => 'link3',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Social',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon4',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Social',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Link', 'tanda' ),
                        'param_name' => 'link4',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Social',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title 1', 'tanda' ),
                        'param_name' => 'phone',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Contact',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Info', 'tanda' ),
                        'param_name' => 'phone1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Contact',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title 2', 'tanda' ),
                        'param_name' => 'mail',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Contact',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Info', 'tanda' ),
                        'param_name' => 'mail1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Contact',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title 3', 'tanda' ),
                        'param_name' => 'web',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Contact',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Info', 'tanda' ),
                        'param_name' => 'web1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Contact',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title 4', 'tanda' ),
                        'param_name' => 'ex',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Contact',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Info', 'tanda' ),
                        'param_name' => 'ex1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Contact',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'About Title', 'tanda' ),
                        'param_name' => 'about',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'About',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'About Description', 'tanda' ),
                        'param_name' => 'about1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'About',
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
                        'image' => 'image',
                        'name' => '',
                        'job' => '',
                        'des' => '',
                        'link1' => '',
                        'icon1' => '',
                        'link2' => '',
                        'icon2' => '',
                        'link3' => '',
                        'icon3' => '',
                        'link4' => '',
                        'icon4' => '',
                        'phone' => '',
                        'phone1' => '',
                        'mail' => '',
                        'mail1' => '',
                        'web' => '',
                        'web1' => '',
                        'ex' => '',
                        'ex1' => '',
                        'about' => '',
                        'about1' => '',


                    ),
                    $atts
                )
            );

        $img_url = wp_get_attachment_image_src( $image, "full");

        // Fill $html var with data
        $html = '<!-- Start Team 
    ============================================= -->
    <div class="team-single-area default-padding">
        <div class="container">
            <div class="top-info">
                <div class="row align-center">
                    <div class="col-lg-5 thumb">
                        <img src="'. $img_url[0] .'" alt="Thumb">
                    </div>
                    <div class="col-lg-7 content">
                        <h2>'. $name .'</h2>
                        <span>'. $job .'</span>
                        <p>
                            '. $des .'
                        </p>
                        <div class="social">
                            <ul>
                                <li class="facebook">
                                    <a href="'. $link1 .'">
                                        <i class="'. $icon1 .'"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="'. $link2 .'">
                                        <i class="'. $icon2 .'"></i>
                                    </a>
                                </li>
                                <li class="youtube">
                                    <a href="'. $link3 .'">
                                        <i class="'. $icon3 .'"></i>
                                    </a>
                                </li>
                                <li class="linkedin">
                                    <a href="'. $link4 .'">
                                        <i class="'. $icon4 .'"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <ul class="basic-info">
                            <li>
                                <strong>'. $phone .' </strong> <span>'. $phone1 .'</span>
                            </li>
                            <li>
                                <strong>'. $mail .' </strong> <span>'. $mail1 .'</span>
                            </li>
                            <li>
                                <strong>'. $web .' </strong> <span><a href="'. $web1 .'">'. $web1 .'</a></span>
                            </li>
                            <li>
                                <strong>'. $ex .' </strong> <span>'. $ex1 .'</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bottom-info">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>'. $about .'</h2>
                        <p>
                            '. $about1 .'
                        </p>
                    </div>
                    <div class="col-lg-6 about-area reverse">
                        <div class="info">
                            <div class="skill-items">';

        return $html;

        }

    }

}
new team_single_section_start;
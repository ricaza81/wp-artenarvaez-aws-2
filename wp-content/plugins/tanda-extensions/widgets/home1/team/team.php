<?php

/**
* Adds new shortcode "home1-team-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'team_section' ) ) {

    class team_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-team-section-shortcode', array( 'team_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-team-section-shortcode', array( 'team_section', 'map' ) );
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
                'name'        => esc_html__( 'Team Section', 'tanda' ),
                'description' => esc_html__( 'Home1 - Team Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-1', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

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
                        'heading' => esc_html__( 'Link', 'tanda' ),
                        'value' => esc_html__( 'https://creativedigital.tech/tandawordpress/team-single/', 'tanda' ),
                        'param_name' => 'team_link',
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
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'ID', 'tanda' ),
                        'param_name' => 'id',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Plus Button Class', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'buttonicon',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class Name', 'tanda' ),
                        'param_name' => 'class1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon1',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon1',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Link', 'tanda' ),
                        'param_name' => 'link1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon1',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class Name', 'tanda' ),
                        'param_name' => 'class2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon2',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon2',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Link', 'tanda' ),
                        'param_name' => 'link2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon2',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class Name', 'tanda' ),
                        'param_name' => 'class3',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon3',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon3',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon3',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Link', 'tanda' ),
                        'param_name' => 'link3',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon3',
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
                        'buttonicon' => '',
                        'title'   => '',
                        'job' => '',
                        'team_link'=> 'https://creativedigital.tech/tandawordpress/team-single/',
                        'id' => '',
                        'link1' => '',
                        'class1' => '',
                        'icon1' => '',
                        'link2' => '',
                        'class2' => '',
                        'icon2' => '',
                        'link3' => '',
                        'class3' => '',
                        'icon3' => '',
                    ),
                    $atts
                )
            );

        $img_url = wp_get_attachment_image_src( $heroimg, "full");
        

        // Fill $html var with data
        $html = '<!-- Sngle Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="'. $img_url[0] .'" alt="Thumb">
                                <div class="social">
                                    <input type="checkbox" id="'. $id .'" class="share-toggle" hidden>
                                    <label for="'. $id .'" class="share-button">
                                        <i class="'. $buttonicon .'"></i>
                                    </label>
                                    <a href="'. $link1 .'" class="share-icon '. $class1 .'">
                                        <i class="'. $icon1 .'"></i>
                                    </a>
                                    <a href="'. $link2 .'" class="share-icon '. $class2 .'">
                                        <i class="'. $icon2 .'"></i>
                                    </a>
                                    <a href="'. $link3 .'" class="share-icon '. $class3 .'">
                                        <i class="'. $icon3 .'"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h4><a href="'. $team_link .'">'. $title .'</a></h4>
                                <span>'. $job .'</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Sngle Item -->';

        return $html;

        }

    }

}
new team_section;
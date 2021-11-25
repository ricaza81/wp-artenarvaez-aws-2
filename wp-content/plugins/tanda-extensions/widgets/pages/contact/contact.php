<?php

/**
* Adds new shortcode "pages-contact-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'pages_contact_section' ) ) {

    class pages_contact_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-contact-section-shortcode', array( 'pages_contact_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-contact-section-shortcode', array( 'pages_contact_section', 'map' ) );
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
                'name'        => esc_html__( 'Pages contact Section', 'tanda' ),
                'description' => esc_html__( 'Pages - contact Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attributes

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Tab One Title', 'tanda' ),
                        'param_name' => 'title1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Tab Two Title', 'tanda' ),
                        'param_name' => 'title2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Map Iframe Src', 'tanda' ),
                        'param_name' => 'map',
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
                        'group' => 'Icon1',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Heading', 'tanda' ),
                        'param_name' => 'h1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon1',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Description', 'tanda' ),
                        'param_name' => 'd1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon1',
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
                        'heading' => esc_html__( 'Heading', 'tanda' ),
                        'param_name' => 'h2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon2',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Description', 'tanda' ),
                        'param_name' => 'd2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon2',
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
                        'heading' => esc_html__( 'Heading', 'tanda' ),
                        'param_name' => 'h3',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon3',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Description', 'tanda' ),
                        'param_name' => 'd3',
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
                        'title1'   => '',
                        'title2' => '',
                        'map' => '',
                        'icon1'   => '',
                        'h1' => '',
                        'd1' => '',
                        'icon2'   => '',
                        'h2' => '',
                        'd2' => '',
                        'icon3'   => '',
                        'h3' => '',
                        'd3' => '',

                    ),
                    $atts
                )
            );

        // Fill $html var with data
        $html = '<div class="col-lg-6 info">
    <div class="contact-tabs">
        <ul id="tabs" class="nav nav-tabs">
            <li class="nav-item">
                <a href="" data-target="#tab1" data-toggle="tab" class="active nav-link">
                    '. $title1 .'
                </a>
            </li>
            <li class="nav-item">
                <a href="" data-target="#tab2" data-toggle="tab" class="nav-link">
                    '. $title2 .'
                </a>
            </li>
        </ul>
        <div id="tabsContent" class="tab-content">
            <div id="tab1" class="tab-pane fade active show">
                <ul>
                    <li>
                        <div class="icon">
                            <i class="'. $icon1 .'"></i>
                        </div>
                        <div class="info">
                            <p>
                                '. $h1 .'
                                <span>'. $d1 .'</span>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="'. $icon2 .'"></i>
                        </div>
                        <div class="info">
                            <p>
                                '. $h2 .'
                                <span>'. $d2 .'</span>
                            </p>
                        </div>
                    </li><li>
                        <div class="icon">
                            <i class="'. $icon3 .'"></i>
                        </div>
                        <div class="info">
                            <p>
                                '. $h3 .'
                                <span>'. $d3 .'</span>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="tab2" class="tab-pane fade">
                <iframe src="'. $map .'"></iframe>
            </div>
        </div>
    </div>
</div>';

        return $html;

        }

    }

}
new pages_contact_section;
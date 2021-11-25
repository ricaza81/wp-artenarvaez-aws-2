<?php

/**
* Adds new shortcode "pages-casestudies-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'pages_casestudies_section' ) ) {

    class pages_casestudies_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-casestudies-section-shortcode', array( 'pages_casestudies_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-casestudies-section-shortcode', array( 'pages_casestudies_section', 'map' ) );
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
                'name'        => esc_html__( 'Pages Case Section', 'tanda' ),
                'description' => esc_html__( 'Pages - Case Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'tanda'),
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
                        'param_name' => 'link',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                     array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Category', 'tanda' ),
                        'param_name' => 'category',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Icon Class', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'bticon',
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
                        'heroimg' => 'heroimg',
                        'title'   => '',
                        'link' => '',
                        'category' => '',
                        'bticon' => '',
                    ),
                    $atts
                )
            );

            $img_url = wp_get_attachment_image_src( $heroimg, "full");
        

        // Fill $html var with data
        $html = '
        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
    <div class="thumb">
        <img src="'. $img_url[0] .'" alt="Thumb">
    </div>
    <div class="info">
        <div class="info-items">
            <div class="left-info">
                <h4>
                    <a href="'. $link .'">'. $title .'</a>
                </h4>
                <ul>
                    <li>'. $category .'</li>
                </ul>
            </div>
            <div class="right-info">
                <a class="item popup-gallery" href="'. $img_url[0] .'"><i class="'. $bticon.'"></i></a>
            </div>
        </div>
    </div>
</div>
                        </div>
                        <!-- End Single Item -->';


        return $html;

        }

    }

}
new pages_casestudies_section;
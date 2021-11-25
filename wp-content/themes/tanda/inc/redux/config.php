<?php

if (!class_exists('Redux'))
    {
    return;
    }
function newIconFont() 
    { 
        wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/fontawesome-all.css' );
    }

add_action( 'redux/page/tanda_options/enqueue', 'newIconFont' );

$opt_name = "tanda_options";
$theme    = wp_get_theme();
$args = array(
    'opt_name' => $opt_name,
    'display_name' => $theme->get('Name') ,
    'display_version' => $theme->get('Version') ,
    'menu_type' => 'menu',
    'allow_sub_menu' => true,
    'menu_title'        => esc_html__( 'Tanda Options', 'tanda' ),
    'google_api_key' => '',
    'google_update_weekly' => false,
    'async_typography' => true,
    'admin_bar' => false,
    'admin_bar_icon' => '',
    'admin_bar_priority' => 50,
    'global_variable' => $opt_name,
    'dev_mode' => false,
    'update_notice' => false,
    'customizer' => false,
    'page_priority' => 3,
    'page_parent' => 'themes.php',
    'page_permissions' => 'manage_options',
    'menu_icon' => '',
    'last_tab' => '',
    'page_icon' => 'icon-themes',
    'page_slug' => 'themeoptions',
    'save_defaults' => true,
    'default_show' => false,
    'default_mark' => '',
    'show_import_export' => true
);
Redux::setArgs( $opt_name, $args );

Redux::setSection($opt_name, array(
    'title' => esc_html__('Top Bar', 'tanda') ,
    'id' => esc_html__('topbar', 'tanda') ,
    'icon' => 'far fa-arrow-alt-circle-up',
    'fields' => array(

        array(
            'title'     => esc_html__( 'Heading', 'tanda' ),
            'id'        => 'headingsection1',
            'type'      => 'text',
            'default'   => esc_html__( 'Contact Info', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section 1', 'tanda' ),
            'id'        => 't_1',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Title', 'tanda' ),
            'id'        => 't_title1',
            'type'      => 'text',
            'default'   => esc_html__( 'Address', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'tanda' ),
            'id'        => 't_icon1',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'tanda' ),
            'type'      => 'text',
            'default'   => esc_html__( 'fas fa-map-marker-alt', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Text', 'tanda' ),
            'id'        => 't_text1',
            'type'      => 'text',
            'default'   => esc_html__( 'California, TX 70240', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section 2', 'tanda' ),
            'id'        => 't_2',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Title', 'tanda' ),
            'id'        => 't_title2',
            'type'      => 'text',
            'default'   => esc_html__( 'Email', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'tanda' ),
            'id'        => 't_icon2',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'tanda' ),
            'type'      => 'text',
            'default'   => esc_html__( 'fas fa-envelope-open', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Text', 'tanda' ),
            'id'        => 't_text2',
            'type'      => 'text',
            'default'   => esc_html__( 'Info@gmail.com', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section 3', 'tanda' ),
            'id'        => 't_3',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Title', 'tanda' ),
            'id'        => 't_title3',
            'type'      => 'text',
            'default'   => esc_html__( 'OFFICE HOURS', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'tanda' ),
            'id'        => 't_icon3',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'tanda' ),
            'type'      => 'text',
            'default'   => esc_html__( 'fas fa-clock', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Text', 'tanda' ),
            'id'        => 't_text3',
            'type'      => 'text',
            'default'   => esc_html__( 'Office Hours: 8:00 AM – 7:45 PM', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section 4', 'tanda' ),
            'id'        => 't_4',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Title', 'tanda' ),
            'id'        => 't_title4',
            'type'      => 'text',
            'default'   => esc_html__( 'Phone', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'tanda' ),
            'id'        => 't_icon4',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'tanda' ),
            'type'      => 'text',
            'default'   => esc_html__( 'fas fa-phone', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Text', 'tanda' ),
            'id'        => 't_text4',
            'type'      => 'text',
            'default'   => esc_html__( '+123 456 7890', 'tanda' ),
            'indent'    => true
        ),
    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Social Icons', 'tanda') ,
    'id' => esc_html__('socialicons', 'tanda') ,
    'icon' => 'fas fa-heading',
    'subsection' => true,
    'fields' => array(

        array(
            'title'     => esc_html__( 'Heading', 'tanda' ),
            'id'        => 'headingsection3',
            'type'      => 'text',
            'default'   => esc_html__( 'Connect With Us', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section One', 'tanda' ),
            'id'        => 'se1',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'tanda' ),
            'id'        => 'sicon1',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'tanda' ),
            'type'      => 'text',
            'default'   => esc_html__( 'fab fa-facebook-f', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Link', 'tanda' ),
            'id'        => 'sl1',
            'type'      => 'text',
            'default'   => esc_html__( '#', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section Two', 'tanda' ),
            'id'        => 'se2',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'tanda' ),
            'id'        => 'sicon2',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'tanda' ),
            'type'      => 'text',
            'default'   => esc_html__( 'fab fa-twitter', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Link', 'tanda' ),
            'id'        => 'sl2',
            'type'      => 'text',
            'default'   => esc_html__( '#', 'tanda' ),
            'indent'    => true
        ),

         array(
            'title'     => esc_html__( 'Section Three', 'tanda' ),
            'id'        => 'se3',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'tanda' ),
            'id'        => 'sicon3',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'tanda' ),
            'type'      => 'text',
            'default'   => esc_html__( 'fab fa-linkedin-in', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Link', 'tanda' ),
            'id'        => 'sl3',
            'type'      => 'text',
            'default'   => esc_html__( '#', 'tanda' ),
            'indent'    => true
        ),


        
    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Additional Links', 'tanda') ,
    'id' => esc_html__('additional', 'tanda') ,
    'icon' => 'fas fa-heading',
    'subsection' => true,
    'fields' => array(

        array(
            'title'     => esc_html__( 'Heading', 'tanda' ),
            'id'        => 'headingsection2',
            'type'      => 'text',
            'default'   => esc_html__( 'Additional Links', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Menu Location', 'tanda' ),
            'id'        => 'addtionalmenu',
            'type'      => 'text',
            'default'   => esc_html__( 'Additional Links', 'tanda' ),
            'readonly' => true,
            'indent'    => true
        ),
    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Header', 'tanda') ,
    'id' => esc_html__('header', 'tanda') ,
    'icon' => 'far fa-arrow-alt-circle-up',
    'fields' => array(

        array(
            'title'     => esc_html__( 'Favicon', 'tanda' ),
            'id'        => 'favicon',
            'type'      => 'media',
            'default'  => array(
                'url'=> get_template_directory_uri() . '/img/favicon.png'
                ), 
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Logo', 'tanda' ),
            'id'        => 'logo_start',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Logo', 'tanda' ),
            'id'        => 'logo',
            'type'      => 'media',
            'default'  => array(
                'url'=> get_template_directory_uri() . '/img/logo-light.png'
                ), 
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Sticky Logo', 'tanda' ),
            'id'        => 'sticky-logo',
            'type'      => 'media',
            'default'  => array(
                'url'=> get_template_directory_uri() . '/img/logo.png'
                ), 
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Title', 'tanda' ),
            'id'        => 'h_title1',
            'type'      => 'text',
            'default'   => esc_html__( 'Call us today!', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'tanda' ),
            'id'        => 'h_icon1',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'tanda' ),
            'type'      => 'text',
            'default'   => esc_html__( 'fas fa-phone', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Text', 'tanda' ),
            'id'        => 'h_text1',
            'type'      => 'text',
            'default'   => esc_html__( '+123(456)123', 'tanda' ),
            'indent'    => true
        ),
    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Footer', 'tanda') ,
    'id' => esc_html__('footer', 'tanda') ,
    'icon' => 'far fa-arrow-alt-circle-up',
    'fields' => array(

        array(
            'title'     => esc_html__( 'Footer Logo', 'tanda' ),
            'id'        => 'footerlogo',
            'type'      => 'media',
            'default'  => array(
                'url'=> get_template_directory_uri() . '/img/logo-light.png'
                ), 
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Footer Logo Version 2', 'tanda' ),
            'id'        => 'footerlogo-sticky',
            'type'      => 'media',
            'default'  => array(
                'url'=> get_template_directory_uri() . '/img/logo.png'
                ), 
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Description', 'tanda' ),
            'id'        => 'footerdes',
            'type'      => 'textarea',
            'default'   => esc_html__( 'Happen active county. Winding for the morning am shyness evident to poor. Garrets because elderly new.', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'CopyRight Text', 'tanda' ),
            'id'        => 'copyright',
            'type'      => 'textarea',
            'default'   => esc_html__( '&copy; Copyright 2021. Tanda WordPres Theme By WordPressRiver', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Menu Location', 'tanda' ),
            'id'        => 'addtionalmenu',
            'type'      => 'text',
            'default'   => esc_html__( 'Footer Menu', 'tanda' ),
            'readonly' => true,
            'indent'    => true
        ),

    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Company Links', 'tanda') ,
    'id' => esc_html__('companylinkshead', 'tanda') ,
    'icon' => 'far fa-arrow-alt-circle-up',
    'subsection' => true,
    'fields' => array(

        array(
            'title'     => esc_html__( 'Heading', 'tanda' ),
            'id'        => 'companylinks',
            'type'      => 'text',
            'default'   => esc_html__( 'Company', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Menu Location', 'tanda' ),
            'id'        => 'c1',
            'type'      => 'text',
            'default'   => esc_html__( 'Company Links', 'tanda' ),
            'readonly' => true,
            'indent'    => true
        ),

    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Solutions Links', 'tanda') ,
    'id' => esc_html__('solutionlinkshead', 'tanda') ,
    'icon' => 'far fa-arrow-alt-circle-up',
    'subsection' => true,
    'fields' => array(

        array(
            'title'     => esc_html__( 'Heading', 'tanda' ),
            'id'        => 'solutionlinks',
            'type'      => 'text',
            'default'   => esc_html__( 'Solutions', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Menu Location', 'tanda' ),
            'id'        => 'sol1',
            'type'      => 'text',
            'default'   => esc_html__( 'Solution Links', 'tanda' ),
            'readonly' => true,
            'indent'    => true
        ),

    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Contact Info', 'tanda') ,
    'id' => esc_html__('contactinfofooter', 'tanda') ,
    'icon' => 'far fa-arrow-alt-circle-up',
    'subsection' => true,
    'fields' => array(

        array(
            'title'     => esc_html__( 'Heading', 'tanda' ),
            'id'        => 'contactinfo1',
            'type'      => 'text',
            'default'   => esc_html__( 'Contact Info', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section 1', 'tanda' ),
            'id'        => 'c_1',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'tanda' ),
            'id'        => 'c_icon1',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'tanda' ),
            'type'      => 'text',
            'default'   => esc_html__( 'flaticon-pin', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Text', 'tanda' ),
            'id'        => 'c_text1',
            'type'      => 'textarea',
            'default'   => esc_html__( '5919 Trussville Crossings Pkwy, Birmingham AL 35235', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section 2', 'tanda' ),
            'id'        => 'c_2',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'tanda' ),
            'id'        => 'c_icon2',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'tanda' ),
            'type'      => 'text',
            'default'   => esc_html__( 'flaticon-email-1', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Text', 'tanda' ),
            'id'        => 'c_text2',
            'type'      => 'textarea',
            'default'   => esc_html__( 'Info@gmail.com', 'tanda' ),
            'indent'    => true
        ),
        
        array(
            'title'     => esc_html__( 'Text 2', 'tanda' ),
            'id'        => 'c_text22',
            'type'      => 'textarea',
            'default'   => esc_html__( 'support@gmail.com', 'tanda' ),
            'indent'    => true
        ),
        
        array(
            'title'     => esc_html__( 'Section 3', 'tanda' ),
            'id'        => 'c_3',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'tanda' ),
            'id'        => 'c_icon3',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'tanda' ),
            'type'      => 'text',
            'default'   => esc_html__( 'flaticon-telephone', 'tanda' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Text', 'tanda' ),
            'id'        => 'c_text3',
            'type'      => 'textarea',
            'default'   => esc_html__( '+123 456 7890', 'tanda' ),
            'indent'    => true
        ),
        
        array(
            'title'     => esc_html__( 'Text 2', 'tanda' ),
            'id'        => 'c_text33',
            'type'      => 'textarea',
            'default'   => esc_html__( '+456 123 4455', 'tanda' ),
            'indent'    => true
        ),

    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Styling', 'tanda') ,
    'id' => esc_html__('tanda_color', 'tanda') ,
    'icon' => 'fas fa-edit',
    'fields' => array(
    array(
            'id'        => 'main_color_tanda',
            'title'     => esc_html__( 'Main Theme Color', 'tanda' ),
            'subtitle'  => esc_html__( 'The main color of the site.', 'tanda' ),
            'type'      => 'select',
            'options'   => array(
                '2'     => esc_html__( 'Sky Blue', 'tanda' ),
                '1'     => esc_html__( 'Strong Blue', 'tanda' ),
                '3'     => esc_html__( 'Orange', 'tanda' ),
                '4'     => esc_html__( 'Pink', 'tanda' ),
                '5'     => esc_html__( 'Green', 'tanda' ),
                '6'     => esc_html__( 'Purple', 'tanda' ),
                '7'     => esc_html__( 'Custom Colors', 'tanda' ),
            ),
            'default'   => '1',
            'indent'    => true,
        ),

    array(
            'title'     => esc_html__( 'Custom Color Option', 'tanda' ),
            'id'        => 'customcolors',
            'type'      => 'section',
            'indent'    => true,
            'required'  => array( 'main_color_tanda', 'equals', '7' ),
        ),

    array(
            'title'     => esc_html__( 'Choose Main Theme Color', 'tanda' ),
            'id'        => 'colorcode',
            'type'      => 'color',
            'default'  => '#086AD8',
            'validate' => 'color',
            'transparent' => false,
            'required'  => array( 'main_color_tanda', 'equals', '7' ),
        ),

    array(
        'title'     => esc_html__( 'Choose Theme Gradient Color', 'tanda' ),
        'id'       => 'color-gra',
        'type'     => 'color_gradient',
        'default'  => array(
            'from' => 'rgba(9,70,139,1)',
            'to'   => 'rgba(30,132,246,1)', 
        ),
    'transparent' => false,
    'required'  => array( 'main_color_tanda', 'equals', '7' ),
    ),
)
));
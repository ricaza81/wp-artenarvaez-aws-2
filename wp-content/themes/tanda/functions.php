<?php

/**
 * Tanda functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tanda
 */

/**
 * Table of Contents:

 1. Required Files
 2. Enqueue Google Fonts
 3. Register and Enqueue Styles.
 4. Register and Enqueue Scripts
 5. Tanda Theme Configuration
 6. Tanda Register Widgets
 7. Tanda Functions
 
 */

/**
 * Required Files
 */

require_once get_template_directory() . '/inc/tanda-class-wp-bootstrap-navwalker.php';

require_once get_template_directory() . '/inc/redux/config.php';

require_once get_template_directory() . '/inc/redux/color.php';

/*TGM PLUGIN*/
require_once get_template_directory() . '/tgm-plugin/recommend_plugins.php';

 /**
 * Enqueue Google Fonts
 */

function tanda_fonts_url() {
    $font_url = '';
    
    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'tanda' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Inter:200,300,400,600,700,800&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
    }

    return $font_url;
}


/**
 * Register and Enqueue Styles.
 */

function tanda_register_styles() {
	
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );

    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );

    wp_enqueue_style( 'tanda-icons', get_template_directory_uri() . '/css/themify-icons.css' );

    wp_enqueue_style( 'tanda-flaticons', get_template_directory_uri() . '/css/flaticon-set.css' );

    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css' );

    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css' );

    wp_enqueue_style( 'owl-carousal-default', get_template_directory_uri() . '/css/owl.theme.default.min.css' );

    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );

    wp_enqueue_style( 'bootsnav', get_template_directory_uri() . '/css/bootsnav.css' );

    wp_enqueue_style( 'tanda-style', get_template_directory_uri() . '/css/style.css' );

    wp_enqueue_style( 'tanda-responsive', get_template_directory_uri() . '/css/responsive.css' );

    wp_enqueue_style( 'tanda-fonts', tanda_fonts_url(), array(), '1.0.0' );

    if( class_exists( 'ReduxFrameworkPlugin' ) ) { 

    global $tanda_options; 

    if ($tanda_options['main_color_tanda'] == 1) {
    wp_enqueue_style( 'tanda-color', get_template_directory_uri() . '/css/theme-color/color-1.css' );
    }

    elseif ($tanda_options['main_color_tanda'] == 2) {
    wp_enqueue_style( 'tanda-color', get_template_directory_uri() . '/css/theme-color/color-2.css' );
    } 

    elseif ($tanda_options['main_color_tanda'] == 3) {
    wp_enqueue_style( 'tanda-color', get_template_directory_uri() . '/css/theme-color/color-3.css' );
    } 

    elseif ($tanda_options['main_color_tanda'] == 4) {
    wp_enqueue_style( 'tanda-color', get_template_directory_uri() . '/css/theme-color/color-4.css' );
    } 

    elseif ($tanda_options['main_color_tanda'] == 5) {
    wp_enqueue_style( 'tanda-color', get_template_directory_uri() . '/css/theme-color/color-5.css' );
    } 

    elseif ($tanda_options['main_color_tanda'] == 6) {
    wp_enqueue_style( 'tanda-color', get_template_directory_uri() . '/css/theme-color/color-6.css' );
    } 

    } 
}
add_action( 'wp_enqueue_scripts', 'tanda_register_styles' );


/**
 * Register and Enqueue Scripts.
 */

function tanda_register_scripts() {

    wp_enqueue_script(
        'popper',
        get_template_directory_uri() . '/js/popper.min.js',
        array( 'jquery' ),
        '',
        true
    );

    wp_enqueue_script(
        'bootstrap',
        get_template_directory_uri() . '/js/bootstrap.min.js',
        array( 'jquery' ),
        '',
        true
    );

    wp_enqueue_script(
        'equal-height',
        get_template_directory_uri() . '/js/equal-height.min.js',
        array( 'jquery' ),
        '',
        true
    );

    wp_enqueue_script(
        'jquery-appear',
        get_template_directory_uri() . '/js/jquery.appear.js',
        array( 'jquery' ),
        '',
        true
    );

    wp_enqueue_script(
        'jquery-easing',
        get_template_directory_uri() . '/js/jquery.easing.min.js',
        array( 'jquery' ),
        '',
        true
    );

    wp_enqueue_script(
        'magnific-popup',
        get_template_directory_uri() . '/js/jquery.magnific-popup.min.js',
        array( 'jquery' ),
        '',
        true
    );

    wp_enqueue_script(
        'modernizr',
        get_template_directory_uri() . '/js/modernizr.custom.13711.js',
        array( 'jquery' ),
        '',
        true
    );


   wp_enqueue_script(
        'owl-carousel',
        get_template_directory_uri() . '/js/owl.carousel.min.js',
        array( 'jquery' ),
        '',
        true
    );

   wp_enqueue_script(
        'wow-min',
        get_template_directory_uri() . '/js/wow.min.js',
        array( 'jquery' ),
        '',
        true
    );

   wp_enqueue_script(
        'progress-bar',
        get_template_directory_uri() . '/js/progress-bar.min.js',
        array( 'jquery' ),
        '',
        true
    );

   wp_enqueue_script(
        'isotope',
        get_template_directory_uri() . '/js/isotope.pkgd.min.js',
        array( 'jquery' ),
        '',
        true
    );
	
	wp_enqueue_script(
        'imagesloaded'
    );

   wp_enqueue_script(
        'count-to',
        get_template_directory_uri() . '/js/count-to.js',
        array( 'jquery' ),
        '',
        true
    );

   wp_enqueue_script(
        'ytplayer',
        get_template_directory_uri() . '/js/YTPlayer.min.js',
        array( 'jquery' ),
        '',
        true
    );

   wp_enqueue_script(
        'jquery-nice-select',
        get_template_directory_uri() . '/js/jquery.nice-select.min.js',
        array( 'jquery' ),
        '',
        true
    );

   wp_enqueue_script(
        'bootsnav',
        get_template_directory_uri() . '/js/bootsnav.js',
        array( 'jquery' ),
        '',
        true
    );

    wp_enqueue_script(
        'tanda-main',
        get_template_directory_uri() . '/js/main.js',
        array( 'jquery' ),
        '',
        true
    );

}

add_action( 'wp_enqueue_scripts', 'tanda_register_scripts' );

/**
 * Tanda Theme Configuration
 */

function tanda_theme_config(){

    // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        add_image_size( 'tanda-blog', 350, 262, false);
        add_image_size( 'tanda-blog-2colum', 540, 405, false);
        add_image_size( 'tanda-blog-standard', 920, 500, false);
        add_image_size( 'tanda-blog-sidebar', 730, 400, false);

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',

        ) );

    if ( ! isset( $content_width ) ) $content_width = 900;

    $tanda_lang = get_template_directory_uri() . '/languages';
    load_theme_textdomain('tanda', $tanda_lang);

    // Register Nav Menu
        if( class_exists( 'ReduxFrameworkPlugin' ) ) { 
            register_nav_menus(
                array(
                'main-menu' => esc_html__( 'Main Menu', 'tanda' ),
                'footer-menu' => esc_html__( 'Footer Menu', 'tanda' ),
                'additional-menu' => esc_html__( 'Additional Links', 'tanda' ),
                'footer-menu1' => esc_html__( 'Company Links', 'tanda' ),
                'footer-menu2' => esc_html__( 'Solution Links', 'tanda' ),
                )
            ); 
        } else
        {
            register_nav_menus(
                array(
                'main-menu' => esc_html__( 'Main Menu', 'tanda' ),
                )
            ); 
        }
}

add_action( 'after_setup_theme', 'tanda_theme_config' , 0 );

/**
 * Tanda Register Widgets
 */

add_action( 'widgets_init', 'tanda_widgets_init' );
function tanda_widgets_init() {

        register_sidebar( array(
        'name' => esc_html__( 'Main Sidebar', 'tanda' ),
        'id' => 'main-sidebar',
        'description' => esc_html__( 'Widgets in this area will be shown on all posts and pages.', 'tanda' ),
        'before_widget' => '<div id="%1$s" class="sidebar-item %2$s">',
    'after_widget'  => '</div>',
        'before_title'  => '<div class="title"><h4>',
        'after_title'   => '</h4></div>',
    ) );
}

function tanda_categories_postcount_filter ($variable) {
   $variable = str_replace('(', '<span class="post_count"> ', $variable);
   $variable = str_replace(')', ' </span>', $variable);
   return $variable;
}
add_filter('wp_list_categories','tanda_categories_postcount_filter');

function tanda_archives_postcount_filter ($variable) {
   $variable = str_replace('(', '<span class="post_count"> ', $variable);
   $variable = str_replace(')', ' </span>', $variable);
   return $variable;
}
add_filter('get_archives_link','tanda_archives_postcount_filter');


/**
 * Tanda Functions
 */

function tanda_category() {
 $categories = get_the_category();
      $separator = ' , ';
      $output = '';
      if($categories){
          foreach($categories as $category) {
              $output .= '<a href="'.get_category_link($category->term_id ).'">'.$category->cat_name.'</a>'.$separator;
          }
          echo trim($output, $separator);
      }
}

function tanda_pagination() {

global $wp_query;

if ( $wp_query->max_num_pages <= 1 ) return; 

$big = 999999999; // need an unlikely integer

$pages = paginate_links( array(
        'prev_text' => wp_specialchars_decode('<i class="fas fa-angle-double-left"></i>',ENT_QUOTES),
        'next_text' => wp_specialchars_decode('<i class="fas fa-angle-double-right"></i>',ENT_QUOTES),
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
    ) );
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<nav aria-label="navigation"><ul class="pagination">';
        foreach ( $pages as $page ) {
                echo "<li class='page-item'>$page</li>";
        }
       echo '</ul></nav>';
        }
}

add_filter( 'widget_tag_cloud_args', 'tanda_change_tag_cloud_font_sizes');
function tanda_change_tag_cloud_font_sizes( array $args ) {
    $args['default'] = '13';
    $args['smallest'] = '13';
    $args['largest'] = '13';
    $args['unit'] = 'px';

    return $args;
}

// Disable Front-End Edior

function tanda_vc_remove_frontend_links() {
    vc_disable_frontend(); // this will disable frontend editor
}
add_action( 'vc_after_init', 'tanda_vc_remove_frontend_links' );

// tanda Comments Display

function tanda_theme_comment($comment, $args, $depth) {
    //echo 's';
   $GLOBALS['comment'] = $comment;
   $gravatar = get_avatar($comment,$size='80' ); ?>
    <div class="commen-item">
    <div class="avatar">
        <?php echo get_avatar($comment,$size='80' ); ?>
    </div>
    <div class="content">
        <div class="title">
            <h5 class="comments_title_class"><?php printf( get_comment_author_link()) ?></h5>
            <span><?php the_time('F j, Y'); ?></span>
        </div>
            <?php comment_text() ?> 
        <div class="comments-info">
            <?php comment_reply_link(array_merge( $args, array('reply_text' => '<i class="fa fa-reply"></i>Reply' , 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>
    </div>
</div>
<?php
}

/**
 * Tanda PreDefined Imports
 */

function tanda_import_files() {
    return array(
        array(
            'import_file_name'           => 'Home Version One',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/redux.json',
                    'option_name' => 'tanda_options',
                ),
            ),
            'import_preview_image_url'   => 'http://www.creativedigital.tech/tandawordpress/themeforest/index-1.jpeg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'tanda' ),
            'preview_url'                => 'https://creativedigital.tech/tandawordpress/',
        ),

        array(
            'import_file_name'           => 'Home Version Two',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/redux.json',
                    'option_name' => 'tanda_options',
                ),
            ),
            'import_preview_image_url'   => 'http://www.creativedigital.tech/tandawordpress/themeforest/index-2.jpeg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'tanda' ),
            'preview_url'                => 'https://creativedigital.tech/tandawordpress/home-version-2/',
        ),

        array(
            'import_file_name'           => 'Home Version Three',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/redux.json',
                    'option_name' => 'tanda_options',
                ),
            ),
            'import_preview_image_url'   => 'http://www.creativedigital.tech/tandawordpress/themeforest/index-3.jpeg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'tanda' ),
            'preview_url'                => 'https://creativedigital.tech/tandawordpress/home-version-3/',
        ),

        array(
            'import_file_name'           => 'Home Version Four',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/redux.json',
                    'option_name' => 'tanda_options',
                ),
            ),
            'import_preview_image_url'   => 'http://www.creativedigital.tech/tandawordpress/themeforest/index-4.jpeg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'tanda' ),
            'preview_url'                => 'https://creativedigital.tech/tandawordpress/home-version-4/',
        ),

        array(
            'import_file_name'           => 'Home Version Five',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/redux.json',
                    'option_name' => 'tanda_options',
                ),
            ),
            'import_preview_image_url'   => 'http://www.creativedigital.tech/tandawordpress/themeforest/index-5.jpeg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'tanda' ),
            'preview_url'                => 'https://creativedigital.tech/tandawordpress/home-version-5/',
        ),

        array(
            'import_file_name'           => 'Home Version Six',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/redux.json',
                    'option_name' => 'tanda_options',
                ),
            ),
            'import_preview_image_url'   => 'http://www.creativedigital.tech/tandawordpress/themeforest/index-6.jpeg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'tanda' ),
            'preview_url'                => 'https://creativedigital.tech/tandawordpress/home-version-six/',
        ),

        array(
            'import_file_name'           => 'Home Version Seven',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/redux.json',
                    'option_name' => 'tanda_options',
                ),
            ),
            'import_preview_image_url'   => 'http://www.creativedigital.tech/tandawordpress/themeforest/index-7.jpeg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'tanda' ),
            'preview_url'                => 'https://creativedigital.tech/tandawordpress/home-version-seven/',
        ),

        array(
            'import_file_name'           => 'Home Version Eight',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/redux.json',
                    'option_name' => 'tanda_options',
                ),
            ),
            'import_preview_image_url'   => 'http://www.creativedigital.tech/tandawordpress/themeforest/index-8.jpeg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'tanda' ),
            'preview_url'                => 'https://creativedigital.tech/tandawordpress/home-version-eight/',
        ),

        array(
            'import_file_name'           => 'OnePage Version One',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/redux.json',
                    'option_name' => 'tanda_options',
                ),
            ),
            'import_preview_image_url'   => 'http://www.creativedigital.tech/tandawordpress/themeforest/index-1.jpeg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'tanda' ),
            'preview_url'                => 'https://creativedigital.tech/tandawordpress/home-version-1-onepage/',
        ),

        array(
            'import_file_name'           => 'OnePage Version Two',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/redux.json',
                    'option_name' => 'tanda_options',
                ),
            ),
            'import_preview_image_url'   => 'http://www.creativedigital.tech/tandawordpress/themeforest/index-2.jpeg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'tanda' ),
            'preview_url'                => 'https://creativedigital.tech/tandawordpress/home-version-2-onepage/',
        ),

        array(
            'import_file_name'           => 'OnePage Version Three',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/redux.json',
                    'option_name' => 'tanda_options',
                ),
            ),
            'import_preview_image_url'   => 'http://www.creativedigital.tech/tandawordpress/themeforest/index-3.jpeg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'tanda' ),
            'preview_url'                => 'https://creativedigital.tech/tandawordpress/home-version-3-onepage/',
        ),

        array(
            'import_file_name'           => 'OnePage Version Four',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/redux.json',
                    'option_name' => 'tanda_options',
                ),
            ),
            'import_preview_image_url'   => 'http://www.creativedigital.tech/tandawordpress/themeforest/index-4.jpeg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'tanda' ),
            'preview_url'                => 'https://creativedigital.tech/tandawordpress/home-version-4-onepage/',
        ),

        array(
            'import_file_name'           => 'OnePage Version Five',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/redux.json',
                    'option_name' => 'tanda_options',
                ),
            ),
            'import_preview_image_url'   => 'http://www.creativedigital.tech/tandawordpress/themeforest/index-5.jpeg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'tanda' ),
            'preview_url'                => 'https://creativedigital.tech/tandawordpress/home-version-5-onepage/',
        ),

        array(
            'import_file_name'           => 'OnePage Version Six',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/redux.json',
                    'option_name' => 'tanda_options',
                ),
            ),
            'import_preview_image_url'   => 'http://www.creativedigital.tech/tandawordpress/themeforest/index-6.jpeg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'tanda' ),
            'preview_url'                => 'https://creativedigital.tech/tandawordpress/home-version-six-onepage/',
        ),

        array(
            'import_file_name'           => 'OnePage Version Seven',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/redux.json',
                    'option_name' => 'tanda_options',
                ),
            ),
            'import_preview_image_url'   => 'http://www.creativedigital.tech/tandawordpress/themeforest/index-7.jpeg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'tanda' ),
            'preview_url'                => 'https://creativedigital.tech/tandawordpress/home-version-seven-onepage/',
        ),

        array(
            'import_file_name'           => 'OnePage Version Eight',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'http://www.creativedigital.tech/tandawordpress/themeforest/Demo/redux.json',
                    'option_name' => 'tanda_options',
                ),
            ),
            'import_preview_image_url'   => 'http://www.creativedigital.tech/tandawordpress/themeforest/index-8.jpeg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'tanda' ),
            'preview_url'                => 'https://creativedigital.tech/tandawordpress/home-version-eight-onepage/',
        ),

    );
}
add_filter( 'pt-ocdi/import_files', 'tanda_import_files' );

function tanda_ocdi_after_import( $selected_import ) {

    if ( 'Home Version One' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu 1', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version One' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'Home Version Two' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu 2', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version 2' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'Home Version Three' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu 3', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version 3' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'Home Version Four' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu 4', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version 4' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'Home Version Five' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu 5', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version 5' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'Home Version Six' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu 6', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version Six' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'Home Version Seven' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu 7', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version Seven' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'Home Version Eight' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu 8', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version Eight' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

        elseif ( 'OnePage Version One' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Home Version 1 OnePage', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version 1 OnePage' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'OnePage Version Two' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Home Version 2 OnePage', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version 2 OnePage' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'OnePage Version Three' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Home Version 3 OnePage', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version 3 OnePage' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'OnePage Version Four' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Home Version 4 OnePage', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version 4 OnePage' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'OnePage Version Five' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Home Version 5 OnePage', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version 5 OnePage' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'OnePage Version Six' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Home Version 6 OnePage', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version Six OnePage' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'OnePage Version Seven' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Home Version 7 OnePage', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version Seven OnePage' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'OnePage Version Eight' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Home Version 8 OnePage', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version Eight OnePage' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    // Assign menus to their locations.
    $footer_menu = get_term_by( 'name', 'Footer Menu', 'nav_menu' );
    $add_menu = get_term_by( 'name', 'Additional Links', 'nav_menu' );
    $service_menu = get_term_by( 'name', 'Company', 'nav_menu' );
    $usefull_menu = get_term_by( 'name', 'Solutions', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'main-menu' => $main_menu->term_id,
            'footer-menu' => $footer_menu->term_id,
            'additional-menu' => $add_menu->term_id,
            'footer-menu1' => $service_menu->term_id,
            'footer-menu2' => $usefull_menu->term_id,
        )
    );
}
add_action( 'pt-ocdi/after_import', 'tanda_ocdi_after_import' );
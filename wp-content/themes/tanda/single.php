<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Tanda
 */

if( class_exists( 'ReduxFrameworkPlugin' ) ) { 
    get_header('v1');
}
else {
    get_header();
}
?>
<!-- Start Breadcrumb 
============================================= -->
<div class="breadcrumb-area shadow dark bg-fixed text-light less-background">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="col-lg-6 text-right">
                <ul class="breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i> <?php esc_html_e( 'Home', 'tanda' )?></a></li>
                    <li class="active"><?php esc_html_e( 'Blog Details', 'tanda' )?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->
<!-- Start Blog
============================================= -->
<div class="blog-area single full-blog right-sidebar full-blog default-padding bottom-less">
    <div class="container">
        <div class="blog-items">
            <div class="row">
                <?php if ( is_active_sidebar( 'main-sidebar' ) ) : { ?>
                <div class="blog-content col-lg-8 col-md-12">
                <?php } else :  ?> 
                <div class="blog-content col-lg-10 offset-lg-1 col-md-12">
                <?php endif; ?>
                   <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content', 'page' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        else: 
                        endif;

                        endwhile; // End of the loop. ?>
                </div>
                <!-- Start Sidebar -->
                <div class="sidebar col-lg-4 col-md-12">
                    <aside>
                        <?php get_sidebar(); ?>
                    </aside>
                </div>
                <!-- End Start Sidebar -->
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->


<?php if( class_exists( 'ReduxFrameworkPlugin' ) ) { 
    get_footer('v1');
}
else {
    get_footer();
}
<?php
/*
 * Template Name: Blog Grid 3 Colum
 */
get_header('v1'); ?>

<!-- Start Breadcrumb 
============================================= -->
<div class="breadcrumb-area shadow dark bg-fixed text-light less-background">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6">
                <h2><?php esc_html_e('Blog Grid','tanda' ); ?></h2>
            </div>
            <div class="col-lg-6 text-right">
                <ul class="breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i> <?php esc_html_e( 'Home', 'tanda' )?></a></li>
                    <li class="active"><?php esc_html_e( 'Blog', 'tanda' )?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog blog-standard full-blog grid-colum default-padding bottom-less">
        <div class="container">
            <div class="blog-items">
                <div class="blog-content">
                    <div class="blog-item-box">
                        <div class="row">
                   <?php $args = array(    
            'paged' => $paged,
            'post_type' => 'post',
            );
        $wp_query = new WP_Query($args);
        while (have_posts()): the_post(); ?>

<!-- Single Item -->
<div class="col-lg-4 col-md-6 single-item">
    <div class="item wow fadeInUp">
        <div class="thumb">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('tanda-blog-sidebar'); ?>
            </a>
        </div>
        <div class="info">
            <div class="meta">
                <ul>
                    <li><i class="fas fa-calendar-alt"></i> <?php the_time('F j Y'); ?></li>
                    <li><i class="fas fa-user"></i><?php echo get_the_author_link() ?></li>
                </ul>
            </div>
            <h4>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h4>
                <?php the_excerpt(); ?>
            <a class="btn circle btn-theme effect btn-md" href="<?php the_permalink(); ?>"><?php esc_html_e ('Read More','tanda' ); ?></a>
        </div>
    </div>
</div>
<!-- End Single Item -->

  <?php endwhile; 
     
    ?>
                </div>
                
                <!-- Pagination -->
                <div class="row">
                    <div class="col-md-12 pagi-area text-center">
                        <?php echo tanda_pagination(); ?>
                    </div>
                </div>
        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

<?php get_footer('v1');
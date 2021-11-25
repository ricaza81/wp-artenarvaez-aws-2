<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tanda
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- Single Item -->
<div class="single-item">
    <div class="item">
        <div class="thumb">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('tanda-blog-sidebar'); ?>
            </a>
        </div>
        <div class="info">
            <div class="meta">
                <?php if ( is_sticky() ) :
                echo '<div class="post-sticky"><span>';
                esc_attr_e('STICKY POST' , 'tanda');
                echo '</span></div>'; 
                    endif;?>
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
</div>
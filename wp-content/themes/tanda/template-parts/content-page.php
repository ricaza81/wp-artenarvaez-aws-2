<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tanda
 */

?>
<div class="item">

    <div class="blog-item-box">
        <!-- Start Post Thumb -->
        <div class="thumb">
            <?php the_post_thumbnail('tanda-blog-sidebar'); ?>
        </div>
        <!-- Start Post Thumb -->

        <div class="info">
            <div class="meta">
                <ul>
                     <li><i class="fas fa-calendar-alt"></i> <?php the_time('F j Y'); ?></li>
                    <li><i class="fas fa-user"></i><?php echo get_the_author_link() ?></li>
                </ul>
            </div>
            <?php the_content(); ?>
            <?php wp_link_pages(); ?>
            <?php if(has_tag()) { ?>
<!-- Start Post Tags-->
            <div class="footer-entry">
        <span>Tags</span>
             <?php the_tags('','',''); ?>
     </div>
<!-- End Post Tags -->
<?php } ?>
        </div>
    </div>
</div>

<!-- Start Post Pagination -->
<div class="post-pagi-area">
    <?php if (empty(get_adjacent_post(false,'',true)->ID)) {} else { ?>
    <a href="<?php echo get_permalink( get_adjacent_post(false,'',true)->ID ); ?>">
        <i class="fas fa-angle-double-left"></i> <?php esc_html_e('Previous Post' , 'tanda'); ?>
        <h5><?php echo get_the_title( get_adjacent_post(false,'',true)->ID ); ?></h5>
        
    </a>
    <?php } ?>
    <?php if (empty(get_adjacent_post(false,'',false)->ID)) {} else { ?>
    <a href="<?php echo get_permalink( get_adjacent_post(false,'',false)->ID );  ?>">
        <?php esc_html_e('Next Post' , 'tanda'); ?> <i class="fas fa-angle-double-right"></i>
        <h5><?php echo get_the_title( get_adjacent_post(false,'',false)->ID ); ?></h5>
    </a>
<?php } ?>
</div>
<!-- End Post Pagination -->
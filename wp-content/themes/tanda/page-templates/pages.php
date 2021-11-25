<?php
/*
 * Template Name: Other Pages
 */
get_header('v1'); ?>

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
                    <li class="active"><?php esc_html_e( 'Pages', 'tanda' )?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post();       
  the_content(); // displays whatever you wrote in the wordpress editor
  endwhile; endif; //ends the loop
 ?>

<?php get_footer('v1');
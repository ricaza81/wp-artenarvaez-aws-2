<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package tanda
 */

get_header();
?>
<!-- Start Breadcrumb 
============================================= -->
<div class="breadcrumb-area shadow dark bg-fixed text-light less-background">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6">
                <h2><?php esc_html_e( '404 Error', 'tanda' )?></h2>
            </div>
            <div class="col-lg-6 text-right">
                <ul class="breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i> <?php esc_html_e( 'Home', 'tanda' )?></a></li>
                    <li class="active"><?php esc_html_e( 'PAGE NOT FOUND', 'tanda' )?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->
<!-- Start 404 
============================================= -->
<div class="error-page-area text-center default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="error-box">
                    <h1><?php esc_html_e( '404', 'tanda' )?></h1>
                    <h2><?php esc_html_e( 'SORRY PAGE WAS NOT FOUND!', 'tanda' )?></h2>
                    <div class="search">
                        <div class="input-group">
                            <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
            <input type='search' name="s" placeholder="<?php esc_attr_e( 'Search Here...', 'tanda' )?>" class="form-control" id="search-box" value="<?php the_search_query(); ?>" >
	        <button type="submit"><i class="fas fa-search"></i></button>
        </form>
                        </div>
                    </div>
                    <a class="btn btn-theme effect btn-md" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e( 'Back To Home', 'tanda' )?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End 404 -->
<?php
get_footer();
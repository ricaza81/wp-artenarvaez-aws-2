<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tanda
 */
?>
<!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center"><?php esc_html_e('Copyright &copy;  2021. Designed by' , 'tanda'); ?> <a href="<?php echo esc_url('https://themeforest.net/user/wordpressriver/portfolio' , 'tanda'); ?>"><?php esc_html_e('WordPressRiver' , 'tanda'); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->
<?php wp_footer(); ?>

</body>
</html>
<?php
global $tanda_options;
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
        <!-- Fixed Shape -->
        <div class="fixed-shape">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/map.svg'); ?>" alt="<?php echo esc_attr__( 'Shape', 'tanda' )?>">
        </div>
        <!-- Fixed Shape -->
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-12 col-md-6 item">
                        <div class="f-item about">
                            <img class="logo-footer" src="<?php echo esc_url($tanda_options['footerlogo']['url']); ?>" alt="<?php echo esc_attr__( 'Logo', 'tanda' )?>">
                            <p>
                                <?php echo esc_html($tanda_options['footerdes']); ?>
                            </p>
                        </div>
                 </div>
                    
                    <!-- <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title"><?php echo esc_html($tanda_options['companylinks']); ?></h4>
                            <?php 
                                wp_nav_menu( array(
                                'theme_location'  => 'footer-menu1',
                                ) );
                            ?>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-6 item align-self-center">
                        <div class="f-item link">
                            <h4 class="widget-title"><?php echo esc_html($tanda_options['solutionlinks']); ?></h4>
                            <?php 
                                wp_nav_menu( array(
                                'theme_location'  => 'footer-menu2',
                                ) );
                            ?>
                        </div>
                    </div> -->

                    <div class="col-12 col-md-6 item align-self-center">
                    <div class="f-item">
                        <h4 class="widget-title"><?php echo esc_html($tanda_options['contactinfo1']); ?></h4>
                        <div class="address">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="<?php echo esc_attr($tanda_options['c_icon1']); ?>"></i>
                                    </div>
                                    <div class="info">
                                        <?php echo esc_html($tanda_options['c_text1']); ?>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="<?php echo esc_attr($tanda_options['c_icon2']); ?>"></i>
                                    </div>
                                    <div class="info">
                                        <a href="mailto:<?php echo esc_url($tanda_options['c_text2']); ?>"><?php echo esc_html($tanda_options['c_text2']); ?></a> <br> <a href="mailto:<?php echo esc_url($tanda_options['c_text22']); ?>"><?php echo esc_html($tanda_options['c_text22']); ?></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="<?php echo esc_attr($tanda_options['c_icon3']); ?>"></i>
                                    </div>
                                    <div class="info">
                                        <?php echo esc_html($tanda_options['c_text3']); ?> <br> <?php echo esc_html($tanda_options['c_text33']); ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
						</div>
						<div class="f-item mt-5">
						<h4 class="widget-title">Síguenos en</h4>
						<div class="address">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fab fa-facebook"></i>
                                    </div>
                                    <div class="info">
                                         <a target="_blank" href="https://www.facebook.com/ArteNarvaez/">@artenarvaez</a>
                                    </div>
                                </li>
								<li>
                                    <div class="icon">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                    <div class="info">
                                         <a target="_blank" href="https://www.instagram.com/artenarvaezsas/">@artenarvaezsas</a>
                                    </div>
                                </li>
							</ul>
						</div>
                    </div>
                </div>

                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p><?php echo esc_html($tanda_options['copyright']); ?></p>
                    </div>
<!--                     <div class="col-md-6 text-right link">
                        <?php 
                                wp_nav_menu( array(
                                'theme_location'  => 'footer-menu',
                                ) );
                            ?>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->
<?php wp_footer(); ?>

</body>
</html>
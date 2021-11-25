<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tanda
 */

if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
<?php dynamic_sidebar( 'main-sidebar' ); ?>
<?php endif; ?>
        
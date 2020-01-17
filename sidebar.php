<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sparoow
 */
?>

<?php 
	if ( ! is_active_sidebar( 'post-sidebar' ) ) {
	   return;
	}
?>

<aside id="sidebar">
	<?php dynamic_sidebar( 'post-sidebar' ); ?>
</aside><!-- #sidebar -->



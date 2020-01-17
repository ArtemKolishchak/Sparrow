<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sparoow
 */
?>
		<!-- Footer -->
   		<footer>
	      	<div class="row">
	         	<div class="twelve columns">

		            <?php 
	                  	wp_nav_menu( array(
	                     	'theme_location' => 'footer',
	                     	'item_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	                     	'menu_class'     => 'footer-nav',
	                     	'depth'          => '1',
	                     	'container'      => false,
	                  	) );
	               	?>
	             
	            	<ul class="footer-social">

						<?php if(get_theme_mod( 'facebook_social' ) != ''):?>						
		               	<li><a href="<?php echo get_theme_mod('facebook_social'); ?>"><i class="fa fa-facebook"></i></a></li>
		               	<?php endif?>

						<?php if(get_theme_mod( 'twitter_social' ) != ''):?>
		               	<li><a href="<?php echo get_theme_mod('twitter_social'); ?>"><i class="fa fa-twitter"></i></a></li>
		               	<?php endif?>

						<?php if(get_theme_mod( 'google_plus_social' ) != ''):?>
		               	<li><a href="<?php echo get_theme_mod('google_plus_social_social'); ?>"><i class="fa fa-google-plus"></i></a></li>
		               	<?php endif?>

						<?php if(get_theme_mod( 'linkedin_social' ) != ''):?>
		               	<li><a href="<?php echo get_theme_mod('linkedin_social'); ?>"><i class="fa fa-linkedin"></i></a></li>
		               	<?php endif?>

						<?php if(get_theme_mod( 'skype_social' ) != ''):?>
		               	<li><a href="<?php echo get_theme_mod('skype_social'); ?>"><i class="fa fa-skype"></i></a></li>
		               	<?php endif?>

						<?php if(get_theme_mod( 'noname_social' ) != ''):?>
		               	<li><a href="<?php echo get_theme_mod('noname_social'); ?>"><i class="fa fa-rss"></i></a></li>
		               	<?php endif?>

	            	</ul>

	            	<ul class="copyright">
		               <li><?php echo get_theme_mod('footer_copy_1'); ?></li> 
		               <li><?php echo get_theme_mod('footer_copy_2'); ?></li>            
		            </ul>
	         	</div><!-- .twelve columns -->

	         	<div id="go-top" style="display: block;"><a title="Back to Top" href="#">Go To Top</a></div><!-- #go-top -->

	      	</div><!-- .row -->
   		</footer> 
   		<!-- Footer End-->

		<?php wp_footer(); ?>

	</body>
</html>

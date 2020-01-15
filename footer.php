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
		               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
		               <li><a href="#"><i class="fa fa-skype"></i></a></li>
		               <li><a href="#"><i class="fa fa-rss"></i></a></li>
	            	</ul>

	            	<ul class="copyright">
		               <li>Copyright &copy; 2014 Sparrow</li> 
		               <li>Design by <a href="http://www.styleshout.com/">Styleshout</a></li>            
		            </ul>
	         	</div><!-- .twelve columns -->

	         	<div id="go-top" style="display: block;"><a title="Back to Top" href="#">Go To Top</a></div><!-- #go-top -->

	      	</div><!-- .row -->
   		</footer> 
   		<!-- Footer End-->

		<?php wp_footer(); ?>

	</body>
</html>

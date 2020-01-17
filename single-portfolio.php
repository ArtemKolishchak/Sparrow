<?php
/**
 * The template for displaying all single portfolio
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy
 *
 * @package Sparrow
 */
?>

<?php get_header(); ?>

<!-- Page Title  -->
<div id="page-title">
   <div class="row">
      <div class="ten columns centered text-center">
         <h1>Our Amazing Works<span>.</span></h1>

         <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>

      </div><!-- .ten .columns .centered .text-center -->
   </div><!-- .row -->
</div><!-- #page-title -->
<!-- Page Title End-->

<!-- Content -->
<div class="content-outer">
   <div id="page-content" class="row portfolio">
      <section class="entry cf">
         <div id="secondary"  class="four columns entry-details">

            <h1><?php the_title('', '.'); ?></h1>

            <div class="entry-description">

               <p><?php the_field( 'description' ); ?></p>

            </div>

            <ul class="portfolio-meta-list">
				   <li><span>Date: </span><?php the_field( 'date' ); ?></li>
				   <li><span>Client </span><?php the_field( 'client' ); ?></li>
				   <li><span>Skills: </span><?php the_terms( get_the_ID(), 'skills', '', ', ', '' ); ?></li>
		      </ul>

            <a class="button" href="http://behance.net">View project</a>

         </div><!-- #secondary .four .columns .entry-details -->
         <!-- Secondary End-->

         <div id="primary" class="eight columns">

            <div class="entry-media">
               <img src="<?php the_field( 'image-1' ); ?>" alt="" />
               <img src="<?php the_field( 'image-2' ); ?>" alt="" />
            </div>

            <div class="entry-excerpt">
			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
               nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
               cursus a sit amet mauris. Morbi accumsan ipsum velit. </p>
				</div><!-- .entry-excerpt -->

         </div> <!-- primary end-->

      </section> <!-- end section -->

         <ul class="post-nav cf">
			   <li class="prev"><a href="#" rel="prev"><strong>Previous Entry</strong> Duis Sed Odio Sit Amet Nibh Vulputate</a></li>
				<li class="next"><a href="#" rel="next"><strong>Next Entry</strong> Morbi Elit Consequat Ipsum</a></li>
			</ul>

   </div>

</div><!-- .content-outer -->
<!-- content End-->

<!-- Tweets Section -->
<section id="tweets">
   <div class="row">
      <div class="tweeter-icon align-center">
         <i class="fa fa-twitter"></i>
      </div><!-- .tweeter-icon .align-center -->

         <ul id="twitter" class="align-center">
            <li>
               <span>
                  This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
                  <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">2 Days Ago</a></b>
            </li>
            <!--
            <li>
               <span>
               This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
               <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">3 Days Ago</a></b>
            </li>
            -->
         </ul>

         <p class="align-center"><a href="#" class="button">Follow us</a></p>

   </div><!-- .row -->
</section> <!-- Tweet Section End-->

<?php get_footer(); ?>
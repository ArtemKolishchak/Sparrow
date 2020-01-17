<?php
/**
 * The template for displaying taxonomy-skills pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sparrow
 */
 ?>

<?php get_header();?>

<!-- Page Title -->
<div id="page-title">
    <div class="row">
        <div class="ten columns centered text-center">
        	<h1>Our Amazing Works<span>.</span></h1>
            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
            enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
        </div><!-- .ten .columns .centered .text-center -->
    </div><!-- .row -->
</div><!-- #page-title -->
<!-- Page Title End-->

<!-- Content -->
<div class="content-outer">
    <div id="page-content" class="row portfolio">
        <section class="entry cf">
            <div id="secondary"  class="four columns entry-details">
	            <h1>Our Portfolio.</h1>

	            <p class="lead">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh.</p>

	            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>

            </div><!-- #secondary .four .columns .entry-details -->
            <!-- Secondary End-->

            <div id="primary" class="eight columns portfolio-list">
            	<div id="portfolio-wrapper" class="bgrid-halves cf">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div class="columns portfolio-item">
						<div class="item-wrap">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'portfolio' ); ?>
								<div class="overlay"></div>
								<div class="link-icon"><i class="fa fa-link"></i></div>
							</a>
							<div class="portfolio-item-meta">
								<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
								<p><?php the_excerpt(); ?></p>
							</div><!-- .portfolio-item-meta -->
						</div><!-- .item-wrap -->
					</div><!-- .columns .portfolio-item -->
      				
      				<?php endwhile; else: ?>	
				<?php endif; ?>

               </div><!-- #portfolio-wrapper -->
            </div> <!-- primary end-->
        </section> <!-- end section -->
    </div> <!-- #page-content end-->
</div> <!-- content End-->

<!-- Tweets Section -->
<section id="tweets">
  <div class="row">

    <div class="tweeter-icon align-center">
      <i class="fa fa-twitter"></i>
    </div><!-- .tweeter-icon .align-center -->

    <ul id="twitter" class="align-center">
      <li>
        <span>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
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
</section><!-- #tweets -->
<!-- Tweet Section End-->

<?php get_footer(); ?>
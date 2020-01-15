<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sparoow
 */
?>

<?php get_header();?>

<!-- Page Title -->
<div id="page-title">
  <div class="row">
    <div class="ten columns centered text-center">
      <h1>Our Blog<span>.</span></h1>
        <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
    </div>
  </div>
</div> <!-- Page Title End-->

<!-- Content -->
<div class="content-outer">
  <div id="page-content" class="row">
    <div id="primary" class="eight columns">

      <?php if ( have_posts() ) : ?> 
        <?php while ( have_posts() ) : the_post(); ?>
          
          <article class="post">
            <div class="entry-header cf">
              <h1><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h1>
              <p class="post-meta">
                <time class="date" datetime="2014-01-14T11:24"><?php the_date(); ?></time>
                  /
                <span class="categories">
                  <?php the_category(' / '); ?>
              </p>
            </div>
            <div class="post-thumb">
              <a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail(); ?></a>
            </div>
            <div class="post-content">

              <?php the_excerpt(); ?>

            </div>
          </article><!-- Post End -->
        
        <?php endwhile; ?>

          <?php the_posts_pagination( 
        array(
          'prev_text'    => __('Prev'),

        ) ); 
      ?>

      <?php endif; ?>

    </div> <!-- Primary End-->
    <div id="secondary" class="four columns end">

      <?php get_sidebar(); ?>

    </div> <!-- Secondary End-->
  </div><!-- #page-content .row -->
</div><!-- .content-outer -->
<!-- Content End-->

   <!-- Tweets Section
   ================================================== -->
   <section id="tweets">

      <div class="row">

         <div class="tweeter-icon align-center">
            <i class="fa fa-twitter"></i>
         </div>

         <ul id="twitter" class="align-center">
            <li>
               <span>
               This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
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

      </div>

   </section> <!-- Tweets Section End-->


<?php get_footer(); ?>

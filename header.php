<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sparrow
 */
?>

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
   <!-- Basic Page Needs -->
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <!-- Mobile Specific Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
   <!-- Header -->
   <header>
      <div class="row">
         <div class="twelve columns">
            <div class="logo">

               <a href="#"><?php the_custom_logo(); ?></a>

            </div><!-- .logo -->

            <nav id="nav-wrap">

               <?php
                  wp_nav_menu( array(
                     'theme_location' => 'header',
                     'item_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                     'menu_class'     => 'nav',
                     'menu_id'        => 'nav',
                     'depth'          => '2',
                     'container'      => false,     
                  ) );
               ?>

               <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
               <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
            </nav> <!-- end #nav-wrap -->

         </div><!-- .twelve columns -->
      </div><!-- .row -->
   </header>
   <!-- Header End -->

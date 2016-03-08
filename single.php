<?php
/**
 * The template for displaying all single posts.
 *
 * @package sth
 */

get_header(); ?>

	<div id="primary" class="container container-white">
    
    <section id="hero" class="no-gutter">
       <?php get_template_part( 'template-parts/hero', 'unit' ); ?>
     </section>
    
    <div class="row">
      <main id="main" class="col-md-7 col-md-offset-1 col-sm-8" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'template-parts/content', 'single' ); ?>

          <?php the_post_navigation(); ?>

        <?php endwhile; // End of the loop. ?>

        </main><!-- #main .container -->
      
      <aside class="col-md-3 col-sm-4">
        <?php get_sidebar(); ?>
      </aside>
    </div>
	</div><!-- #primary-->

<?php get_footer(); ?>
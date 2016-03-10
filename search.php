<?php
/**
 * The template for displaying search results pages.
 *
 * @package sth
 */

get_header(); ?>

	<section id="primary" class="container container-white">
    
    <section id="hero" class="no-gutter">
       <?php get_template_part( 'template-parts/shared/hero', 'unit' ); ?>
     </section>
    
    <div class="row">
      <main id="main" class="col-md-7 col-md-offset-1 col-sm-8" role="main">

      <?php if ( have_posts() ) : ?>

        <header class="page-header">
          <h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'sth' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        </header><!-- .page-header -->

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <?php
          /**
           * Run the loop for the search to output the results.
           * If you want to overload this in a child theme then include a file
           * called content-search.php and that will be used instead.
           */
          get_template_part( 'template-parts/content', 'search' );
          ?>

        <?php endwhile; ?>

        <?php the_posts_navigation(); ?>

      <?php else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

      </main><!-- #main-->
      <aside class="col-md-4 col-sm-4" role="complimentry">
        <?php $contact_form = "[contact-form to='andrew.duckworth@sth.nhs.uk' subject='RPA Contact'][contact-field label='Full name' type='name' required='1' placeholder='Full name'/][contact-field label='Job title' type='text' required='1' placeholder='Job title'/][contact-field label='Organisation' type='text' required='1' placeholder='Organisation'/][contact-field label='Phone number' type='text' required='1' placeholder='hone number'/][contact-field label='Email' type='email' required='1' placeholder='Email'/][contact-field label='Service requested' type='select' required='1' options='Radiation Protection,Service Design %26amp; Consultation,Quality Assurance,Corporate Assurance,Project Management,Training %26amp; Staff Development,Ethics Guidance,Other'/][contact-field label='Requirements %26amp; further information' type='textarea' required='1' placeholder='Your requirements'/][/contact-form]";
              echo do_shortcode( "<section id='search-marketing-form'><h3>Contact us</h3>" . $contact_form . "</section>" ) ;?>
        <?php get_sidebar(); ?>
      </aside>
    </div> <!-- #primary .row -->
	</section><!-- #primary .container -->

<?php get_footer(); ?>

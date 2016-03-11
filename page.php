<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package sth
 */

get_header(); ?>

	 <div id="primary" class="container container-white">
     
     <section id="hero" class="no-gutter">
       <?php get_template_part( 'template-parts/shared/hero', 'unit' ); ?>
     </section>
     
     <div class="row">
      <main id="main" class="col-md-5 col-md-offset-1 col-sm-7" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', 'page' ); ?>

      <?php endwhile; // End of the loop. ?>

      </main><!-- #main -->

      <aside class="col-md-4 col-md-offset-1 col-sm-5">
        <?php $contact_form = "[contact-form to='andrew.duckworth@sth.nhs.uk' subject='RPA Contact'][contact-field label='Full name' type='name' required='1' placeholder='Full name'/][contact-field label='Job title' type='text' required='1' placeholder='Job title'/][contact-field label='Organisation' type='text' required='1' placeholder='Organisation'/][contact-field label='Phone number' type='text' required='1' placeholder='phone number'/][contact-field label='Email' type='email' required='1' placeholder='Email'/][contact-field label='Service requested' type='select' required='1' options='Radiation Protection,Service Design %26amp; Consultation,Quality Assurance,Corporate Assurance,Project Management,Training %26amp; Staff Development,Ethics Guidance,Other'/][contact-field label='Requirements %26amp; further information' type='textarea' required='1' placeholder='Your requirements'/][/contact-form]";
              echo do_shortcode( "<section id='marketing-form'>" . $contact_form . "</section>" ) ;?>
        <?php get_sidebar(); ?>
      </aside>
      
	   </div>
     
     <?php 
     
     if (is_page( 'our-team' )){
       
       get_template_part( 'template-parts/shared/team', 'all' );
       
     };
     
     if (is_page( 'our-services' )){
       
       get_template_part( 'template-parts/shared/service', 'directory' );
       get_template_part( 'template-parts/shared/additional', 'services' );
       
     };
     
     ?>
     
    
  </div>

<?php get_footer(); ?>

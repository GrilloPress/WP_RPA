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
    
    <section id="testimonials">
      <div class="row">
    
    <div class="col-md-12">
      <div class="testimonial-block">
        <h2 class="text-center">Testimonials</h2>
      </div>
    </div>
    
    <div class="col-md-3 col-sm-6">
      <article class="panel-testimonial">
        
        <header class="panel-testimonial-header">
          <h3>Radiation protection</h3>
        </header>
        
        <section class="panel-testimonial-body">
          <h5 class="panel-testimonial-sub-heading">smiles MedTEC consulting ltd</h5>
          <p>"I’ve had the pleasure to work with Giles and the Radiation Protection Assurance (RPA) team while implementing and installing radiotherapy equipment at the Royal Hallamshire Hospital."</p><p>"The RPA team were enthusiastic and committed to providing the highest level of support and training, to both the Trust and manufacturing staff alike."</p>
          <p class="panel-testimonial-footer">Dawn Smiles  - Clinical Director at smiles MedTEC consulting ltd</p>
        </section>

      </article>
    </div>
    
    <div class="col-md-3 col-sm-6">
      <article class="panel-testimonial">
        
        <header class="panel-testimonial-header">
          <h3>Corporate assurance</h3>
        </header>
        
        <section class="panel-testimonial-body">
          <h5 class="panel-testimonial-sub-heading">Freelance Clinical and Regulatory Professional</h5>
          <p>"I was very satisfied with the radiation protection assurance team’s responsiveness and professional approach. I am very happy to recommend Giles and the team again.</p><p>As a freelance consultant I work with many companies who may be requiring this type of service and I will be sure to ask for your assistance in the future."</p>
          <p class="panel-testimonial-footer">Orit Yarden - Clinical and Regulatory professional</p>
        </section>

      </article>
    </div>
    
    <div class="col-md-3 col-sm-6">
      <article class="panel-testimonial">
        
        <header class="panel-testimonial-header">
          <h3>Training</h3>
        </header>
        
        <section class="panel-testimonial-body">
          <h5 class="panel-testimonial-sub-heading">The NHS Rotherham Foundation Trust</h5>
          <p>"Thank you very much Giles and the Radiation Protection Assurance team for the thorough training you provided for all our staff at Rotherham"</p><p>"It is so helpful to us to have the training provided by someone who has got to know our services so well"</p>
          <p class="panel-testimonial-footer">Ranee Townsend - Clinical Director of Salaried Dental Services Specialist in Special Care dentistry</p>
        </section>

      </article>
    </div>
    
    <div class="col-md-3 col-sm-6">
      <article class="panel-testimonial">
        
        <header class="panel-testimonial-header">
          <h3>Additional services</h3>
        </header>
        
        <section class="panel-testimonial-body">
          <h5 class="panel-testimonial-sub-heading"></h5>
          <p>We offer a full-range of additional and complementary services. <a href="<?php echo home_url('/our-services/'); ?>">You can find an extensive listing of our services on our dedicated service page</a>. If you have a specific question about one of our services or want to get in touch with one of our many happy customers, please <a href="<?php echo home_url('/contact-us/#top'); ?>">get in touch with our team via our online form.</a></p>
          <p class="panel-testimonial-footer"></p>
          <a href="<?php echo home_url('/contact-us/#main'); ?>" class="btn btn-block btn-info">Get in touch</a>
        </section>

      </article>
    </div>
    
  </div>
  </section>
    
	</section><!-- #primary .container -->

<?php get_footer(); ?>

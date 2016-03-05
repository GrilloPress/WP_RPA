<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sth
 */

?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
      <div class="site-info container">
        <div class="row">
          <div id="widget-footer">
		        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		        <?php endif; ?>
		        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		        <?php endif; ?>
		        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		        <?php endif; ?>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer4') ) : ?>
		        <?php endif; ?>
		      </div>
        </div>
        
        <div class="row">
          <div class="col-md-12">
            <section id="rpa">
            <p class="pull-left">
              
              <a title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">Home</a> |
              <a title="" href="<?php echo home_url('/disclaimer-attributions/'); ?>">Disclaimer and Attributions</a> |
              <a href="#top"> Back to top</a>

            </p>
            <p class="pull-right">
              <a href="http://www.sth.nhs.uk" title="Homepage for the Sheffield Teaching Hospitals NHS Foundation Trust" target="_blank">
                <img src="<?php echo get_template_directory_uri() . '/images/sth-trans.png' ;?>" >
              </a>
            </p>
            <p class="clearfix"></p>
            </section>
          </div>
        </div>
      </div><!-- .site-info -->
    </footer><!-- #colophon -->
  </div><!-- #page -->

  <?php wp_footer(); ?>

  </body>
</html>
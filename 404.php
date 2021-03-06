<?php
/**
 * The template for displaying 404 pages (not found).
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

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'sth' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'sth' ); ?></p>

					<?php get_search_form(); ?>
          
          <h3 class="widget-title"><?php esc_html_e( 'Sitemap', 'sth' ); ?></h3>
          <ul>
              <?php wp_list_pages( array( 'sort_column' => 'menu_order' ) ); ?>
          </ul>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php if ( sth_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h3 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'sth' ); ?></h3>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>

					<?php
						$archive_content = '<p>' . esc_html__( 'Try looking in the monthly archives.' , 'sth' ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
      
      <aside class="col-md-4 col-md-offset-1 col-sm-5">
        <?php get_sidebar(); ?>
      </aside>
  </div>
	</div><!-- #primary -->

<?php get_footer(); ?>

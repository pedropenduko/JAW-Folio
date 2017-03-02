<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package JAW_Folio_Theme
 */

get_header(); ?>

		<?php
		if ( have_posts() ) : ?>
            <section class="feature-image" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/laptop-and-pen.jpg') no-repeat; background-size: cover;" data-type="background" data-speed="2">
                <?php
					the_archive_title( '<h1 class="page-title">', '' );
					the_archive_description( '<small class="archive-description">', '</small></h1>' );
				?>
            </section><!-- feature-image --> 

            <div class="container">
                <div class="row" id="primary">
                    <main class="col-sm-8" id="content">
                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();

                            /*
                             * Include the Post-Format-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
                            get_template_part( 'template-parts/content', get_post_format() );

                        endwhile; ?>

                        <?php the_posts_navigation(); ?>
                    </main><!-- content -->
                    
                    <!-- SIDEBAR -->
                    <aside class="col-sm-4">
                        <?php get_sidebar(); ?>
                    </aside>
                </div><!-- row primary -->
            </div><!-- container -->
        <?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>


<?php
get_footer();

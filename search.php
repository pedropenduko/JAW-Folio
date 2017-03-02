<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package JAW_Folio_Theme
 */

get_header(); ?>

    <section class="feature-image" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/laptop-and-pen.jpg') no-repeat; background-size: cover;" data-type="background" data-speed="2">
        <h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'bootstrap2wordpress' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
    </section><!-- feature-image --> 

    <div class="container">
        <div class="row" id="primary">
            <main class="col-sm-8" id="content">       
            <?php
            if ( have_posts() ) : ?>

                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();

                            /**
                             * Run the loop for the search to output the results.
                             * If you want to overload this in a child theme then include a file
                             * called content-search.php and that will be used instead.
                             */
                            get_template_part( 'template-parts/content', 'search' );

                        endwhile;

                        the_posts_navigation();
            else :

                get_template_part( 'template-parts/content', 'none' );

            endif; ?>
                
            </main><!-- content -->

            <!-- SIDEBAR -->
            <aside class="col-sm-4">
                <?php get_sidebar(); ?>
            </aside>
        </div><!-- row primary -->
    </div><!-- container -->

<?php
get_footer();
<?php
/**
 * Template part for displaying content in the Featured Projects section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package JAW_Folio_Theme
 */

// Advance Custom Fields
$featured_projects_section_title = get_field('featured_projects_section_title');

?>

<!-- FEATURED PROJECTS SECTION -->
<section id="featured-projects">
    <div class="container">

        <div class="section-header">
            <h2><?php echo $featured_projects_section_title; ?></h2>
        </div><!-- .section-header -->                

        <div class="row">
            <div class="col-sm-12 col-md-8 col-md-offset-2 col-sm-offset-0">

                <?php $loop = new WP_Query(array(
                    'post_type'     => 'featured_projects',
                    'orderby'       => 'post_id',
                    'order'         => 'ASC'
                )); ?>

                <?php while($loop->have_posts()) : $loop->the_post(); ?>                
                

                <div class="row project">
                    <div class="col-sm-10 col-md-4 col-sm-offset-1 col-md-offset-0">
                        <a href="<?php echo the_field('featured_project_url'); ?>" target="_blank">
                        <?php 
                            if (has_post_thumbnail()) {
                                the_post_thumbnail(array(230, 146));
                            }
                        ?>
                        </a>   
                    </div><!-- col -->
                    <div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-0">
                        <blockquote><?php echo the_field('featured_project_description'); ?>
                            <cite><b>Technologies</b> &mdash; <?php echo the_field('featured_project_technologies'); ?></cite></blockquote>
                    </div><!-- col -->
                </div><!-- row -->                                   

                <?php 
                    endwhile;         
                    wp_reset_postdata(); 
                ?>                                  

            </div><!-- .col-sm-8 .col-sm-offset-2 -->

        </div><!-- .row -->

    </div><!-- .container -->
</section><!-- #featured-projects -->
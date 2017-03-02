<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package JAW_Folio_Theme
 */

get_header(); ?>

<section class="feature-image" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/laptop-and-pen.jpg') no-repeat; background-size: cover;" data-type="background" data-speed="2">
    <h1 class="page-title">Sorry! That page can't be found.</h1>
</section><!-- feature-image --> 

<div class="container">
    <div id="primary" class="row">
        <main id="content" class="col-sm-8">
            <div class="error-404 not-found">
                <div class="page-content">
                    <h2>Don't worry! Let's look for something interesting.</h2>
                    
                    <h3>Services</h3>
                    <p>Perhaps you want to check some the services I offer?</p>
                    <div class="service-row clearfix">

                        <?php $loop = new WP_Query(array(
                            'post_type'     => 'services_offered',
                            'orderby'       => 'post_id',
                            'order'         => 'ASC'
                        )); ?>

                        <?php while($loop->have_posts()) : $loop->the_post(); ?>


                        <div class="service">
                            <?php $service_icon_image = get_field('service_icon_image');  ?>
                            <?php if (!empty($service_icon_image)) :?>
                                <img src="<?php echo $service_icon_image['url']; ?>" alt="<?php echo $service_icon_image['alt']; ?>">
                            <?php endif; ?>
                            <h3><?php echo the_title(); ?></h3>
                            <p><?php echo the_field('service_description'); ?></p>
                        </div><!-- .service -->                    

                        <?php 
                            endwhile;         
                            wp_reset_postdata(); 
                        ?>                    
                    
                    </div><!-- service-row clearfix -->
                    
                    <h3>Categories</h3>
                    <p>...or maybe a popular category in my blog?</p>
                    
                    <div class="widget widget_categories">
                        <h4 class="widget-title">Most Used Categories</h4>
                        <ul>
                            <?php
                                wp_list_categories(array(
                                    'orderby'       => 'count',
                                    'order'         => 'DESC',
                                    'show_count'    => 1,
                                    'title_li'      => '',
                                    'number'        => 10
                                ));
                            ?>
                        </ul>
                    </div>
                    
                    <h3>Archives</h3>
                    <p>You may go through my archives...</p>
                    
                    <?php the_widget('WP_Widget_Archives', 'title=My Archives', 'before_title=<h4 class="widgettile">&after_title=</h4>'); ?>
                    
                </div>
            </div>
        </main>
        <aside class="col-sm-4">
            <?php get_sidebar(); ?>
        </aside>
    </div>
</div>

<?php
get_footer();

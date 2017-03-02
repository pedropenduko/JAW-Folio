<?php
/**
 * Template Name: Testimonials Page
 */

// Advance Custom Fields

$thumbnail_url                  = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
$testimonial_page_title         = get_field('testimonial_page_title');

get_header(); ?>


<!-- TESTIMONIAL FEATURE IMAGE -->
<?php if(has_post_thumbnail()) : ?>
    <section class="feature-image" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
<?php else : ?>
    <section class="feature-image" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/pen-and-paper.jpg') no-repeat; background-size: cover;" data-type="background" data-speed="2">    
<?php endif; ?>
    <h1 class="page-title"><?php echo $testimonial_page_title; ?></h1>
</section><!-- feature-image -->     

<!-- TESTIMONIALS SECTION -->
<section id="testimonials">
    <div class="container">

        <div class="row" id="primary">
            <div class="col-sm-12 col-md-8 col-md-offset-2 col-sm-offset-0">
                
                <?php $loop = new WP_Query(array(
                    'post_type'     => 'testimonies',
                    'orderby'       => 'post_id',
                    'order'         => 'ASC'
                )); ?>
                <?php while($loop->have_posts()) : $loop->the_post(); ?>
                    <div class="row testimonial">
                        <div class="col-sm-10 col-md-4 col-sm-offset-1 col-md-offset-0">                       
                        <?php    
                            if (has_post_thumbnail()) {
                                the_post_thumbnail(array(100,100));
                            } else {
                                echo "<img src=\"" . bloginfo('stylesheet_directory') . "/assets/img/nopic.jpg\" alt=\"No Picture\" width=\"100\" height=\"100\">";
                            }
                        ?>
                        </div><!-- col -->

                        <div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-0">
                            <blockquote><?php the_content(); ?>
                                <cite>&mdash; <?php the_title(); ?></cite></blockquote>
                        </div><!-- col -->
                    </div><!-- row testimonial -->                    
                <?php 
                    endwhile; 
                    wp_reset_postdata();
                 ?>
            </div><!-- .col-sm-12 .col-md-8 .col-md-offset-2 .col-sm-offset-0 -->

        </div><!-- .row -->
    </div><!-- .container -->

</section><!-- #testimonials -->
        
<?php
get_footer();
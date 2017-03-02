<?php
/**
 * Template part for displaying content in the Services section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package JAW_Folio_Theme
 */

// Advance Custom Fields
$services_section_title         = get_field('services_section_title');
$services_section_description   = get_field('services_section_description');
$services_section_icon_image    = get_field('services_section_icon_image');

?>

<!-- SERVICES SECTION -->
<section id="services">
    <div class="container">

        <div class="section-header">
            <?php // If the user uploaded a services section icon ?>
            <?php if (!empty($services_section_icon_image)) : ?>
                <img src="<?php echo $services_section_icon_image['url']; ?>" alt="<?php echo $services_section_icon_image['alt'] ?>">
            <?php endif; ?>          
                
            <h2><?php echo $services_section_title; ?></h2>
            
            <?php // If the user added services section description ?>
            <?php if (!empty($services_section_description)) : ?>       
                <p class="lead"><?php echo $services_section_description; ?></p>
            <?php endif; ?>            
        </div><!-- .section-header -->                


        <div class="row">
            <div class="col-sm-12">
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
                    
                </div><!-- .row -->
            </div><!-- .col-sm-12 -->
        </div><!-- .row -->

    </div><!-- .container -->
</section><!-- #services -->


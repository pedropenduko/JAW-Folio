<?php
/**
 * Template part for displaying content in the About section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package JAW_Folio_Theme
 */

// Advanced Custom Fields
$about_section_title            = get_field('about_section_title');
$about_section_content          = get_field('about_section_content');
$about_section_skills_title     = get_field('about_section_skills_title');
$about_section_background_image = get_field('about_section_background_image');

?>

<!-- ABOUT SECTION -->
<?php if(!empty($about_section_background_image)) : ?>

    <section id="about" style="background: url('<?php echo $about_section_background_image['url'] ?>') 100% 0px no-repeat;">
    
<?php else: ?>

    <section id="about" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/renzo-face.png') 100% 0px no-repeat;">
<?php endif; ?>        
    <div class="container-fluid">
        <div class="section-header">
            <h2><?php echo $about_section_title; ?></h2>
        </div><!-- .section-header -->                

        <div class="row about-me">

            <div class="col-sm-10 col-md-5 col-md-offset-1 col-sm-offset-1">
                <?php echo $about_section_content; ?>
            </div><!-- .col-sm-4 .col-sm-offset-1 -->
        </div>
        <div class="row about-me-skills">
            <div class="col-sm-10 col-md-5 col-sm-offset-1 col-md-offset-1">
                <h3 class='skills-header'><?php echo $about_section_skills_title; ?></h3>
                <?php $loop = new WP_Query(array(
                        'post_type'     => 'skills',
                        'orderby'       => 'post_id',
                        'order'         => 'ASC'
                    )); ?>
                <?php while($loop->have_posts()) : $loop->the_post(); ?>
                    <p><?php echo the_title(); ?></p>
                <?php 
                    endwhile;         
                    wp_reset_postdata(); 
                ?>                                    
              
            </div><!-- .col-sm-4 -->

        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- #about -->

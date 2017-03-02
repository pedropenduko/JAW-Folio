<?php
/**
 * Template part for displaying content in the Contact section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package JAW_Folio_Theme
 */

// Advance Custom Fields
$contact_section_title          = get_field('contact_section_title');
$contact_section_description    = get_field('contact_section_description');

?>

<!-- CONTACT SECTION -->
<section id="contact">
    <div class="container">
        <div class="section-header">
            <h2><?php echo $contact_section_title; ?></h2>
            <p class="lead"><?php echo $contact_section_description; ?></p>
        </div><!-- .section-header -->  

        <div class="row">
            <div id="content" class="col-sm-12">

                <?php 
                    while(have_posts()) {
                        the_post(); 
                        the_field('contact_section_form');
                    }  
                    wp_reset_postdata(); 
                ?> 

            </div><!-- content -->
        </div><!-- row -->
    </div><!-- container -->            
</section><!-- #contact -->
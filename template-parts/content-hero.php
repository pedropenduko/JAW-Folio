<?php
/**
 * Template part for displaying content in the Hero section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package JAW_Folio_Theme
 */

// Advance Custom Fields
$welcome_text           = get_field('welcome_text');
$main_text              = get_field('main_text');
$mission_text           = get_field('mission_text');
$green_button_text      = get_field('green_button_text');
$red_button_text        = get_field('red_button_text');
$hero_background_image  = get_field('hero_background_image');

?>

<!-- HERO SECTION -->
<?php if(!empty($hero_background_image)) : ?>

    <section id="hero" style="background: url('<?php echo $hero_background_image['url'] ?>') 50% 0 repeat fixed;" data-type="background" data-speed="5">
    
<?php else: ?>

    <section id="hero" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/hero-bg-wide.png') 50% 0 repeat fixed;" data-type="background" data-speed="5">                   
    
<?php endif; ?>
    <article>
        <div class="container clearfix">
            <div class="row hero-text">
                <div class="col-sm-8 col-sm-offset-2">
                    <h1><?php echo $welcome_text; ?></h1>
                    <h1><?php echo $main_text; ?></h1>
                    <p class="lead"><?php echo $mission_text; ?></p> 

                    <div class="row hero-buttons">
                        <div class="col-sm-3 col-sm-offset-2">
                            <p><a class="btn btn-lg btn-success" href="#about" role="button"><?php echo $green_button_text; ?></a></p>
                        </div>
                        <div class="col-sm-3 col-sm-offset-2">
                            <p><a class="btn btn-lg btn-danger" href="#contact" role="button"><?php echo $red_button_text; ?></a></p>
                        </div>
                    </div><!-- .row .hero-buttons -->
                </div><!-- .col-sm-8 -->
            </div><!-- .row -->
        </div><!-- .container .clearfix -->
    </article>
</section><!-- #hero -->

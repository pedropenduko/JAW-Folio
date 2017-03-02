<?php
/**
 * Template part for displaying content in the Contact Details section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package JAW_Folio_Theme
 */

// Advance Custom Fields
$social_icons_header_title  = get_field('social_icons_header_title');
$twitter_username           = get_field('twitter_username');
$facebook_username          = get_field('facebook_username');
$google_plus_username       = get_field('google_plus_username');
$linkedin_username          = get_field('linkedin_username');
$your_physical_address      = get_field('your_physical_address');
$your_email_address         = get_field('your_email_address');
$your_contact_number        = get_field('your_contact_number');

?>

<!-- CONTACT DETAILS SECTION -->
<section id='contact-details'>
    <div class='container'>
        <div class='row'>
            <div class="col-md-3 detail-social">
                <h4 class='social-header'><?php echo $social_icons_header_title; ?></h4>
                <?php if (!empty($twitter_username)) : ?>
                    <a href="https://twitter.com/<?php echo $twitter_username; ?>" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
                <?php endif; ?>
                <?php if (!empty($facebook_username)) : ?>    
                    <a href="https://facebook.com/<?php echo $facebook_username; ?>" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
                <?php endif; ?>
                <?php if (!empty($google_plus_username)) : ?>                    
                    <a href="https://plus.google.com/<?php echo $google_plus_username; ?>" target="_blank" class="badge social gplus"><i class="fa fa-google-plus"></i></a>
                <?php endif; ?>
                <?php if (!empty($linkedin_username)) : ?>                    
                    <a href="https://www.linkedin.com/in/<?php echo $linkedin_username; ?>?trk=hp-identity-name" target="_blank" class="badge social linkedin"><i class="fa fa-linkedin"></i></a>
                <?php endif; ?>
                                
            </div><!-- .col-md-3 .social -->
            <?php if (!empty($your_physical_address)) : ?>    
                <div class="col-md-3 contact-detail detail-address">                             
                
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/map-marker.png" alt='Map Marker'><br>
                    <p><?php echo $your_physical_address; ?></p>
                
                </div><!-- .col-md-3 .detail-address -->
            <?php endif; ?>
            <?php if (!empty($your_email_address)) : ?>        
                <div class="col-md-3 contact-detail detail-email">
                
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/green-envelope.png" alt='Mail Envelope'><br>
                    <a href="mailto:<?php echo $your_email_address; ?>"><?php echo $your_email_address; ?></a>
                
                </div><!-- .col-md-3 .detail-email -->
            <?php endif; ?>
            <?php if (!empty($your_contact_number)) : ?>    
                <div class="col-md-3 contact-detail detail-number">
                
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/telephone.png" alt='Telephone'><br>
                    <a href="tel:<?php  echo $your_contact_number; ?>"><?php  echo $your_contact_number; ?></a>
                
                </div><!-- .col-md-3 .detail-number -->
            <?php endif; ?>
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- #contact-details -->

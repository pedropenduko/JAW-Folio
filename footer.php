<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JAW_Folio_Theme
 */

?>



<?php wp_footer(); ?>

<!-- FOOTER SECTION -->
<footer>
    <?php 
        
        $home_page_info = get_page_by_title('Home', 'ARRAY_A', 'page'); 
        $site_logo      = get_field('site_logo', $home_page_info['ID']);
    ?>
    <div class="container">
        <div class="col-sm-3">
            <?php if (!empty($site_logo)) : ?>
                <p><a href="/"><img src="<?php echo $site_logo['url']; ?>" alt="<?php echo $site_logo['alt']; ?>"></a></p>
            <?php else : ?>
                <p><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/rommellaranjo-logo.png" alt="Rommel Laranjo Logo"></a></p>
            <?php endif; ?>
        </div><!-- col -->
        <div class="col-sm-6">
            <?php
                wp_nav_menu(array(
                    'theme_location'    => 'footer',
                    'container'         => 'nav',
                    'menu_class'        => 'list-unstyled list-inline'
                ));
            ?>            
        </div><!-- col -->
        <div class="col-sm-3">
            <p class="pull-right">&copy; Copyright <?php echo date('Y'); ?> <a href="/">Rommel Laranjo</a></p>
        </div><!-- col -->
    </div><!-- container -->
</footer>

<!-- BOOTSTRAP CORE JAVASCRIPT 
     Placed at the end of the document so the pages load faster! -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

<!-- TypeKit Fonts -->
<script src="https://use.typekit.net/ecd5tuj.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>  

</body>
</html>

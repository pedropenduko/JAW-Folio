<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JAW_Folio_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- Bootstrap core CSS -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

<!-- FontAwesome Icons -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

<?php wp_head(); ?>

<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/html5shiv/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<?php 
    
    // There is a site logo field at the 'Home' page, so let us reuse it
    $home_page_info = get_page_by_title('Home', 'ARRAY_A', 'page'); 
    $site_logo      = get_field('site_logo', $home_page_info['ID']);

?>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jaw-folio' ); ?></a>

    <!-- HEADER -->
    <header class="site-header" role="banner">

        <!-- NAVBAR -->
        <div class="navbar-wrapper">

            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <?php if(!empty($site_logo)) : ?>
                        <a class="navbar-brand" href="/"><img src="<?php echo $site_logo['url'];?>" alt="<?php echo $site_logo['alt']; ?>"></a>
                        <?php else : ?>
                        <a class="navbar-brand" href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/rommellaranjo-logo.png" alt="Rommel Laranjo Logo"></a>
                        <?php endif; ?>
                    </div><!-- navbar-header -->

                    <?php 
                    /*
                     * If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". In other words, it overwrites 
                     * the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4
                     */
                        wp_nav_menu(array(
                            'theme_location'    => 'menu-1',
                            'container'         => 'nav',
                            'container_class'   => 'navbar-collapse collapse',
                            'menu_class'        => 'nav navbar-nav navbar-right'
                        ));
                    ?>

                </div><!-- container -->

            </nav><!-- navbar -->

        </div><!-- navbar-wrapper -->
    </header>
</div>
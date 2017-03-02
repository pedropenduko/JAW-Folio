<?php
/**
 * Template Name: Home Page
 */



get_header(); ?>

<?php get_template_part('template-parts/content', 'hero'); ?>

<?php get_template_part('template-parts/content', 'services'); ?>

<?php get_template_part('template-parts/content', 'featuredprojects'); ?>

<?php get_template_part('template-parts/content', 'about'); ?>

<?php get_template_part('template-parts/content', 'contact'); ?>

<?php get_template_part('template-parts/content', 'contactdetails'); ?>

<?php
get_footer();

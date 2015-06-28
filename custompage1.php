<?php /* Template Name: custompage */ ?>

<?php get_header(); the_post(); ?>

<div id="home"></div>

<?php get_template_part('partials/slidearea'); ?>

<?php get_template_part('partials/skillset'); ?>

<?php get_template_part('partials/threec'); ?>

<?php get_template_part('partials/portfolio'); ?>

<?php get_template_part('partials/contact'); ?>

<?php get_footer(); ?>

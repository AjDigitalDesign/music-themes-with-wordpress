<?php
/**
 * Template Name: About Us
 * The template for displaying all About-Us Content
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ducor_Media
 */

get_header();
?>


<?php while ( have_posts() ) :  the_post();

    get_template_part( 'template-parts/about-us' );

endwhile; // End of the loop. ?>

<?php get_footer(); ?>

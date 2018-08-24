<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Ducor_Media
 */

get_header();
?>


<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ducor_Media
 */

get_header();
?>


<!--Blog Section-->
<section class="blog-standard">
    <div class="auto-container">
        <div class="row">
            <div class="col-xl-8 col-md-12 col-sm-12">
                <div class="blog-item-one">
                    <?php if ( have_posts() ) : ?>

                        <header class="page-header">
                            <h2 class="page-title-search">
                                <?php
                                /* translators: %s: search query. */
                                printf( esc_html__( 'Search Results for: %s', 'ducormedhp' ), '<span>' . get_search_query() . '</span>' );
                                ?>
                            </h2>
                        </header><!-- .page-header -->

                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();

                            /**
                             * Run the loop for the search to output the results.
                             * If you want to overload this in a child theme then include a file
                             * called content-search.php and that will be used instead.
                             */
                            get_template_part( 'template-parts/content', 'search' );

                        endwhile;

                        the_posts_navigation();

                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif;
                    ?>
                </div>

            </div>
            <div class="col-xl-4 col-md-12 col-sm-12">
                <?php get_sidebar(); ?>
            </div>
        </div><!--row-->
    </div><!-- auto container-->
</section>
<?php get_footer(); ?>



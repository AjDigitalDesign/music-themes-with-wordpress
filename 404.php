<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Ducor_Media
 */

get_header();
?>


<!--Blog Section-->
<section class="blog-standard">
        <div class="auto-container">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12">
                    <div class="blog-item-one">
                            <header class="page-header">

                                    <h2 class="page-title-search"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'ducormedia' ); ?></h2>

                            </header><!-- .page-header -->

                        <div class="content-text clearfix">
                            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'ducormedia' ); ?></p>

                            <?php
                            get_search_form();

                            ?>


                        </div>


                    </div>

                </div>

            </div><!--row-->
        </div><!-- auto container-->
    </section>
<?php get_footer(); ?>






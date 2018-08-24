<?php
/*
 * Template Name: Projects page
 * The template for displaying all pages
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

get_header();  ?>
<?php while(have_posts()) : the_post();  ?>
<!--Gallery Section-->
<section class="gallery-section">
    <div class="auto-container">
        <div class="gallery-container">
            <div class="row">
                <?php
                    $args = array(
                        'post_type'         => 'project',
                        'posts_per_page'     => -1,
                        'orderby'           => 'title',
                        'category_name'     =>  '',
                        'order'             => 'ASC',
                    );
                ?>

                <?php $our_work  = new WP_Query($args); while ($our_work->have_posts()) : $our_work->the_post();?>
                <div class="gallery-column col-xl-4 col-md-6 col-sm-12">
                    <div class="image-box">
                        <?php if(has_post_thumbnail()) : ?>
                            <figure>
                                <img src="<?php the_post_thumbnail_url('projects_img') ?>" alt="">
                            </figure>
                            <div class="overlay-box">
                                <a data-group="1" href="<?php the_post_thumbnail_url('projects_img') ?>" class="img-popup">
                                    <figure><img src="<?php the_post_thumbnail_url('projects_img') ?>" alt=""></figure>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
<!--End Gallery Section-->


<!--Gallery Bottom-->
<section class="gallery-bottom style-three">
    <div class="auto-container clearfix">
        <div class="gb-text">
            <h2>Lets Discuss Your Next Project</h2>
        </div>
        <div class="link-btn">
            <a href="<?php echo esc_url( get_permalink(1768) ); ?>" class="theme-btn btn-style-two">Contact Us</a>
        </div>
    </div>
</section>
<!--End Gallery Bottom-->

<?php endwhile; ?>
<?php get_footer(); ?>

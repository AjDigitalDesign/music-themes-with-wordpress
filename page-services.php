<?php
/*
 * Template Name: Services
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

get_header(); ?>

<?php while (have_posts()) : the_post();  ?>

<!--History Section-->
<section class="history-section">
    <div class="auto-container">
        <div class="history-area clearfix">
            <div class="history-text-left">
                <h3><span>10 Years Of Quality <br>Services In</span> Our Business</h3>
            </div>
            <div class="history-text-right">
                <p><?php the_excerpt(); ?></p>
            </div>
        </div>
        <div class="services-area">
            <div class="row">
                <?php
                    $args = array(
                        'post_type'         => 'ourservices',
                        'posts_per_page'     =>  3,
                        'orderby'           =>  'title',
                        'order'             => 'ASC'
                    );

                ?>
                <?php $ourservices = new WP_Query($args); while ($ourservices->have_posts()) : $ourservices->the_post(); ?>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="service-item-one">
                        <div class="image-box">
                            <figure>
                                <?php if(has_post_thumbnail()) : ?>
                                 <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('Services-bg'); ?>" alt="<?php the_post_thumbnail_caption('alt'); ?>"></a>
                                <?php endif; ?>
                            </figure>
                        </div>
                        <div class="image-text">
                            <a href="<?php the_permalink(); ?>"><h6><?php the_title(); ?></h6></a>
                            <p><?php the_excerpt(); ?></p>
                            <div class="link-btn">
                                <a href="<?php the_permalink(); ?>" class="theme-btn">Read More<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
<!--End History Section-->


<!--Fact Counter-->
<div class="fact-counter" style="background: url(<?php bloginfo('stylesheet_directory') ?>/assets/images/background/project.jpg);">
    <div class="auto-container">
        <div class="row">
            <!--Column-->
            <article class="counter-column col-xl-3 col-md-6 col-sm-12 wow fadeIn" data-wow-duration="900ms">
                <div class="count-outer text-center">
                    <i class="flaticon-microphone"></i>
                    <span class="count-text" data-speed="3000" data-stop="102">0</span>
                    <p>IDEAS REALIZED</p>
                </div>
            </article>

            <!--Column-->
            <article class="counter-column col-xl-3 col-md-6 col-sm-12 wow fadeIn" data-wow-duration="300ms">
                <div class="count-outer text-center">
                    <i class="flaticon-flag"></i>
                    <span class="count-text" data-speed="3000" data-stop="92">0</span>
                    <p>PROJECTS DONE</p>
                </div>
            </article>

            <!--Column-->
            <article class="counter-column col-xl-3 col-md-6 col-sm-12 wow fadeIn" data-wow-duration="600ms">
                <div class="count-outer text-center">
                    <i class="flaticon-users"></i>
                    <span class="count-text" data-speed="3000" data-stop="75">0</span>
                    <p>HAPPY CLIENTS</p>
                </div>
            </article>


            <!--Column-->
            <article class="counter-column col-xl-3 col-md-6 col-sm-12 wow fadeIn" data-wow-duration="900ms">
                <div class="count-outer text-center">
                    <i class="flaticon-cup"></i>
                    <span class="count-text" data-speed="3000" data-stop="20">0</span>
                    <p>Awards</p>
                </div>
            </article>

        </div>
    </div>
</div>
<!--End Fact Counter-->


<!--Services Section-->
<section class="services-section">
    <div class="container">
        <div class="sec-title-two text-center">
            <h6>Our Services</h6>
            <h2><span>What We</span> Do Best</h2>
        </div>
        <div class="row">
            <?php
                $args = array(
                    'post_type'         => 'ourservices',
                    'posts_per_page'     =>  -1,
                    'orderby'           =>  'title',
                    'order'             => 'ASC'
                );
            ?>
            <?php $ourservicesTwo = new WP_Query($args); while ($ourservicesTwo->have_posts()) : $ourservicesTwo->the_post(); ?>
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="service-item-one">
                        <div class="image-box">
                            <figure>
                                <?php if(has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('Services-bg'); ?>" alt="<?php the_post_thumbnail_caption('alt'); ?>"></a>
                                <?php endif; ?>
                            </figure>
                        </div>
                        <div class="image-text">
                            <a href="<?php the_permalink(); ?>"><h6><?php the_title(); ?></h6></a>
                            <p><?php the_excerpt(); ?></p>
                            <div class="link-btn">
                                <a href="<?php the_permalink(); ?>" class="theme-btn">Read More<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

        </div>
    </div>
</section>
<!--End Services Section-->


<!--Testimonials Section-->
<section class="testimonial-section" style="background: url(<?php bloginfo('stylesheet_directory') ?>/assets/images/background/testimonials.jpg);">
    <div class="auto-container">
        <div class="sec-title-two text-center">
            <h6>FEEDBACKS</h6>
            <h2><span>People Say</span> Nicest Thing</h2>
        </div>
        <div class="testimonial-area">
            <div class="single-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-style-one">
                <div class="single-item">
                    <i>“</i>
                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches</p>
                    <h6>Alex Patterson</h6>
                    <span>UI Designer, CNN</span>
                </div>
                <div class="single-item">
                    <i>“</i>
                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches</p>
                    <h6>Alex Patterson</h6>
                    <span>UI Designer, CNN</span>
                </div>
                <div class="single-item">
                    <i>“</i>
                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches</p>
                    <h6>Alex Patterson</h6>
                    <span>UI Designer, CNN</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Testimonials Section-->


<?php endwhile; ?>


<?php get_footer();?>

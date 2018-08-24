<?php
/**
 * Template Name: Front Page
 * The template for displaying content on the Front page
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

    <!--About Section-->
    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">

                <?php
                    $args =  array(
                            'pagename'  =>  'aboutus'
                    );
                ?>
                <?php $abut_us  =  new WP_Query($args); while ($abut_us->have_posts()) : $abut_us->the_post(); ?>
                <div class="left-column col-xl-7 col-md-12 col-sm-12">
                    <div class="about-left-column">
                        <div class="sec-title">
                            <h6><?php the_field('subtitle'); ?></h6>
                            <h2><span><?php the_field('welcome_text'); ?></span><br><?php the_field('business_name'); ?> <span class="color-text"><?php the_field('business_name_last'); ?></span></h2>
                        </div>
                        <div class="text">
                            <?php the_field('short_description'); ?>
                        </div>
                        <div class="link-btn">
                            <a href="<?php the_permalink(); ?>" class="theme-btn btn-style-two">Learn About-Us</a>
                        </div>
                    </div>

                </div>

                    <div class="right-column col-xl-5 col-md-12 col-sm-12">
                        <div class="about-right-column">
                            <div class="row">
                                <div class="col-xl-6 col-md-6 col-sm-6">
                                    <div class="about-item-one">
                                        <i class="flaticon-computer"></i>
                                        <a href="#"><h6><?php the_field('engaing'); ?></h6></a>
                                        <p><?php the_field('engaging_text'); ?></p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-6">
                                    <div class="about-item-one">
                                        <i class="flaticon-targeting"></i>
                                        <a href="#"><h6><?php the_field('second_vision_name'); ?></h6></a>
                                        <p><?php the_field('impactful'); ?></p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-6">
                                    <div class="about-item-one">
                                        <i class="flaticon-technology"></i>
                                        <a href="#"><h6><?php the_field('third_vision_name'); ?></h6></a>
                                        <p><?php the_field('creative'); ?></p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-6">
                                    <div class="about-item-one">
                                        <i class="flaticon-hand-shake"></i>
                                        <a href="#"><h6><?php the_field('fourth_vision_name'); ?></h6></a>
                                        <p><?php the_field('professionalism'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>
        </div>
    </section>
    <!--End About Section-->


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
                    'posts_per_page'     =>  3,
                    'orderby'           =>  'date',
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


    <!--projects Section-->
    <section class="gallery-section">
        <div class="auto-container">
            <div class="sec-title-two text-center">
                <h6>Our Projects</h6>
                <h2><span>Some Of Our</span> Work</h2>
            </div>
            <div class="gallery-container">
                <div class="row">
                <?php
                    $args = array(
                        'post_type'         => 'project',
                        'posts_per_page'     => 3,
                        'orderby'           => 'date',
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
    <!--End projects Section-->


    <!--Gallery Bottom-->
    <section class="gallery-bottom">
        <div class="auto-container clearfix">
            <div class="gb-text">
                <h2>Take A look  At Our Amazing Projects</h2>
            </div>
            <div class="link-btn">
                <a href="<?php echo esc_url( get_permalink(735) ); ?>" class="theme-btn btn-style-three">Know more</a>
            </div>
        </div>
    </section>
    <!--End Gallery Bottom-->


    <!--Team Section-->
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title-two text-center">
                <h6>Team</h6>
                <h2><span>The Best</span> Team Available</h2>
            </div>
            <div class="row">
                <?php
                    $args = array(
                        'post_type'         => 'team',
                        'posts_per_page'     => 3,
                        'orderby'           => 'rand',
                        'order'             => 'ASC',
                    );
                    ?>
                <?php $team_image = new WP_Query($args); while($team_image->have_posts()) : $team_image->the_post(); ?>
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <?php if(has_post_thumbnail()) : ?>
                        <div class="team-item-one" style="background: url(<?php the_post_thumbnail_url('teammate_bg'); ?>);">
                            <?php endif; ?>
                            <div class="team-text-area">
                                <div class="team-text">
                                    <div class="image-box">
                                        <figure>
                                            <?php if(has_post_thumbnail()) : ?>
                                                <img src="<?php the_post_thumbnail_url('teammate_headshot') ?>">
                                            <?php endif; ?>
                                        </figure>
                                    </div>
                                    <div class="image-content">
                                        <h6><?php the_title(); ?></h6>
                                        <span><?php the_field('teammate_title'); ?></span>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                                <ul class="social-links">
                                    <li><a href="<?php the_field('facebook_link'); ?>"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="<?php the_field('twitter'); ?>"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="<?php the_field('instagram'); ?>"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="<?php the_field('linkedin'); ?>"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>
        </div>
    </section>
    <!--End Team Section-->


    <!--Testimonials Section-->
    <section class="testimonial-section" style="background: url(<?php bloginfo('stylesheet_directory') ?>/assets/images/background/testimonials.jpg);">
        <div class="auto-container">
            <div class="sec-title-two text-center">
                <h6>FEEDBACKS</h6>
                <h2><span>People Say</span> Nicest Thing</h2>
            </div>
            <div class="testimonial-area">
                <?php
                    $args = array(
                        'post_type'     =>  'testimonial',
                        'post_per_page' => -1,
                        'orderby'       => 'title',
                        'order'         => 'ASC'
                    );
                ?>

                <div class="single-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-style-one">
                    <?php $testimonial = new WP_Query($args); while($testimonial->have_posts()) : $testimonial->the_post(); ?>
                        <div class="single-item">
                            <i>“</i>
                            <?php the_field('testimonial'); ?>
                            <h6><?php the_field('author_name'); ?></h6>
                            <?php $author_title = get_field('enter_author_title'); ?>
                            <?php if (!empty($author_title)) : ?>
                                <span><?php echo $author_title; ?></span>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonials Section-->


    <!--Blog Section-->
    <section class="blog-section">
        <div class="auto-container">
            <div class="sec-title-two text-center">
                <h6>NEWS</h6>
                <h2><span>From Our</span> Blog</h2>
            </div>
            <div class="row">
                <?php
                   $args =  array(
                       'pagename'       => 'blog',
                       'posts_per_page' => 3,
                       'orderby'        => 'title',
                       'order'          => 'ASC',
                   );
                ?>
                <?php $blog_posts = new WP_Query($args); while($blog_posts->have_posts()) : $blog_posts->the_post() ;?>
                    <div class="col-xl-4 col-md-4 col-sm-6">
                    <div class="blog-item-one">
                        <div class="image-box">
                            <figure>
                                <a href="<?php the_permalink(); ?>">
                                    <?php if(has_post_thumbnail()) {
                                        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'blog_page');
                                        the_post_thumbnail('blog_page');
                                    }?>
                                </a>
                            </figure>
                        </div>
                        <div class="content-text clearfix">
                            <a href="blog-single.html"><h5><?php the_title(); ?></h5></a>
                            <ul class="text-left">
                                <li><i class="fa fa-clock-o"></i><?php the_date(); ?></li>
                            </ul>
                            <div class="front-page-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="link-btn">
                                <a href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <!--End Blog Section-->

<?php get_footer();

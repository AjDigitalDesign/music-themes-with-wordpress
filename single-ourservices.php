<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ducor_Media
 */

get_header(); ?>


<?php while ( have_posts() ) :the_post(); ?>

    <!--History Section-->
    <section class="history-section style-two">
        <div class="auto-container">
            <div class="history-area style-two clearfix">
                <div class="history-text-left">
                    <h3><span>10 Years Of Quality <br>Services In</span> Our Business</h3>
                </div>
                <div class="history-text-right">
                    <p><?php the_excerpt(); ?></p>
                </div>
            </div>
            <div class="services-details">
                <div class="image-box">
                    <figure>
                        <?php if(has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('Services-single'); ?>" alt="<?php the_post_thumbnail_caption('alt'); ?>"></a>
                        <?php endif; ?>
                    </figure>
                </div>
                <div class="image-text">
                    <h5><?php the_title(); ?></h5>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        </div>
    </section>
    <!--End History Section-->


    <!--Related Services-->
    <section class="related-services">
        <div class="auto-container">
            <div class="services-title">
                <h5>More Related Services</h5>
            </div>
            <div class="services-area">
                <div class="row">
                    <?php
                        $args = array(
                            'post_type'         => 'ourservices',
                            'post_per_page'     =>  3,
                            'category_name'     =>  'Top Services',
                            'orderby'           =>  'date',
                            'order'             =>  'ASC'
                        );
                    ?>
                    <?php $relative_service = new WP_Query($args); while ($relative_service->have_posts()) : $relative_service->the_post(); ?>
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
    <!--End Related Services-->


    <!--Newslatter Section-->
    <section class="newslatter-section">
        <div class="container">
            <div class="sec-title-three text-center">
                <h4>Sign Up For Our Newsletter</h4>
            </div>
            <form method="post" action="contact.html">
                <div class="form-group">
                    <input type="email" name="email" value="" placeholder="Your Mail Address" required="">
                    <button type="submit" class="theme-btn btn-style-three">Subscribes</button>
                </div>
            </form>
        </div>
    </section>
    <!--End Newslatter Section-->





<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>

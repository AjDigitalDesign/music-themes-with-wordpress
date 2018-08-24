

<!--About Section-->
<section class="about-section">

    <div class="auto-container">
        <div class="row clearfix">

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
                        <?php
                            $service_link = get_field('services_button');
                        ?>
                        <?php if($service_link) : ?>
                            <a href="<?php echo $service_link['url']; ?>" class="theme-btn btn-style-two">Our Services</a>
                        <?php endif; ?>
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

        </div>
    </div>
</section>
<!--End About Section-->


<!--Mission Skill-->
<section class="mission-skill">
    <div class="auto-container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="section-title">
                    <h2><span>Our</span> Mission</h2>
                    <div class="mission-text">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Mission Skill-->


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

<!--Gallery Section-->
<section class="gallery-section grey-bg">
    <div class="auto-container">
        <div class="sec-title-two text-center">
            <h6><?php echo get_the_title(733); ?></h6>
            <h2><span>Some Of Our</span> Work</h2>
        </div>
        <div class="gallery-container">
            <div class="row">
                <?php
                $args = array(
                    'post_type'         => 'project',
                    'post_per_page'     => 3,
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
<section class="gallery-bottom style-two">
    <div class="auto-container clearfix">
        <div class="gb-text">
            <h2>Take A look  At Our Amazing Project</h2>
        </div>
        <div class="link-btn">
            <a href="<?php echo esc_url( get_permalink(733) ); ?>" class="theme-btn btn-style-two">Know more</a>
        </div>
    </div>
</section>
<!--End Gallery Bottom-->


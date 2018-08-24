<?php
/*
 * Template Name: Contact
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
<?php while ( have_posts() ) : the_post(); ?>
<!--Contact Us Info-->
<section class="contact-us-info">
    <div class="auto-container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="contact-us-item-one contact-left-info">
                    <div class="icon-box">
                        <i class="flaticon-placeholder-1"></i>
                    </div>
                    <strong>Address</strong>
                    <p>5530 Chester Ave, Philadelphia PA 19143</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="contact-us-item-one contact-middle-info">
                    <div class="icon-box">
                        <i class="flaticon-note"></i>
                    </div>
                    <strong>E-mail</strong>
                    <p><a href="#">info@ducormedia.com</a><br><a href="#">info@ducormedia.com</a></p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="contact-us-item-one contact-right-info">
                    <div class="icon-box">
                        <i class="flaticon-technology-1"></i>
                    </div>
                    <strong>Phone</strong>
                    <p>Phone: 484-899-0825 <br> Fax: 215-729-8202</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Contact Us Info-->


<!--Contact Page-->
<section class="contact-page">
    <div class="container-fulid">
        <div class="row">
            <div class="col-xl-6 col-md-12 col-sm-12">
                <div class="map-area">
                    <?php echo do_shortcode('[wpgmza id="1"]'); ?>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 col-sm-12">
                <div class="contact-form-area" style="background: url(<?php bloginfo('stylesheet_directory') ?>/assets/images/background/contact-bg.jpg);">
                    <div class="sec-title-six">
                        <h3><span>Let’s Get In</span> Touch</h3>
                    </div>
                    <form name="contact_form" class="default-form post-comment" action="sendmail.php" method="post">

                            <?php the_content(); ?>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Us Info-->
<?php endwhile; ?>


<?php get_footer(); ?>

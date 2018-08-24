<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ducor_Media
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>


    <!-- Main Header-->
    <header class="main-header">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="row">
                    <div class="col-xl-3 col-md-12 col-sm-12">
                        <div class="logo">
                            <figure>
                                <?php
                                    //Check if the custom logo exists
                                if(function_exists('the_custom_logo')){
                                    the_custom_logo();
                                }
                                ?>
                            </figure>
                        </div>
                    </div>
                    <div class="col-xl-9 col-md-12 col-sm-12">
                        <div class="header-info">
                            <div class="row">
                                <div class="info-colmun col-xl-4 col-md-4 col-sm-12">
                                    <div class="header-info-item">
                                        <div class="icon-box">
                                            <i class="flaticon-placeholder"></i>
                                        </div>
                                        <div class="info-text">
                                            <?php dynamic_sidebar( 'header-1' ); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-colmun col-xl-4 col-md-4 col-sm-12">
                                    <div class="header-info-item">
                                        <div class="icon-box">
                                            <i class="flaticon-phone-call"></i>
                                        </div>
                                        <div class="info-text">
                                            <?php dynamic_sidebar( 'header-2' ); ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="info-colmun col-xl-4 col-md-4 col-sm-12">
                                    <div class="header-info-item">
                                        <div class="icon-box">
                                            <i class="flaticon-new-email-outline"></i>
                                        </div>
                                        <div class="info-text">
                                            <?php dynamic_sidebar( 'header-3' ); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Header Top-->

        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <?php
                            wp_nav_menu( array(
                                'theme_location'		=> 'menu-1',
                                'depth'                 =>  2,
                                'container'             =>  'div',
                                'container_class'       => 'navbar-collapse collapse clearfix',
                                'menu_class'            =>  'navigation clearfix',
                                'fallback_cb'           =>  'WP_Bootstrap_Navwalker::fallback',
                                'walker'                => new WP_Bootstrap_Navwalker()
                            ) );

                        ?>

                    </nav>
                    <!-- Main Menu End-->

                    <!-- Search -->
                    <div class="search-box">
                        <form method="post" action="blog.html">
                            <div class="form-group">
                                <input type="search" name="field-name" value="" placeholder="Search Keyword" required="">
                                <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <?php
                        wp_nav_menu( array(
                            'theme_location'		=> 'menu-1',
                            'depth'                 =>  2,
                            'container'             =>  'div',
                            'container_class'       => 'navbar-collapse collapse clearfix',
                            'menu_class'            =>  'navigation clearfix',
                            'fallback_cb'           =>  'WP_Bootstrap_Navwalker::fallback',
                            'walker'                => new WP_Bootstrap_Navwalker()
                        ) );

                        ?>

                    </nav>
                    <!-- Main Menu End-->

                    <!-- Search -->
                    <div class="search-box">
                        <form method="post" action="blog.html">
                            <div class="form-group">
                                <input type="search" name="field-name" value="" placeholder="Search Keyword" required="">
                                <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--End Sticky Header-->
    </header>
    <!--End Main Header -->

<?php if(is_front_page()) { ?>
    <!--Main Slider-->
    <section class="main-slider">
        <?php echo do_shortcode("[rev_slider alias=\"website-intro\"]"); ?>
    </section>
    <!--End Main Slider-->
<?php } elseif(is_home()) { ?>
    <!--Page Title-->
    <?php
    $posts_page = get_option( 'page_for_posts' );
    $header_title_img   = wp_get_attachment_image_src(get_post_thumbnail_id($posts_page), 'full');
    $header_title_img = $header_title_img[0];
    ?>
    <?php if($header_title_img) { ?>
    <section class="page-title" style="background: url(<?php echo $header_title_img; ?>">
        <?php } else { ?>
        <section class="page-title" style="background: url(<?php bloginfo('stylesheet_directory') ?>/assets/images/background/parallax-5.jpg)">
            <?php } ?>
            <div class="auto-container">
                <div class="section-title text-center">
                    <h1><?php single_post_title(); ?></h1>
                    <!--                    <p>We provide solutions. All our work is focused around the client's needs.</p>-->
                </div>
            </div>
        </section>
        <!--End Page Title-->
<?php } elseif(is_archive() || is_category()){ ?>
            <?php
            $posts_page = get_option( 'page_for_posts' );
            $header_title_img   = wp_get_attachment_image_src(get_post_thumbnail_id($posts_page), 'full');
            $header_title_img = $header_title_img[0];
            ?>
            <?php if($header_title_img) { ?>
            <section class="page-title" style="background: url(<?php echo $header_title_img; ?>">
                <?php } else { ?>
                <section class="page-title" style="background: url(<?php bloginfo('stylesheet_directory') ?>/assets/images/background/search.jpg)">
                    <?php } ?>
                    <div class="auto-container">
                        <div class="section-title text-center">
                            <h1><?php the_archive_title(); ?></h1>
                            <!--<p>We provide solutions. All our work is focused around the client's needs.</p>-->
                        </div>
                    </div>
            </section>
            <!--End Page Title-->

<?php } elseif(is_search() || is_404()){ ?>
                <?php
                $posts_page = get_option( 'page_for_posts' );
                $header_title_img   = wp_get_attachment_image_src(get_post_thumbnail_id($posts_page), 'full');
                $header_title_img = $header_title_img[0];
                ?>
                <?php if($header_title_img) { ?>
                <section class="page-title" style="background: url(<?php echo $header_title_img; ?>">
                    <?php } else { ?>
                    <section class="page-title" style="background: url(<?php bloginfo('stylesheet_directory') ?>/assets/images/background/search.jpg)">
                        <?php } ?>
                        <div class="auto-container">
                            <div class="section-title text-center">
                                <h1>Search Result</h1>
                                <!--                    <p>We provide solutions. All our work is focused around the client's needs.</p>-->
                            </div>
                        </div>
                </section>
                <!--End Page Title-->


<?php } else { ?>
    <!--Page Title-->
    <?php
        $header_title_img   = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
        $header_title_img = $header_title_img[0];
    ?>
    <?php if($header_title_img) { ?>
        <section class="page-title" style="background: url(<?php echo $header_title_img; ?>">
        <?php } else { ?>
        <section class="page-title" style="background: url(<?php bloginfo('stylesheet_directory') ?>/assets/images/background/parallax-5.jpg)">
    <?php } ?>
            <div class="auto-container">
                <div class="section-title text-center">
                    <h1><?php the_title(); ?></h1>
<!--                    <p>We provide solutions. All our work is focused around the client's needs.</p>-->
                </div>
            </div>
        </section>
    <!--End Page Title-->
<?php }  ?>

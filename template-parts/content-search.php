<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ducor_Media
 */

?>

<div class="blog-item-one">
    <div class="image-box">
        <?php if(has_post_thumbnail()) : ?>
            <figure>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('blog_post_img');  ?>
                </a>
            </figure>
        <?php endif; ?>
    </div>
    <div class="content-text clearfix">
        <?php
        if ( is_singular() ) :
            the_title( '<h5>', '</h1>' );
        else :
            the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><h5>', '</h5></a>' );
        endif;

        if ( 'post' === get_post_type() ) :
            ?>
            <ul class="text-left">
                <li><i class="fa fa-clock-o"></i><?php the_date(); ?></li>
                <li><i class="fa fa-user"></i>By <?php the_author(); ?></li>
                <li><i class="fa fa-commenting"></i>Comment <span><?php comments_number(0, 1, '%'); ?></span></li>
            </ul>
        <?php endif; ?>
        <div class="front-page-excerpt">
            <?php the_excerpt(); ?>
        </div>

        <div class="link-btn">
            <a href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-right"></i></a>
        </div>
    </div>

</div>


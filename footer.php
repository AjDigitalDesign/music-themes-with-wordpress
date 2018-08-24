<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ducor_Media
 */

?>



<!--Footer Footer-->
<section class="footer-bottom">
    <div class="auto-container clearfix">
        <div class="copyright-text">
            All Rights Reserved <?php echo copyright_date(); ?>
            <span class="sep"> | </span>
            <?php
            /* translators: 1: Theme name, 2: Theme author. */
            printf( esc_html__( 'Website: %1$s Developed by %2$s.', 'DucorMedia' ), 'ducormedia', '<a href="http://ajdigitaldesign.com">AJ Digital Design</a>' );
            ?>
        </div>

        <?php
        wp_nav_menu( array(
            'theme_location'		=> 'footer-menu',
            'depth'                 =>  2,
            'container'             =>  false,
            'menu_class'            =>  'footer-menu',
            'fallback_cb'           =>  'WP_Bootstrap_Navwalker::fallback',
            'walker'                => new WP_Bootstrap_Navwalker()
        ) );

        ?>

    </div>
</section>
<!--End Footer Footer-->
</div>
<!--End page wrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-chevron-up"></span></div>

<?php wp_footer(); ?>

</body>
</html>

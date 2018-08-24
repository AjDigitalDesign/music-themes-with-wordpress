<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ducor_Media
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php
    // You can start editing here -- including this comment!
    if ( have_comments() ) :
        ?>
        <h2 class="comments-title">
            <?php
            $ducormedia_comment_count = get_comments_number();
            if ( '1' === $ducormedia_comment_count ) {
                printf(
                /* translators: 1: title. */
                    esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'ducormedia' ),
                    '<span>' . get_the_title() . '</span>'
                );
            } else {
                printf( // WPCS: XSS OK.
                /* translators: 1: comment count number, 2: title. */
                    esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $ducormedia_comment_count, 'comments title', 'ducormedia' ) ),
                    number_format_i18n( $ducormedia_comment_count ),
                    '<span>' . get_the_title() . '</span>'
                );
            }
            ?>
        </h2><!-- .comments-title -->

        <?php the_comments_navigation(); ?>

        <?php
        $args = array(
            'walker'            => null,
            'max_depth'         => '',
            'style'            => 'ol',
            'callback'         => null,
            'end-callback'     => null,
            'type'             => 'all',
            'replay_text'      => 'Replay',
            'page'             => '',
            'per_page'         => '',
            'avatar_size'      => 42,
            'reverse_top_level'    => null,
            'reverse_children'     => '',
            'format'               => 'html5',
            'short_ping'           => false,
            'echo'                 => true
        );
        wp_list_comments($args);
        ?>
            <?php
            the_comments_navigation();

            // If comments are closed and there are comments, let's leave a little note, shall we?
            if ( ! comments_open() ) :
                ?>
                <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'ducormedia' ); ?></p>
            <?php
            endif;

        endif; // Check for have_comments().

            $fields = array(
                'author' => '<div class="form-group"><label  for="author"></label><input id="author" name="author" type="text"  class="" value="' . esc_attr( $commenter['comment_author'] ) .
                    '" required="required" placeholder="Name" /></div>',

                'email' => '<div class="form-group"><label for="email"></label>
                <input id="email" name="email" type="text" class="" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                    '" required="required" placeholder="Email" /></div>',

                'url' => '<div class="form-group"><label for="url"></label><input id="url" name="url" type="text" class="" value="' . esc_attr( $commenter['comment_author_url'] ) .
                    '" placeholder="website" /></div>',

            );

            $args = array(
                'id_submit' => '',
                'class_submit'  => 'theme-btn btn-style-four',
                'comment_field' =>  '<div class="form-group"><label class="control-label" for="comment">' . _x( 'Comment', 'noun' ) .
                    '</label><textarea id="comment" class="form-control textarea required" name="comment"  rows="4" required="required">' .
                    '</textarea></div>',
                'fields'=> apply_filters('comment_form_default_fields', $fields)

            );

            comment_form($args);
        ?>


</div><!-- #comments -->

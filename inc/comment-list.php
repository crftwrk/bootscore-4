<?php




// Comments
function bootscore_reply() {

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bootscore_reply' );




// Comments
if ( ! function_exists( 'bootscore_comment' ) ) :
    /**
     * Template for comments and pingbacks.
     *
     * Used as a callback by wp_list_comments() for displaying the comments.
     */
    function bootscore_comment( $comment, $args, $depth ) {
       // $GLOBALS['comment'] = $comment;

        if ( 'pingback' == $comment->comment_type || 'trackback' == $comment->comment_type ) : ?>

            <li id="comment-<?php comment_ID(); ?>" <?php comment_class( 'media' ); ?>>
            <div class="comment-body">
                <?php _e( 'Pingback:', 'bootscore' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( 'Edit', 'bootscore' ), '<span class="edit-link">', '</span>' ); ?>
            </div>

        <?php else : ?>

        <li id="comment-<?php comment_ID(); ?>" <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?>>
            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body media my-3">
                <a class="mr-3" href="#">
                    <?php if ( 0 != $args['avatar_size'] ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
                </a>

                <div class="media-body p-3 rounded bg-light">
                    <div class="media-body-wrap">


                        <div class="mt-0"><?php printf( __( '%s <span class="says d-none">says:</span>', 'bootscore' ), sprintf( '<h3 class="">%s</h3>', get_comment_author_link() ) ); ?></div>
                            <small><div class="comment-meta text-secondary">
                                <!--<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">-->
                                    <time datetime="<?php comment_time( 'c' ); ?>">
                                        <?php printf( _x( '%1$s at %2$s', '1: date, 2: time', 'bootscore' ), get_comment_date(), get_comment_time() ); ?>
                                    </time>
                                <!--</a>-->
                                <?php edit_comment_link( __( 'Edit', 'bootscore' ), '<span class="edit-link">', '</span>' ); ?>
                        </div></small>


                        <?php if ( '0' == $comment->comment_approved ) : ?>
                            <p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'bootscore' ); ?></p>
                        <?php endif; ?>

                        <div class="comment-content card-block">
                            <?php comment_text(); ?>
                        </div><!-- .comment-content -->

                        <?php comment_reply_link(
                            array_merge(
                                $args, array(
                                    'add_below' => 'div-comment',
                                    'depth' 	=> $depth,
                                    'max_depth' => $args['max_depth'],
                                    'before' 	=> '<footer class="reply comment-reply">',
                                    'after' 	=> '</footer><!-- .reply -->'
                                )
                            )
                        ); ?>

                    </div>
                </div><!-- .media-body -->

            </article><!-- .comment-body -->

            <?php
        endif;
    }
endif; // ends check for bootscore_comment()



// Comment Button
/*function awesome_comment_form_submit_button($button) {
	$button =
		'<input name="submit" type="submit" class="btn btn-outline-primary" tabindex="5" id="commentsubmit" />' .
		get_comment_id_fields();
	return $button;
}
add_filter('comment_form_submit_button', 'awesome_comment_form_submit_button');*/
// Comment Button End


// h2 Reply Title
add_filter( 'comment_form_defaults', 'custom_reply_title' );
function custom_reply_title( $defaults ){
  $defaults['title_reply_before'] = '<h2 id="reply-title">';
  $defaults['title_reply_after'] = '</h2>';
  return $defaults;
}
// h2 Reply Title End





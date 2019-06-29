<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *滋滋滋
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
/**/

		comment_form();

		if ( have_comments() ) : ?>
			<ol class="comment-list" style="color:yellow">
				<?php
					wp_list_comments( array(
						'avatar_size' => 30,
						'style'       => 'ol',
						'short_ping'  => true,
						'reply_text'  => twentyseventeen_get_svg( array( 'icon' => 'mail-reply' ) ) . __( 'Reply', 'twentyseventeen' ),
					) );
				?>
			</ol>

			<!--评论分页-->
			<?php the_comments_pagination( array(
				'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous', 'twentyseventeen' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
			) );
		endif; //  Check for have_comments(). 


		// 评论关闭的提示
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

			<p class="no-comments"><?php _e( 'Comments are closed.', 'twentyseventeen' ); ?></p>
		<?php endif;?>

</div><!-- #comments -->

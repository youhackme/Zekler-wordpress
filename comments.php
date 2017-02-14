<?php
if ( post_password_required() ) {
	return;
}

$args = [
	//'comment_field'        => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea></p>',
	'comment_field'       => '<div class="form-group"><label for="comment">' . _x( 'Your Comment',
			'noun' ) . '</label><textarea class="form-control" name="comment"  id="comment" rows="3" placeholder="Have something to say?"></textarea></div><div class="checkbox pull-left"><label class="text-muted"><input type="checkbox"> Notify me of replies</label></div>',
	'action'              => site_url( '/wp-comments-post.php' ),
	'id_form'             => 'commentform',
	'id_submit'           => 'submit',
	'class_form'          => 'comment-form',
	'class_submit'        => 'submit',
	'name_submit'         => 'submit',
	'title_reply'         => __( '' ),
	'title_reply_to'      => __( '' ),
	'title_reply_before'  => '<h3 id="reply-title" class="comment-reply-title">',
	'title_reply_after'   => '</h3>',
	'cancel_reply_before' => ' <small>',
	'cancel_reply_after'  => '</small>',
	'cancel_reply_link'   => __( 'Cancel' ),
	'label_submit'        => __( 'Answer' ),
	'submit_button'       => '<input name="%1$s" type="submit" id="%2$s" class="%3$s btn btn-primary btn-outline pull-right col-md-3" value="%4$s" />',
	'submit_field'        => '<p class="form-submit">%1$s %2$s</p>',
	'format'              => 'xhtml',
];
?>

<!--
<div class="comments-block">
   <?php //comment_form( $args ); ?>
</div>
-->
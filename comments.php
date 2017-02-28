<?php
if ( post_password_required() ) {
	return;
}

$args = [
	'fields'              => [
		'author' => '<div class="form-group comment-form-author">
                <label for="author">Name <span class="required">*</span></label>
                <input id="author" class="form-control" name="author" type="text" value="" size="30" maxlength="245" aria-required=\'true\'
                        required=\'required\'/>
            </div>',
		'email'  => '<div class=" form-group comment-form-email">
                <label for="email">Email <span class="required">*</span></label>
                <input id="email" class="form-control" name="email" type="text" value="" size="30" maxlength="100"
                       aria-describedby="email-notes" aria-required=\'true\' required=\'required\'/>
            </div>',
		'url'    => '<div class="form-group comment-form-url">
                <label for="url">Website</label>
                <input id="url" class="form-control" name="url" type="text" value="" size="30" maxlength="200"/>
            </div>',
	],
	'comment_field'       => '<div class="form-group"><label for="comment">' . _x( 'Your Comment',
			'noun' ) . '</label><textarea class="form-control" name="comment"  id="comment" rows="3" placeholder="Have something to say?"></textarea></div>',
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


<div class="comments-block">
	<?php comment_form( $args ); ?>
</div>

<div class="container container-small share-widget">
    <main class="content col-md-12">

        <!--
<div class="container share-widget">
   <main class="content col-md-8 bigger-col-md-8">
   -->
        <header>
            <div class="row meta-block">
                <div class="col-md-1">
                    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/build/img/hyder.jpeg"
                         alt="profile picture" class="img-circle">
                </div>
                <div class="col-md-11">
                    <p class="meta-block__author-name">Hyder Abbass</p>
                    <p class="meta-block__other text-muted">
                        <time datetime="<?php the_modified_time( 'Y-m-d' ); ?>"><span><?php the_modified_time( 'F jS, Y' ); ?>
</span></time>
                        <span class="middotDivider"></span>
                        <span>Windows</span>
                        <span class="middotDivider"></span>
                        <span><i class=" icon-comment-o" aria-hidden="true"></i> <?php comments_number( 0, 1,
								'%' ); ?></span>
                        <span class="middotDivider"></span>
                        <span><i class=" icon-view" aria-hidden="true"></i> 2k</span>
                    </p>
                </div>
            </div>
        </header>
        <article class="article-block">
			<?php

			the_title( '<h1 class="entry-title">', '</h1>' );

			the_content( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'zekler' ),
				get_the_title()
			) );
			$postID = get_the_ID();
			?>
        </article>
        <footer>
            <!-- <div class="row">
				 <div class="tags-block">
					 <a href="#">Windows</a>
					 <a href="#">Facebook</a>
					 <a href="#">Twitter</a>
				 </div>
			 </div>-->
            <hr>
            <div class="row">
                <div class="biography-block">
                    <div class="col-md-4">
                        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/build/img/hyder.jpeg"
                             alt="author photo" class="img-circle">
                        <span class="text-muted">Hyder Abbass</span>
                    </div>

                </div>
            </div>
        </footer>
    </main>
	<?php //get_sidebar(); ?>
</div>
<div class="container-fluid darker-bg">
    <div class="container">
        <div class="row">
            <div class="related-main-block">
				<?php echo do_shortcode( '[manual_related_posts]' ); ?>
            </div>
        </div>


        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h4>Responses:</h4>


				<?php
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>

				<?php
				$args = [
					'status'  => 'approve',
					'post_id' => $postID,
					'type'    => 'comment',
				];


				// The Query
				$comments_query = new WP_Comment_Query;
				$comments       = $comments_query->query( $args );

				// Comment Loop
				if ( $comments ) {
					foreach ( $comments as $comment ) {
						?>

                        <div class="response-block response-id-<?php echo $comment->comment_ID; ?>">
                            <div class="row">
                                <div class="response-block__wrapper">
                                    <div class="response-block__meta">
                                        <div class="col-md-1">
                                            <img width="40" height="40"
                                                 src="<?php echo get_avatar_url( $comment->comment_author_email,
												     [ 'size' => '40' ] ); ?>"
                                                 alt="<?php echo $comment->comment_author; ?>'s photo"
                                                 class="img-circle">
                                        </div>
                                        <div class="col-md-11">
                                            <p class="response-block__author-name">  <?php echo $comment->comment_author; ?></p>
                                            <p class="response-block__other text-muted">
                                                <span>
                                                    <small>
                                                        <?php echo ( new DateTime( $comment->comment_date ) )->format( 'l, F jS, Y' ); ?>
                                                    </small>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="response-block__content">
										<?php echo $comment->comment_content; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php

					}
				}
				?>


            </div>
        </div>

    </div>
</div>
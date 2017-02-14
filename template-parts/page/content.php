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
<article class="article-block">

	<?php

	the_title( '<h1 class="entry-title">', '</h1>' );

	the_content( sprintf(
		__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
		get_the_title()
	) );

	the_content( sprintf(
		__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
		get_the_title()
	) );

	the_content( sprintf(
		__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
		get_the_title()
	) );

	the_content( sprintf(
		__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
		get_the_title()
	) );

	the_content( sprintf(
		__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
		get_the_title()
	) );
	$postID = get_the_ID();
	?>

</article>
<footer>
    <div class="row">
        <div class="tags-block">
            <a href="#">Windows</a>
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
        </div>
    </div>
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


<div class="share-block text-center">
    <div class="share-block__label text-muted">Share</div>
    <div class="share-block__icons">
        <div class="share-block__upvote">
            <a href="#">
                <i class=" icon-angle-up remove-padding" aria-hidden="true"></i>
                <i title="Show some love if you enjoyed this article"
                   class=" icon-heart-o remove-padding"
                   aria-hidden="true"></i>
                <div class="text-muted">24</div>
            </a>
        </div>
        <div>
            <a title="Share on Twitter" href="#">
                <i class=" icon-twitter icon-outline text-muted" aria-label="true"></i>
            </a>
            <div class="text-muted">10</div>
        </div>
        <div>
            <a title="Share on Facebook" href="#">
                <i class=" icon-facebook icon-outline text-muted" aria-hidden="true"></i>

            </a>
            <div class="text-muted">15</div>
        </div>

    </div>

</div>



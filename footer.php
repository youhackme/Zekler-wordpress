<?php
global $post;
$postId = $post->ID;

?>
<div class="share-block text-center">
    <div class="share-block__label text-muted">Share</div>
    <div class="share-block__icons">
        <!--
        <div class="share-block__upvote">
            <a href="#">
                <i class=" icon-angle-up remove-padding" aria-hidden="true"></i>
                <i title="Show some love if you enjoyed this article"
                   class=" icon-heart-o remove-padding"
                   aria-hidden="true"></i>
                <div class="text-muted"><?php echo $postId; ?></div>
            </a>
        </div>
       -->
        <div>
            <a title="Share this on Twitter"
               href="https://twitter.com/intent/tweet?text=<?php echo urlencode( get_the_title( $postId ) ) ?>&amp;url=<?php echo urlencode( get_permalink( $postId ) ); ?>">
                <i class=" icon-twitter icon-outline text-muted" aria-label="true"></i>
            </a>
            <!--            <div class="text-muted">10</div>-->
        </div>
        <div>
            <a title="Share on Facebook"
               href="http://www.facebook.com/sharer.php?u=<?php echo urlencode( get_permalink( $postId ) ); ?>&t=<?php echo urlencode( get_the_title( $postId ) ) ?>"
               target="blank">
                <i class=" icon-facebook icon-outline text-muted" aria-hidden="true"></i>
            </a>
            <!--            <div class="text-muted">15</div>-->
        </div>

    </div>
</div>


<footer class="footer footer-block">
    <div class="container-fluid text-center">
        <p class="text-muted">Copyright © <?php echo date( 'Y' ); ?> Zekler. All Rights Reserved. </p>
        <ul class="list-inline">
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Send us your favorite tips</a></li>
            <li><a href="#">Newletter</a></li>
            <li><a href="#">RSS</a></li>
        </ul>
    </div>
</footer>

<?php wp_footer(); ?>

<?php
if ( is_front_page() ) { ?>
    <script>
        $(function () {
            share.init();
            search.init();
        })
    </script>
	<?php
} else { ?>
    <script>
        $(function () {
            share.init({offset: 50});
            search.init();
        })
    </script>
	<?php
}
?>
</body>
</html>
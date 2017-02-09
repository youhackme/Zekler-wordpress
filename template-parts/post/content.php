<div class="container share-widget">

    <main class="content col-md-8 bigger-col-md-8">
        <header>
            <div class="row meta-block">
                <div class="col-md-1">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/build/img/hyder.jpeg"
                         alt="profile picture" class="img-circle">
                </div>
                <div class="col-md-11">
                    <p class="meta-block__author-name">Hyder Abbass</p>
                    <p class="meta-block__other text-muted">
                        <time datetime="<?php the_modified_time('Y-m-d');?>"><span><?php the_modified_time('F jS, Y');?>
</span></time>
                        <span class="middotDivider"></span>
                        <span>Windows</span>
                        <span class="middotDivider"></span>
                        <span><i class=" icon-comment-o" aria-hidden="true"></i> <?php comments_number(0, 1,
                                '%'); ?></span>
                        <span class="middotDivider"></span>
                        <span><i class=" icon-view" aria-hidden="true"></i> 2k</span>
                    </p>
                </div>
            </div>
        </header>
        <article class="article-block">
            <?php

            the_title( '<h1 class="entry-title">', '</h1>' );

            the_content(sprintf(
                __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen'),
                get_the_title()
            ));
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
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/build/img/hyder.jpeg"
                             alt="author photo" class="img-circle">
                        <span class="text-muted">Hyder Abbass</span>
                    </div>

                </div>
            </div>
        </footer>
    </main>
    <aside class="sidebar-block col-md-4 smaller-col-md-4">

        <div class="sidebar-block__ads">
            <img src="https://placehold.it/300x250" class="img-responsive" alt="Picture"/>
        </div>

        <div class="sidebar-block__popular">
            <h5>
                <span class="label label-primary">MOST POPULAR</span>
            </h5>
            <div class="row">

                <div class="col-md-12 remove-3-percent">
                    <article class="related-block--sidebar">
                        <img src="https://placehold.it/600x500" class="img-responsive" alt="Picture"/>
                        <div class="related-block__article-detail">
                            <a href="#">
                                <h5 class="related-block__title">
                                    Another Post on Facebook
                                </h5>
                            </a>
                        </div>
                    </article>

                    <article class="related-block--sidebar">
                        <img src="https://placehold.it/600x500" class="img-responsive" alt="Picture"/>
                        <div class="related-block__article-detail">
                            <a href="#">
                                <h5 class="related-block__title">
                                    Another Post on Facebook
                                </h5>
                            </a>
                        </div>
                    </article>

                    <article class="related-block--sidebar">
                        <img src="https://placehold.it/600x500" class="img-responsive" alt="Picture"/>
                        <div class="related-block__article-detail">
                            <a href="#">
                                <h5 class="related-block__title">
                                    Another Post on Facebook
                                </h5>
                            </a>
                        </div>
                    </article>

                    <article class="related-block--sidebar">
                        <img src="https://placehold.it/600x500" class="img-responsive" alt="Picture"/>
                        <div class="related-block__article-detail">
                            <a href="#">
                                <h5 class="related-block__title">
                                    Another Post on Facebook
                                </h5>
                            </a>
                        </div>
                    </article>

                    <article class="related-block--sidebar">
                        <img src="https://placehold.it/600x500" class="img-responsive" alt="Picture"/>
                        <div class="related-block__article-detail">
                            <a href="#">
                                <h5 class="related-block__title">
                                    Another Post on Facebook
                                </h5>
                            </a>
                        </div>
                    </article>
                </div>

            </div>
        </div>
    </aside>

</div>
<div class="container-fluid darker-bg">
    <div class="container">
        <div class="row">
            <div class="related-main-block">
                <div class="col-md-4">
                    <article class="related-block--default">
                        <img src="https://placehold.it/720x250" class="img-responsive" alt="Picture"/>
                        <div class="related-block__article-detail">
                            <a href="#">
                                <div class="class-muted related-block__tag">
                                    Also tagged <span class="tag--windows">Windows</span>
                                </div>
                                <h5 class="related-block__title">
                                    How to become a super user on Windows 10
                                </h5>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="related-block--default">
                        <img src="https://placehold.it/720x250" class="img-responsive" alt="Picture"/>
                        <div class="related-block__article-detail">
                            <a href="#">
                                <div class="class-muted related-block__tag">
                                    Also tagged <span class="tag--other">Email</span>
                                </div>
                                <h5 class="related-block__title">
                                    Another Post on Facebook
                                </h5>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="related-block--default">
                        <img src="https://placehold.it/720x250" class="img-responsive" alt="Picture"/>
                        <div class="related-block__article-detail">
                            <a href="#">
                                <div class="class-muted related-block__tag">
                                    Also tagged <span class="tag--facebook">Email</span>
                                </div>
                                <h5 class="related-block__title">
                                    How to login on Facebook
                                </h5>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </div>


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


        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="comments-block">
                    <form method="post">
                        <div class="form-group">
                            <label for="comment">Your comment:</label>
                            <textarea class="form-control" id="comment" rows="3"
                                      placeholder="Have something to say?">
                            </textarea>
                        </div>

                        <div class="checkbox pull-left">
                            <label class="text-muted">
                                <input type="checkbox"> Notify me of replies
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-outline pull-right col-md-3 ">Answer
                        </button>
                    </form>

                </div>

                <div class="response-block">
                    <div class="row">
                        <div class="response-block__wrapper">
                            <div class="response-block__meta">
                                <div class="col-md-1">
                                    <img src="<?php echo get_bloginfo('template_directory'); ?>/build/img/hyder.jpeg"
                                         alt="Author photo" class="img-circle">
                                </div>
                                <div class="col-md-11">
                                    <p class="response-block__author-name">Hyder Abbass</p>
                                    <p class="response-block__other text-muted">
                                        <span><small>January 5, 2017</small></span>
                                    </p>
                                </div>
                            </div>
                            <div class="response-block__content">
                                <p>
                                    Pellentesque auctor hendrerit lorem, nec fermentum quam congue et. Curabitur
                                    faucibus congue nisl et vehicula.
                                </p>
                                <p>
                                    Pellentesque auctor hendrerit lorem, nec fermentum quam congue et. Curabitur
                                    faucibus congue nisl et vehicula. Pellentesque auctor hendrerit lorem, nec
                                    fermentum
                                    quam congue et. Curabitur
                                    faucibus congue nisl et vehicula.
                                </p>
                                <p>
                                    Curabitur
                                    faucibus congue nisl et vehicula. Pellentesque auctor hendrerit lorem, nec
                                    fermentum
                                    quam congue et. Curabitur
                                    faucibus congue nisl et vehicula.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="response-block">
                    <div class="row">
                        <div class="response-block__wrapper">
                            <div class="response-block__meta">
                                <div class="col-md-1">
                                    <img src="<?php echo get_bloginfo('template_directory'); ?>/build/img/hyder.jpeg"
                                         alt="Author Photo" class="img-circle">
                                </div>
                                <div class="col-md-11">
                                    <p class="response-block__author-name">Hyder Abbass</p>
                                    <p class="response-block__other text-muted">
                                        <span><small>January 5, 2017</small></span>
                                    </p>
                                </div>
                            </div>
                            <div class="response-block__content">
                                <p>
                                    Pellentesque auctor hendrerit lorem, nec fermentum quam congue et. Curabitur
                                    faucibus congue nisl et vehicula.
                                </p>
                                <p>
                                    Pellentesque auctor hendrerit lorem, nec fermentum quam congue et. Curabitur
                                    faucibus congue nisl et vehicula. Pellentesque auctor hendrerit lorem, nec
                                    fermentum
                                    quam congue et. Curabitur
                                    faucibus congue nisl et vehicula.
                                </p>
                                <p>
                                    Curabitur
                                    faucibus congue nisl et vehicula. Pellentesque auctor hendrerit lorem, nec
                                    fermentum
                                    quam congue et. Curabitur
                                    faucibus congue nisl et vehicula.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="response-block">
                    <div class="row">

                        <div class="response-block__wrapper">
                            <div class="response-block__meta">
                                <div class="col-md-1">
                                    <img src="<?php echo get_bloginfo('template_directory'); ?>/build/img/hyder.jpeg"
                                         alt="Author Photo" class="img-circle">
                                </div>
                                <div class="col-md-11">
                                    <p class="response-block__author-name">Hyder Abbass</p>
                                    <p class="response-block__other text-muted">
                                        <span><small>January 5, 2017</small></span>
                                    </p>
                                </div>
                            </div>
                            <div class="response-block__content">
                                <p>
                                    Pellentesque auctor hendrerit lorem, nec fermentum quam congue et. Curabitur
                                    faucibus congue nisl et vehicula.
                                </p>
                                <p>
                                    Pellentesque auctor hendrerit lorem, nec fermentum quam congue et. Curabitur
                                    faucibus congue nisl et vehicula. Pellentesque auctor hendrerit lorem, nec
                                    fermentum
                                    quam congue et. Curabitur
                                    faucibus congue nisl et vehicula.
                                </p>
                                <p>
                                    Curabitur
                                    faucibus congue nisl et vehicula. Pellentesque auctor hendrerit lorem, nec
                                    fermentum
                                    quam congue et. Curabitur
                                    faucibus congue nisl et vehicula.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zekler minimalist theme</title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>
<body>

<header class="container-fluid navigation-block">
    <div class="row">
        <div class="logo-block col-md-2 col-md-offset-1">
            <a href="https://darktips.com">
                <img class="img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/build/img/logo.png"
                     alt="darktips.com logo">
            </a>
        </div>
        <div class="col-md-9">
            <div class="search-block pull-right">
                <form method="post">
                    <label for="search">
                        <span class=" icon-search" aria-hidden="true"> </span>
                    </label>
                    <input id="search" name="search" placeholder="Search.." autocomplete="off">
                </form>

            </div>
        </div>
    </div>
    <hr>
</header>


<div class="container content">
    <div class="intro-block">
        <h1 class="text-center">Explore our latest tips & tricks</h1>
        <div class="intro-block__description text-center">
            <p class="text-muted">Become a power user of Facebook, Mac, Windows 10 & More!</p>
        </div>
    </div>
    <main>

        <div class="row articles-block">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    ?>
                    <h2><?php the_title(); ?></h2>
                    <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
                    <section class="col-md-4 articles-block__tip">
                        <article>
                            <a href="#"><img class="img-responsive" alt="photo"
                                             src="<?php echo get_bloginfo('template_directory'); ?>/build/img/1.jpg"></a>
                            <h4><a href="#"><?php the_title(); ?></a>
                                <small><a href="#" class="tag--windows">Windows</a></small>
                            </h4>
                        </article>
                        <footer class="meta">

                            <div class="articles-block__totallove">
                                <span class=" icon-heart-o" aria-hidden="true"></span>15
                            </div>
                            <div class="articles-block__totalcomments">
                                <span class=" icon-comment-o" aria-hidden="true"></span>10
                            </div>
                            <div class="articles-block__author">
                                <span>By Hyder Bangash</span>
                            </div>
                        </footer>
                    </section>
                    <?php
                }
            }
            ?>
        </div>

        <div class="row articles-block">
            <section class="col-md-4 articles-block__tip">
                <article>
                    <a href="#"><img class="img-responsive" alt="photo"
                                     src="<?php echo get_bloginfo('template_directory'); ?>/build/img/1.jpg"></a>
                    <h4><a href="#">How to take a screenshot on Windows 10</a>
                        <small><a href="#" class="tag--windows">Windows</a></small>
                    </h4>
                </article>
                <footer class="meta">

                    <div class="articles-block__totallove">
                        <span class=" icon-heart-o" aria-hidden="true"></span>15
                    </div>
                    <div class="articles-block__totalcomments">
                        <span class=" icon-comment-o" aria-hidden="true"></span>10
                    </div>


                    <div class="articles-block__author">
                        <span>By Hyder Bangash</span>
                    </div>
                </footer>
            </section>
            <section class="col-md-4 articles-block__tip">
                <article>
                    <a href="#"><img class="img-responsive" alt="photo"
                                     src="<?php echo get_bloginfo('template_directory'); ?>/build/img/2.jpg"></a>
                    <h4><a href="#">CC vs BCC: Learn the difference when sending an email</a>
                        <small><a href="#" class="tag--facebook">Email</a></small>
                    </h4>
                </article>
                <footer class="meta">

                    <div class="articles-block__totallove">
                        <span class=" icon-heart-o" aria-hidden="true"></span>15
                    </div>
                    <div class="articles-block__totalcomments">
                        <span class=" icon-comment-o" aria-hidden="true"></span>10
                    </div>


                    <div class="articles-block__author">
                        <span>By Hyder Bangash</span>
                    </div>
                </footer>
            </section>
            <section class="col-md-4 articles-block__tip">
                <article>
                    <a href="#"><img class="img-responsive" alt="photo"
                                     src="<?php echo get_bloginfo('template_directory'); ?>/build/img/3.jpg"></a>
                    <h4><a href="#">How to delete friends on Facebook in Bulk </a>
                        <small><a href="#" class="tag--other">Facebook</a></small>
                    </h4>
                </article>
                <footer class="meta">
                    <div class="articles-block__totallove">
                        <span class=" icon-heart-o" aria-hidden="true"></span>15
                    </div>

                    <div class="articles-block__totalcomments">
                        <span class=" icon-comment-o" aria-hidden="true"></span>10
                    </div>

                    <div class="articles-block__author">
                        <span>By Hyder Bangash</span>
                    </div>
                </footer>
            </section>
        </div>
        <div class="row articles-block">
            <section class="col-md-4 articles-block__tip">
                <article>
                    <a href="#"><img class="img-responsive" alt="photo"
                                     src="<?php echo get_bloginfo('template_directory'); ?>/build/img/1.jpg"></a>
                    <h4><a href="#">How to take a screenshot on Windows 10</a>
                        <small><a href="#" class="tag--windows">Windows</a></small>
                    </h4>
                </article>
                <footer class="meta">

                    <div class="articles-block__totallove">
                        <span class=" icon-heart-o" aria-hidden="true"></span>15
                    </div>
                    <div class="articles-block__totalcomments">
                        <span class=" icon-comment-o" aria-hidden="true"></span>10
                    </div>


                    <div class="articles-block__author">
                        <span>By Hyder Bangash</span>
                    </div>
                </footer>
            </section>
            <section class="col-md-4 articles-block__tip">
                <article>
                    <a href="#"><img class="img-responsive" alt="photo"
                                     src="<?php echo get_bloginfo('template_directory'); ?>/build/img/2.jpg"></a>
                    <h4><a href="#">CC vs BCC: Learn the difference when sending an email</a>
                        <small><a href="#" class="tag--facebook">Email</a></small>
                    </h4>
                </article>
                <footer class="meta">

                    <div class="articles-block__totallove">
                        <span class=" icon-heart-o" aria-hidden="true"></span>15
                    </div>
                    <div class="articles-block__totalcomments">
                        <span class=" icon-comment-o" aria-hidden="true"></span>10
                    </div>


                    <div class="articles-block__author">
                        <span>By Hyder Bangash</span>
                    </div>
                </footer>
            </section>
            <section class="col-md-4 articles-block__tip">
                <article>
                    <a href="#"><img class="img-responsive" alt="photo"
                                     src="<?php echo get_bloginfo('template_directory'); ?>/build/img/3.jpg"></a>
                    <h4><a href="#">How to delete friends on Facebook in Bulk </a>
                        <small><a href="#" class="tag--other">Facebook</a></small>
                    </h4>
                </article>
                <footer class="meta">

                    <div class="articles-block__totallove">
                        <span class=" icon-heart-o" aria-hidden="true"></span>15
                    </div>

                    <div class="articles-block__totalcomments">
                        <span class=" icon-comment-o" aria-hidden="true"></span>10
                    </div>

                    <div class="articles-block__author">
                        <span>By Hyder Bangash</span>
                    </div>

                </footer>
            </section>
        </div>
    </main>

    <div class="container">
        <div class="row text-center load-more-block">
            <a class="btn btn-default btn-lg btn-outline">Show Me More Tips</a>
        </div>
    </div>
</div>


<footer class="footer footer-block">
    <div class="container-fluid text-center">
        <p class="text-muted">Copyright © 2017 Zekler. All Rights Reserved. </p>
        <ul class="list-inline">
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Send us your favorite tips</a></li>
            <li><a href="#">Newletter</a></li>
            <li><a href="#">RSS</a></li>
        </ul>
    </div>
</footer>
<!-- <script src="build/js/all.js"></script> -->

<?php wp_footer(); ?>

<script>
    $(function () {
        share.init();
        search.init();
    })
</script>

</body>
</html>
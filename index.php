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

        <?php query_posts('posts_per_page=12'); ?>
        <?php $totalPost = 0; ?>
        <?php while (have_posts()) :
            the_post(); ?>
            <?php $totalPost++; ?>
            <?php if ($totalPost % 3 == 0) { ?>
            <div class="row articles-block">
        <?php } ?>
            <section class="col-md-4 articles-block__tip">
                <article>
                    <a href="#">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('medium', ['class' => 'img-responsive']);
                        } ?>
                    </a>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php
                        $categories = get_the_category();
                        $slug = $categories[0]->slug;
                        $catName = $categories[0]->cat_name;
                        ?>
                        <small>
                            <span class="tag--<?php echo $slug; ?>"> <?php
                                echo $catName;
                                ?>
                            </span>
                        </small>
                    </h4>
                </article>
                <footer class="meta">
                    <div class="articles-block__totallove">
                        <span class=" icon-heart-o" aria-hidden="true"></span>15
                    </div>
                    <div class="articles-block__totalcomments">
                        <span class=" icon-comment-o" aria-hidden="true"></span> <?php comments_number(0, 1, '%'); ?>
                    </div>
                    <div class="articles-block__author">
                        <span>By <?php the_author_posts_link(); ?></span>
                    </div>
                </footer>
            </section>

            <?php if ($totalPost % 3 == 0) { ?>
            </div>
        <?php } ?>

        <?php endwhile; ?>
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
<?php
get_header();
?>
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
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('featured-image', ['class' => 'img-responsive']);
                            } ?>

                        <h4>

                                <?php the_title(); ?>

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
                        </a>
                    </article>
                    <footer class="meta">
                        <div class="articles-block__totallove">
                            <span class=" icon-heart-o" aria-hidden="true"></span>15
                        </div>
                        <div class="articles-block__totalcomments">
                            <span class=" icon-comment-o" aria-hidden="true"></span> <?php comments_number(0, 1,
                                '%'); ?>
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

        </main>
    <!--<div class="container">
        <div class="row text-center load-more-block">
            <a class="btn btn-default btn-lg btn-outline">Show Me More Tips</a>
        </div>
    </div>-->
    </div>

<?php
get_footer();
?>
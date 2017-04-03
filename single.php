<?php
get_header();

/* Start the Loop */
while (have_posts()) : the_post();
    get_template_part('template-parts/post/content');
    // If comments are open or we have at least one comment, load up the comment template.
endwhile; // End of the loop.
?>

<?php get_footer();
<?php
/**
 * The template for displaying all pages
 *
 */

get_header();
?>

    <div class="container container-small share-widget">
        <div class="content col-md-12">
	        <?php
	        while ( have_posts() ) : the_post();

		        get_template_part( 'template-parts/page/content' );

		        // If comments are open or we have at least one comment, load up the comment template.
		        if ( comments_open() || get_comments_number() ) :
			        comments_template();
		        endif;

	        endwhile; // End of the loop.
	        ?>
        </div>
    </div>


<?php get_footer();





<?php
/**
 * The template for displaying all single posts
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	if (is_product_category()) {
		get_template_part("template-parts/pages/category");
	} else {
		get_template_part( 'template-parts/content/content-page' );
	}
endwhile; // End of the loop.

get_footer();

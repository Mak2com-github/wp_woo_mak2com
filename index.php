<?php
/*
 * Index file
 */
get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <article <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="entry-meta">
                <span class="posted-on"><?php the_date(); ?></span>
                <span class="byline"> by <?php the_author(); ?></span>
            </div>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile;

    the_posts_pagination();

else :

    echo 'No posts found';

endif;

get_footer();

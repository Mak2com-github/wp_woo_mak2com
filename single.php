<?php
/*
 * For displaying all single posts
 */
get_header();
?>
<div id="main-content">
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class(); ?>>
                    <h1><?php the_title(); ?></h1>
                    <div class="entry-meta">
                        <span class="posted-on"><?php the_date(); ?></span>
                        <span class="byline"> by <?php the_author(); ?></span>
                    </div>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>

        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
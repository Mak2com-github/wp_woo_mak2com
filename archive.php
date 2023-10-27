<?php
/*
 * For Archive pages
 */
get_header();
?>
<div id="main-content">
    <div class="container">
        <header class="page-header">
            <h1><?php the_archive_title(); ?></h1>
            <?php the_archive_description('<div class="taxonomy-description">', '</div>'); ?>
        </header>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-meta">
                        <span class="posted-on"><?php the_date(); ?></span>
                        <span class="byline"> by <?php the_author(); ?></span>
                    </div>
                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>

            <?php the_posts_pagination(); ?>

        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>

<?php get_header(); ?>

<main>

    <?php while (have_posts()) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <p><?php the_time('F j, Y'); ?><?php _e('by', 'scratchstart'); ?><?php the_author(); ?></p>
        <?php the_content(); ?>

        <?php if (comments_open() || get_comments_number()) :
            comments_template();
        endif; ?>

    <?php endwhile; ?>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

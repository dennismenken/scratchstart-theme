<section class="no-results not-found">

    <header class="page-header">
        <h1 class="page-title">
            <?php _e('Nothing Found', 'your_theme'); ?>
        </h1>
    </header>

    <div class="page-content">
        <?php if (is_home() && current_user_can('publish_posts')) : ?>

            <p>
                <?php printf(
                /* translators: 1: link to WP admin new post page. */
                    __('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'scratchstart'),
                    esc_url(admin_url('post-new.php'))
                ); ?>
            </p>

        <?php elseif (is_search()) : ?>

            <p>
                <?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'scratchstart'); ?>
            </p>
            <?php get_search_form(); ?>

        <?php else : ?>

            <p>
                <?php _e('It seems we can’t find what you’re looking for. Perhaps searching can help.', 'scratchstart'); ?>
            </p>
            <?php get_search_form(); ?>

        <?php endif; ?>
    </div>

</section>

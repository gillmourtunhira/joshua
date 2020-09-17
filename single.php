<?php get_header(); ?>

<div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="single__layout">
                <div class="single__layout--content">
                    <div class="post__title">
                        <h3><?php the_title(); ?></h3>
                        <time><?php echo get_the_date('l F j, Y'); ?></time>
                    </div>
                    <div>
                        <?php the_post_thumbnail(); ?>
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="single__layout--sidebar">
                    <?php if (is_active_sidebar('posts-sidebar')) : ?>
                        <?php dynamic_sidebar('posts-sidebar'); ?>
                    <?php else : ?>
                        <!-- Time to add some widgets! -->
                    <?php endif; ?>
                </div>
            </div>

        <?php endwhile;
    else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

</div>

<?php get_footer(); ?>
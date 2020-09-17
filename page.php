<?php get_header(); ?>

<div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="page__layout">
                <div class="page__layout--title">
                    <h4><?php the_title(); ?></h4>
                </div>
                <div class="page__layout--content">
                    <div><?php the_content(); ?></div>
                </div>
            </div>

        <?php endwhile;
    else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

</div>

<?php get_footer(); ?>
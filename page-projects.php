<?php get_header(); ?>

<div class="container row">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <p><?php the_content(); ?></p>

        <?php endwhile;
    else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

</div>

<?php get_footer(); ?>
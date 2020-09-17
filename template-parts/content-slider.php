<?php

$args = array(
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 3,
    'category_name' => 'slider'
);

$query = new WP_Query($args);

?>

<div class="slides">
    <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
            <div class="slide">
                <?php the_post_thumbnail(); ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <div class="slider__desc">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </a>
            </div>
        <?php endwhile;
    else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>
<div class="slide__controls">
    <button id="prev-btn"><i class="material-icons">navigate_before</i></button>
    <button id="next-btn"><i class="material-icons">navigate_next</i></button>
</div>
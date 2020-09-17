<?php

$args = array(
    'post_type' => 'events',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 1,
    'slug' => 'event'
);

$query = new WP_Query($args);

?>
<div class="featured__events">
    <div class="featured__events--card">
        <div class="featured__events--heading">
            <h4>Featured Event</h4>
        </div>
        <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                <div>
                    <div class="featured__events--img">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </div>
                    <div class="featured__events--details">
                        <div class="featured__events--action">
                            <h5><?php the_title(); ?></h5>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endwhile;
        else : ?>
            <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>

    </div>
</div>
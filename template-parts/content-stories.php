<?php

$args = array(
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 4,
    'category_name' => 'stories'
);

$query = new WP_Query($args);
?>
<div>

    <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
            <article>
                <h4><?php the_category(', '); ?></h4>

                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <div class="post__img"><?php the_post_thumbnail('thumb'); ?></div>
                </a>
                <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
                <time><i class="material-icons">today</i><?php echo get_the_date('l F j, Y'); ?></time>
            </article>
        <?php endwhile;
    else : ?>
        <?php echo esc_html_e('Sorry, no posts found', 'generation') ?>
    <?php endif; ?>
</div>
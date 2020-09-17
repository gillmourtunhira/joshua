<?php
$args = array(
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 3,
    'category_name' => 'headlines'
);

$query = new WP_Query($args);
?>

<div class="ticker--topic">
    <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
            <div class="ticker--item">
                <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
            </div>
        <?php endwhile;
    else : ?>
        <?php echo esc_html_e('Sorry, no posts here', 'generation'); ?>
    <?php endif; ?>

</div>
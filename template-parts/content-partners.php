<?php

$args = array(
    'post_type' => 'partners',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 4,
    'slug' => 'partner'
);

$query = new WP_Query($args);

$pt = get_post_type_object('partners');
?>

<div class="sponsors--layout">
    <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
            <div class="marquee">
                <?php if (get_field('partner_logo')) : ?>
                    <img src="<?php the_field('partner_logo'); ?>" />
                <?php endif; ?>
            </div>
        <?php endwhile;
    else : ?>
        <?php echo esc_html_e('Sorry no posts available', 'generation'); ?>
    <?php endif; ?>
</div>
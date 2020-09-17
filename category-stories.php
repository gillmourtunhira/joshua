<?php

$args = array(
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 10,
    'category_name' => 'stories'
);

$query = new WP_Query($args);
?>

<?php get_header(); ?>

<div class="container">
    <div class="page__layout">
        <div class="page__layout--title">
            <h4><?php single_cat_title(__('', 'generation')); ?></h4>
        </div>
        <div class="page__layout--content">
            <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="content__wrapper">
                        <div class="content__wrapper--image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="content__wrapper--content">
                            <div class="title">
                                <?php the_title(); ?>
                            </div>
                            <div class="content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
            else : ?>
                <?php echo esc_html_e('Sorry, no posts available', 'generation'); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
<?php

$args = array(
    'post_type' => 'platforms',
    'orderby' => 'date',
    'order' => 'DESC',
    'slug' => 'region'
);

$query = new WP_Query($args);

$pt = get_post_type_object('platforms');

// Excerpt
$excerpt = get_the_excerpt();
$excerpt = substr($excerpt, 0, 100);
$result = substr($excerpt, 0, strrpos($excerpt, ' '));

?>


<?php get_header(); ?>

<div class="container">
    <div class="page__layout">
        <div class="page__layout--title">
            <h4><?php echo $pt->labels->name; ?></h4>
        </div>
        <div class="page__layout--content">
            <div class="events__wrapper platform__wrapper">
                <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

                        <div class="event__card region__card">
                            <div class="platform__card--title">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <i class="material-icons">language</i>
                                    <h3><?php the_title(); ?></h3>
                                </a>
                            </div>
                        </div>

                    <?php endwhile;
                else : ?>
                    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>
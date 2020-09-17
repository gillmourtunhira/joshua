<?php

$args = array(
    'post_type' => 'events',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 4,
    'slug' => 'event'
);

$query = new WP_Query($args);

$pt = get_post_type_object('events');

?>


<?php get_header(); ?>

<div class="container">
    <div class="page__layout">
        <div class="page__layout--title">
            <h4><?php echo $pt->labels->name; ?></h4>
        </div>
        <div class="page__layout--content">
            <div class="events__wrapper">
                <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

                        <div class="event__card">
                            <div class="event__card--img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="event__card--title">
                                <h3><?php the_title(); ?></h3>
                            </div>
                            <div class="event__card--time">
                                <div class="event--time"><i class="material-icons">watch_later</i>
                                    <?php if (get_field('time')) :  ?>
                                        <?php the_field('time'); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="event--date"><i class="material-icons">today</i>
                                    <?php if (get_field('date')) :  ?>
                                        <?php the_field('date'); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="event--venue"><i class="material-icons">location_on</i>
                                    <?php if (get_field('venue')) :  ?>
                                        <?php the_field('venue'); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="event__card--content">
                                <div class="excerpt"><?php echo $result; ?></div>
                                <div class="readmore">
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
    </div>

</div>

<?php get_footer(); ?>
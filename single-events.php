<?php get_header(); ?>

<div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="single__layout">
                <div class="single__layout--content">
                    <div class="post__title">
                        <h3><?php the_title(); ?></h3>
                    </div>
                    <div>
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="single__layout--sidebar">
                    <?php the_post_thumbnail(); ?>
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
                    <div class="event__redirect">
                        <a href="<?php if (get_field('link')) :  ?>
                                <?php the_field('link'); ?>
                            <?php endif; ?>" target="_blank">Visit Site</a>
                    </div>
                </div>
            </div>

        <?php endwhile;
    else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

</div>

<?php get_footer(); ?>
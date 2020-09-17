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
                    <div class="event__card--time platform__links">
                        <div class="event--time"><i class="fab fa-facebook"></i>
                            <?php if (get_field('facebook-link')) :  ?>
                                <a href="<?php the_field('facebook-link'); ?>">Like Us</a>
                            <?php endif; ?>
                        </div>
                        <div class="event--date"><i class="fab fa-twitter"></i>
                            <?php if (get_field('twitter-link')) :  ?>
                                <a href="<?php the_field('twitter-link'); ?>">Follow Us</a>
                            <?php endif; ?>
                        </div>
                        <div class="event--venue"><i class="fab fa-youtube"></i>
                            <?php if (get_field('youtube-link')) :  ?>
                                <a href="<?php the_field('youtube-link'); ?>">Our Channel</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="event__redirect">
                        <a href="<?php if (get_field('site-link')) :  ?>
                                <?php the_field('site-link'); ?>
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
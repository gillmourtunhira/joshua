<?php
$args = array(
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 1,
    'category_name' => 'impact'
);

$query = new WP_Query($args);
?>

<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
        <div class="featured__video">
            <?php the_content(); ?>
        </div>
        <div class="featured__video--desc">
            <h3>With Your Help</h3>
            <p><?php the_title(); ?></p>
            <a href="#">See more of our Impact</a>
        </div>
    <?php endwhile;
else : ?>
    <?php echo esc_html_e('Sorry, no posts here', 'generation'); ?>
<?php endif; ?>
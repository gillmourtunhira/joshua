<?php get_header(); ?>

<div class="container">
    <div class="page__layout">
        <div class="page__layout--title">
            <h4><?php single_cat_title(__('', 'generation')); ?></h4>
        </div>
        <div class="page__layout--content">
            <div class="platforms__wrapper">
                <?php
                $get_parent_cats = array(
                    'parent'        =>  get_queried_object_id(), //id of current category displayed 
                    'orderby'       => 'name',
                    'order'         => 'ASC',
                    'hide_empty'    =>  false // do not hide sub cats without posts
                );

                $all_categories = get_categories($get_parent_cats); //get parent categories 

                foreach ($all_categories as $single_category) {
                    //for each category, get the ID
                    $catID = $single_category->cat_ID;
                    $icon = 'language';

                    echo '<div>';
                    echo '<i class="material-icons"> ' . $icon . '</i>';
                    echo '<h3><a href=" ' . get_category_link($catID) . ' ">' . $single_category->name . '</a></h3>';
                    echo '</div>';

                    $get_children_cats = array(
                        'child_of' => $catID //get children of this parent using the catID variable from earlier
                    );
                    //end of categories logic 
                    $child_cats = get_categories($get_children_cats); //get children of parent category
                    echo '<ul class="children">';
                    foreach ($child_cats as $child_cat) {
                        //for each child category, get the ID
                        $childID = $child_cat->cat_ID;

                        //for each child category, give us the link and name
                        echo '<a href=" ' . get_category_link($childID) . ' ">' . $child_cat->name . '</a>';

                        echo '<ul class="post-title">';
                        echo    '<li>Hi World</li>';
                        echo '</ul>';
                    }
                    echo '</ul>';
                } //end of categories logic
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
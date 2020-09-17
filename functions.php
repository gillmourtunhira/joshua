<?php

// Enquing Scripts

function generation_theme_scripts()
{
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', array(), time(), 'all');
    wp_enqueue_style('material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons');
    wp_enqueue_script('facebook-js', 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2');
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
    wp_enqueue_script('slider-js', get_template_directory_uri() . '/assets/js/slider.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'generation_theme_scripts');

// Theme Support
function generation_theme_support()
{
    add_theme_support('automatic-feed-lnks');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('aside', 'image', 'gallery', 'video', 'audio', 'link', 'quote', 'status'));
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('custom-background');
    add_theme_support('custom-logo');
    add_theme_support('menus');

    add_image_size('thumb', 200, 200, TRUE);
}
add_action('after_setup_theme', 'generation_theme_support');

// Register Menus
function generation_theme_menus()
{
    register_nav_menus(array(
        'primary-menu' => __('Header Menu', 'generation'),
        'footer_menu' => __('Footer Menu', 'generation'),
        'mobile-menu' => __('Mobile Menu', 'generation')
    ));
}
add_action('init', 'generation_theme_menus');

//Excerpt
function generation_custom_excerpt_length()
{
    return 40;
}
add_filter('excerpt_length', 'generation_custom_excerpt_length', 999);

function generation_excerpt_more($more)
{
    $more = sprintf(
        '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink(get_the_ID()),
        __('...', 'generation')
    );

    return $more;
}
add_filter('excerpt_more', 'generation_excerpt_more');

// Sidebar Widgets
function generation_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Primary Sidebar', 'generation'),
        'id'            => 'posts-sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
    ));
}
add_action('widgets_init', 'generation_widgets_init');

// Custom Post Type
function generation_post_type()
{

    register_post_type('events', array(
        'labels' => array(
            'name' => 'Events',
            'singular_name' => 'Event'
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-tickets-alt',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    ));

    register_post_type('platforms', array(
        'labels' => array(
            'name' => 'Platforms',
            'singular_name' => 'Platform'
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-site-alt',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    ));

    register_post_type('partners', array(
        'labels' => array(
            'name' => 'Partners',
            'singular_name' => 'Partner'
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-universal-access-alt',
        'supports' => array('title', 'custom-fields')
    ));
}
add_action('init', 'generation_post_type');

// Custom Taxonomy
function generation_register_taxonomy_platform()
{
    $labels = array(
        'name'          => _x('Regions', 'generation'),
        'singular_name' => _x('Region', 'generation'),
        'search_items'  => __('Search Regions', 'generation'),
        'all_items'     => __('All Regions', 'generation'),
        'edit_item'     => __('Edit Region', 'generation'),
        'update_item'   => __('Update Region', 'generation'),
        'add_new_item'  => __('Add New Region', 'generation')
    );

    $args = array(
        'hierarchical'       => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'region']
    );
    register_taxonomy('platforms', array('platforms'), $args);
}
add_action('init', 'generation_register_taxonomy_platform');

function generation_register_taxonomy_events()
{
    $labels = array(
        'name'          => _x('Events', 'generation'),
        'singular_name' => _x('Event', 'generation'),
        'search_items'  => __('Search Events', 'generation'),
        'all_items'     => __('All Events', 'generation'),
        'edit_item'     => __('Edit Event', 'generation'),
        'update_item'   => __('Update Event', 'generation'),
        'add_new_item'  => __('Add New Event', 'generation'),
        'new_item_name'     => __('New Event Name')
    );

    $args = array(
        'hierarchical'       => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'event']
    );
    register_taxonomy('events', array('events'), $args);
}
add_action('init', 'generation_register_taxonomy_events');

function generation_register_taxonomy_partners()
{
    $labels = array(
        'name'          => _x('Partners', 'generation'),
        'singular_name' => _x('Partner', 'generation'),
        'search_items'  => __('Search Partners', 'generation'),
        'all_items'     => __('All Partners', 'generation'),
        'edit_item'     => __('Edit Partners', 'generation'),
        'update_item'   => __('Update Partners', 'generation'),
        'add_new_item'  => __('Add New Partner', 'generation'),
        'new_item_name'     => __('New Partner Name')
    );
    $args = array(
        'hierarchical'       => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'partner']
    );
    register_taxonomy('partners', array('partners'), $args);
}
add_action('init', 'generation_register_taxonomy_partners');

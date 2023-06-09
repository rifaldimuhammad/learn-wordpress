<?php
// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.

function wpbootstrap()
{
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/style.css');
    // all scripts
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js');
    // wp_enqueue_script('theme-script', get_template_directory_uri() . '/script.js');
};


function add_widget_Support()
{
    register_sidebar(array(
        'name'         => 'Sidebar',
        'id'           => 'sidebar',
        'after_widget' => '<div>',
        'before_title' => '<h2>',
        'after_title'  => '</h2>',
    ));
};

// Hook the widget initation and run our function
add_action('widgets_init', 'add_Widget_Support');

add_theme_support('post-thumbnails');
// Register a new navigation menu
function add_Main_Nav()
{
    register_nav_menu('header-menu', __('Header Menu'));
}
// Hook to the init action hook, run our navigation menu function


add_action('init', 'add_Main_Nav');
add_action('wp_enqueue_scripts', 'wpbootstrap');

<?php
// Enqueue Styles and Scripts
function scratchstart_enqueue_styles()
{
    wp_enqueue_style('scratchstart-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
}

add_action('wp_enqueue_scripts', 'scratchstart_enqueue_styles');

// Register Navigation Menus
function scratchstart_register_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu', 'scratchstart'),
            'footer-menu' => __('Footer Menu', 'scratchstart')
        )
    );
}

add_action('init', 'scratchstart_register_menus');

// Add Theme Support
function scratchstart_add_theme_support()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}

add_action('after_setup_theme', 'scratchstart_add_theme_support');

// Register Sidebars
function scratchstart_register_sidebars() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'scratchstart' ),
        'id' => 'main-sidebar',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'scratchstart' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ) );
}

add_action( 'widgets_init', 'scratchstart_register_sidebars' );


?>

<?php

// Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );

//Enqueue stylesheet
function wpcustomtheme_enqueue_styles() {
    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' );
}
add_action('wp_enqueue_scripts', 'wpcustomtheme_enqueue_styles');

//Add function to register our sidebars
function wpcustomtheme_widgets_unit() {
    register_sidebar([
        'name'          => esc_html__( 'Main Sidebar', 'wphierarchy' ),
        'id'            => 'main-sidebar',
        'description'   => esc_html__('Add widgets for main sidebar here', 'wphierarchy'),
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>'
    ]);
}
add_action( 'widgets_init', 'wpcustomtheme_widgets_unit');
?>
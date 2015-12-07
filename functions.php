<?php
/**
 * Child Theme Functions
 * based on _child https://github.com/ahmadawais/_child
 */


/*
 * Enqueue the parent style.css
 * twentyfifteen parent theme for politcast2016
 *
 */
add_action( 'wp_enqueue_scripts', 'aa_theme_enqueue_styles' );
function aa_theme_enqueue_styles() {

    // Parent style variable
    $parent_style = 'twentyfifteen';
    // Enqueue Parent theme's style
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    // Enqueue Child theme's style and ensure it is
    // Setting 'parent-style' as a dependency will ensure that the child theme stylesheet loads after it.
    wp_enqueue_style( 'politcast2016', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ) );
}

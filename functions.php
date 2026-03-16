<?php 

function unicorn() {
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'unicorn');

function mystyle() {
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_script(
        'main.js',
        get_template_directory_uri() . '/main.js',
        NULL,
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts','mystyle');
<?php

function theme_setup(){

    // HTML5対応
    add_theme_support('html5', ['style', 'script']);
}
add_action('after_setup_theme', 'theme_setup');

function theme_enqueue() {
    
    //
    wp_enqueue_style('skecth-style', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'));
}
add_action('wp_enqueue_scripts', 'theme_enqueue');
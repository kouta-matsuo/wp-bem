<?php


add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function wp_enqueue_scripus() {
wp_enqueue_script( 'fade', get_stylesheet_directory_uri() . '/js/fade.js', '', '', true );
}


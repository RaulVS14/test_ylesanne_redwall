<?php
function theme_scripts()
{
    wp_enqueue_script('aos-js', get_theme_file_uri('/js/aos.js'), NULL, '1.0', true);
    wp_enqueue_script('bootstrap-js', get_theme_file_uri('/js/bootstrap.min.js'), NULL, '1.0', true);
    wp_enqueue_script('script-js', get_theme_file_uri('/js/script.js'), NULL, '1.0', true);
    wp_enqueue_style('aos', get_theme_file_uri('/css/aos.css'));
    wp_enqueue_style('bootstrap', get_theme_file_uri('/css/bootstrap.min.css'));
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_scripts');
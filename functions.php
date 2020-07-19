<?php

function _teneats_assets()
{
    wp_enqueue_style('_teneats-stylesheet', get_template_directory_uri() . '/dist/css/bundle.css', array(), '1.0.0', 'all');

    wp_enqueue_script('_teneats-scripts', get_template_directory_uri() . '/dist/js/bundle.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', '_teneats_assets');
add_theme_support('post-thumbnails');

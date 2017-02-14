<?php

include_once('shortcodes.php');

add_theme_support('title-tag');
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');
add_image_size('grid-big', 601, 350, true);
add_image_size('grid-small', 290, 175, true);
add_image_size('grid-big-second', 450, 230, true);
add_image_size('grid-small-second', 316, 145, true);
add_image_size('block-thumb', 250, 220, true);
add_image_size('single-thumb', 798, 350, true);
add_image_size('relatedpost-thumb', 249, 120, true);
add_image_size('sidebar-thumb', 100, 80, true);
add_theme_support('html5',
    [
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption',
    ]);


add_action('wp_enqueue_scripts', 'ZeklerScript');

function ZeklerScript()
{
    wp_enqueue_style('zeklerStyle', get_bloginfo('template_directory') . '/build/css/style.min.css');
    wp_enqueue_script("Zeklerscript", get_bloginfo('template_directory') . '/build/js/all.min.js', false, '1', true);
}


add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3);

function remove_thumbnail_dimensions($html, $post_id, $post_image_id)
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}
<?php

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
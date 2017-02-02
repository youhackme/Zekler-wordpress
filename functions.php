<?php


function ZeklerScript()
{
    wp_enqueue_style('zeklerStyle', get_bloginfo('template_directory') . '/build/css/style.min.css');
    wp_enqueue_script("Zeklerscript", get_bloginfo('template_directory') . '/build/js/all.min.ssh hyder@163.172.90.99js', false, '1', true);
}

add_action('wp_enqueue_scripts', 'ZeklerScript');
<?php

include_once( 'shortcodes.php' );

add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );


add_image_size('featured-image', 800, 340, true);


add_action('init', 'remove_default_image_sizes');

function remove_default_image_sizes() {
	remove_image_size('thumbnail');
	remove_image_size('medium');
	remove_image_size('medium_large');
	remove_image_size('large');
}


add_theme_support( 'html5',
	[
		'comment-list',
		'comment-form',
		'search-form',
		'gallery',
		'caption',
	] );


add_action( 'wp_enqueue_scripts', 'ZeklerScript' );

function ZeklerScript() {
	wp_enqueue_style( 'zeklerStyle', get_bloginfo( 'template_directory' ) . '/build/css/style.min.css' );
	wp_enqueue_script( "Zeklerscript", get_bloginfo( 'template_directory' ) . '/build/js/all.min.js', false, '1',
		true );
}


function deregister_scripts(){
	wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'deregister_scripts' );



add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
	$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );

	return $html;
}
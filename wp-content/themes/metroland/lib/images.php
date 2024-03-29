<?php

/**
 * Set image sizes
 */
function origin_image_defaults() {
	update_option('image_default_align', 'center' );
	update_option('image_default_link_type', 'none' );
	update_option('image_default_size', 'large' );

	// Set image sizes
	add_image_size( 'Banner', 600, 450, true );
	add_image_size( 'Square', 400, 400, true );
	add_image_size( 'Thumb', 920, 604, true );
}
add_action( 'after_setup_theme', 'origin_image_defaults' );



/**
 * Remove image dimensions
 */
function origin_remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
add_filter( 'post_thumbnail_html', 'origin_remove_thumbnail_dimensions', 10, 3 );

/**
 * Remove image p tags
 */
function filter_ptags_on_images($content){
	return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');

/**
 * Allow SVG
 */
function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

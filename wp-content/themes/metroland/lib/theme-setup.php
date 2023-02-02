<?php

/**
 * Add theme support
 */
function origin_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
	add_theme_support( 'disable-custom-font-sizes' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
}
add_action('after_setup_theme','origin_theme_setup');
add_post_type_support( 'page', 'excerpt' );


/**
 * Tidy up head
 */
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'feed_links', 2  );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'wlwmanifest_link') ;
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );



/**
 * Add no-js class to body
 */

function origin_no_js_body_classes( $classes ) {
    return array_merge( $classes, array( 'no-js' ) );
}
add_filter( 'body_class', 'origin_no_js_body_classes', 20 );

/**
 * Tidy up body classes
 */
function origin_clean_body_classes( $classes ) {
	$allowed_classes = [
		'single',
		'page',
		'archive',
		'admin-bar',
		'no-js',
		'home',
	];
	return array_intersect( $classes, $allowed_classes );
}
add_filter( 'body_class', 'origin_clean_body_classes', 20 );


// function origin_body_class( $classes ) {
//     global $post;
    
//     if ( isset( $post ) ) {
//         $classes[] = 'page-' . $post->post_name;
//     }
//     return $classes;
// }

// add_filter( 'body_class', 'origin_body_class' );

/**
 * Remove the default WordPress Gutenberg junk added by WP 5.9
 */
add_action('after_setup_theme', function() {
	// remove SVG and global styles
	remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');

	// remove wp_footer actions which add's global inline styles
	remove_action('wp_footer', 'wp_enqueue_global_styles', 1);

	// remove render_block filters which adding unnecessary stuff
	remove_filter('render_block', 'wp_render_duotone_support');
	remove_filter('render_block', 'wp_restore_group_inner_container');
	remove_filter('render_block', 'wp_render_layout_support_flag');
});

function wp_list_children() { 
	global $post; 
	$id = ( is_page() && $post->post_parent ) ? $post->post_parent : $post->ID;
	$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $id . '&echo=0' );
	//you can add `&depth=1` in the end, so it only shows one level

	if ( $childpages ) {    
		$string = '<ul>' . $childpages . '</ul>';
	}

	return $string;
}

add_shortcode('list_children', 'wp_list_children');

// Removes comments from admin menu
add_action( 'admin_menu', 'pk_remove_admin_menus' );
function pk_remove_admin_menus() {
	remove_menu_page( 'edit-comments.php' );
}
<?php

add_action('init', 'origin_taxonomies');

function origin_taxonomies() {
	$taxonomy_name		= "event_category";
	$single_name		= "Category";
	$plural_name		= "Categories";
	$post_type			= "event";
	$gutenberg_enabled	= true;

	$labels = array(
		'name'              => $single_name,
		'singular_name'     => $single_name,
		'search_items'      => 'Search ' . $plural_name,
		'all_items'         => 'All ' . $plural_name,
		'parent_item'       => 'Parent ' . $single_name,
		'parent_item_colon' => 'Parent ' . $single_name . ':',
		'edit_item'         => 'Edit ' . $single_name,
		'update_item'       => 'Update ' . $single_name,
		'add_new_item'      => 'Add New ' . $single_name,
		'new_item_name'     => 'New ' . $single_name . ' Name',
		'menu_name'         => $plural_name
	);

	$args = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'public'            => true,
		'show_in_rest'      => $gutenberg_enabled,
		'rewrite'           => array( 'slug' => '' ),
	);
	register_taxonomy( $taxonomy_name, $post_type, $args );

	$taxonomy_name		= "event_tags";
	$single_name		= "Tag";
	$plural_name		= "Tags";
	$post_type			= "event";
	$gutenberg_enabled	= true;

	$labels = array(
		'name'              => $single_name,
		'singular_name'     => $single_name,
		'search_items'      => 'Search ' . $plural_name,
		'all_items'         => 'All ' . $plural_name,
		'parent_item'       => 'Parent ' . $single_name,
		'parent_item_colon' => 'Parent ' . $single_name . ':',
		'edit_item'         => 'Edit ' . $single_name,
		'update_item'       => 'Update ' . $single_name,
		'add_new_item'      => 'Add New ' . $single_name,
		'new_item_name'     => 'New ' . $single_name . ' Name',
		'menu_name'         => $plural_name
	);

	$args = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'public'            => true,
		'show_in_rest'      => $gutenberg_enabled,
		'rewrite'           => array( 'slug' => '' ),
	);
	register_taxonomy( $taxonomy_name, $post_type, $args );

	$taxonomy_name		= "programme_category";
	$single_name		= "Category";
	$plural_name		= "Categories";
	$post_type			= "programme";
	$gutenberg_enabled	= true;

	$labels = array(
		'name'              => $single_name,
		'singular_name'     => $single_name,
		'search_items'      => 'Search ' . $plural_name,
		'all_items'         => 'All ' . $plural_name,
		'parent_item'       => 'Parent ' . $single_name,
		'parent_item_colon' => 'Parent ' . $single_name . ':',
		'edit_item'         => 'Edit ' . $single_name,
		'update_item'       => 'Update ' . $single_name,
		'add_new_item'      => 'Add New ' . $single_name,
		'new_item_name'     => 'New ' . $single_name . ' Name',
		'menu_name'         => $plural_name
	);

	$args = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'public'            => true,
		'show_in_rest'      => $gutenberg_enabled,
		'rewrite'           => array( 'slug' => '' ),
	);
	register_taxonomy( $taxonomy_name, $post_type, $args );
}

<?php


/**
 * Add custom styles and colour palette
 */
function origin_gutenberg_setup() {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/editor-style.css' );

	add_theme_support( 'disable-custom-colors' );
	add_theme_support( 'disable-custom-gradients' );

	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Red', 'origin-colors' ),
			'slug'  => 'red',
			'color'	=> '#e94f35',
		),
		array(
			'name'  => __( 'Maroon', 'origin-colors' ),
			'slug'  => 'maroon',
			'color'	=> '#8e1f5f',
		),
		array(
			'name'  => __( 'Gold', 'origin-colors' ),
			'slug'  => 'gold',
			'color'	=> '#f9b000',
		),
		array(
			'name'  => __( 'Blue', 'origin-colors' ),
			'slug'  => 'blue',
			'color'	=> '#59a5d7',
		),
		array(
			'name'  => __( 'Brown', 'origin-colors' ),
			'slug'  => 'brown',
			'color'	=> '#7d571c',
		),
		array(
			'name'  => __( 'Green', 'origin-colors' ),
			'slug'  => 'Green',
			'color'	=> '#009640',
		),
	) );
}
add_action( 'after_setup_theme', 'origin_gutenberg_setup' );



/**
 * Remove Gutenberg styling - Uncomment this add_action if you want to remove styles
 */
function origin_deregister_styles() {
	if ( !is_admin() ) {
		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style( 'wp-block-library-theme' );
		wp_dequeue_style( 'wc-block-style' );
	}
}
// add_action( 'wp_enqueue_scripts', 'origin_deregister_styles', 100);

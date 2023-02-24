<?php
	$sidebar = get_field('show_sidebar');
	$allowed_blocks = array( 'core/heading', 'core/paragraph', 'core/buttons', 'core/image', 'core/list', 'core/separator', 'core/gallery', 'core/embed' );
?>

<?php if($allowed_blocks) { ?>
<section class="content-block content-block-<?php echo get_post_type(); ?>">
<?php
	if ( 'programme' == get_post_type() ) {
		get_template_part('sidebar-programme' );
	} elseif ( 'event' == get_post_type() ) {
		get_template_part('sidebar-event' );
	} elseif ( 'true' == get_field('show_sidebar') ) {
		get_sidebar();
	}
?>

	<div class="content-block__content">
		<?php echo '<InnerBlocks allowedBlocks="' . esc_attr( wp_json_encode( $allowed_blocks ) ) . '" />'; ?>
	</div>
</section>
<?php if ( 'programme' == get_post_type() || 'event' == get_post_type() ) { ?>
	<hr class="hr-styled hr-styled--large">
<?php } ?>
<?php } ?>

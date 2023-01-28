<?php
	$sidebar = get_field('show_sidebar');
	$allowed_blocks = array( 'core/heading', 'core/paragraph', 'core/button', 'core/image' );
?>

<?php if($allowed_blocks) { ?>
<section class="content-block">
<?php if ( 'true' == get_field('show_sidebar') ) { ?>
	<aside class="content-block__sidebar">
		Sidebar 
		<?php echo do_shortcode('[list_children]'); ?>
	</aside>
<?php } ?>
	<div class="content-block__content">
		<?php echo '<InnerBlocks allowedBlocks="' . esc_attr( wp_json_encode( $allowed_blocks ) ) . '" />'; ?>
	</div>
</section>
<?php } ?>
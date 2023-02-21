<?php
	$pages = get_field('select_pages');
?>

<?php if($pages) { ?>
<section class="pagelinks">
	<?php foreach( $pages as $id ):
		$pagetitle = get_the_title($id);
		$excerpt = get_field('pagelink_desc', $id);
		$wpexcerpt = get_the_excerpt($id);
	?>
		<a href="<?php echo get_the_permalink($id); ?>" class="card">
			<figure class="card__media">
				<img src="<?php echo get_the_post_thumbnail_url($id,'Thumb'); ?>" alt="<?php echo get_post_meta($id, '_wp_attachment_image_alt', true); ?>">
			</figure>

			<div class="card__title"><p><?php echo $pagetitle; ?></p></div>
			<?php if($excerpt) { ?><div class="card__excerpt"><p class="small"><?php echo $excerpt; ?></p></div><?php } ?>
			<?php if($wpexcerpt) { ?><div class="card__excerpt"><p class="small"><?php echo $wpexcerpt; ?></p></div><?php } ?>
		</a>
	<?php endforeach; ?>
</section>
<?php } ?>

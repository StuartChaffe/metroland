<?php
	$pages = get_field('select_pages');
?>

<?php if($pages) { ?>
<section class="pagelinks">
	<?php foreach( $pages as $page ):
		// $image = get_the_post_thumbnail_url($page);
		$image = get_the_post_thumbnail($page);
		$pagetitle = get_the_title($page);
		$excerpt = get_field('pagelink_desc', $page);
	?>
		<a href="<?php esc_url(the_permalink($page) ); ?>" class="card">
			<?php echo $image; ?>
			<div class="card__title"><p><?php echo $pagetitle; ?></p></div>
			<div class="card__excerpt"><p class="small"><?php echo $excerpt; ?></p></div>
			<?php the_excerpt($page); ?>
		</a>
	<?php endforeach; ?>
</section>
<?php } ?>
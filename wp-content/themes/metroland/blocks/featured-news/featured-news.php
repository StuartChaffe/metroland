<?php
	$title = get_field('featured_title');
	$featured = get_field( 'select_feature' );

	$counter = 1;
?>
<section class="featured featured-news">
	<div class="featured-title">
		<?php if ($title) { ?><h2 class="uppercase"><?php echo $title; ?></h2><?php } ?>
		<?php if ($content) { ?><?php echo $content; ?><?php } ?>
	</div>

	<div class="featured-list">
	<?php if( $featured ) { ?>
		<?php foreach( $featured as $id ):
			$title = get_the_title($id);
			$excerpt = get_the_excerpt($id);
			$date = get_the_date('', $id);
		?>
		<a href="<?php esc_url(the_permalink($id) ); ?>" title="Article: <?php echo $title; ?>" class="card <?php if($counter == '1'){ echo 'featured-list--full'; } else { echo 'featured-list--small'; } ?>">
			<figure class="card__media">
				<img src="<?php echo get_the_post_thumbnail_url($id); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($id), '_wp_attachment_image_alt', true); ?>">
			</figure>
			<div class="card__content">
				<div class="card__title"><p><?php echo $title; ?></div>
				<?php if( $excerpt ) { ?><div class="card__excerpt"><p><?php echo $excerpt; ?></p></div><?php } ?>
				<div class="card__date"><p><?php echo $date; ?></p></div>
			</div>
		</a>
		<?php $counter++; ?>
		<?php endforeach; ?>
	<?php } ?>
	</div>
</section>

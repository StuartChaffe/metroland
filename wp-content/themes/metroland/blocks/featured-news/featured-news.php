<?php
	$title = get_field('featured_title');
	$featured = get_field( 'select_feature' );
	$button = get_field( 'button' );

	$counter = 1;
?>
<section class="featured featured-news">
	<div class="featured-title">
		<?php if ($title) { ?><h3 class="uppercase"><?php echo $title; ?></h3><?php } ?>
		<?php if ( 'true' == get_field('button') ) { ?>
			<a href="/news" class="btn--link">All news <?php echo get_icon('arrow');?></a>
		<?php } ?>
	</div>

	<div class="featured-list">
	<?php if( $featured ) { ?>
		<?php foreach( $featured as $id ):
			$title = get_the_title($id);
			$excerpt = get_the_excerpt($id);
			$date = get_the_date('', $id);
		?>
		<a href="<?php esc_url(the_permalink($id) ); ?>" title="Article: <?php echo $title; ?>" class="card featured-list--small">
			<div class="card__media">
				<figure>
				<?php if(has_post_thumbnail($id)) { ?>
					<img src="<?php echo get_the_post_thumbnail_url($id); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($id), '_wp_attachment_image_alt', true); ?>">
					<?php } else { ?>
					<img src="<?php echo get_template_directory_uri(); ?>/src/images/noimage.png" alt="No image" />
				<?php } ?>
				</figure>
				<div class="card__arrow"><?php echo get_icon('arrow');?></div>
			</div>
			<div class="card__content">
				<div class="card__date"><p><?php echo $date; ?></p></div>
				<div class="card__title"><p><?php echo $title; ?></div>
				<?php if( $excerpt ) { ?><div class="card__excerpt"><p><?php echo $excerpt; ?></p></div><?php } ?>
			</div>
		</a>
		<?php $counter++; ?>
		<?php endforeach; ?>
	<?php } ?>
	</div>
</section>

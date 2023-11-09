<?php
	$title = get_field('featured_title');
	$content = get_field('featured_content');
	$featured = get_field( 'select_feature' );
	$button = get_field( 'button' );
?>

<section class="events" id="events">
	<?php if ($title || $content ) { ?>
	<div class="events-title">
		<div class="events-title__content">
		<?php if ($title) { ?><h2><?php echo $title; ?></h2><?php } ?>
		<?php if ($content) { ?><?php echo $content; ?><?php } ?>
		</div>
		<?php if ( 'true' == get_field('button') ) { ?>
		<a href="/events" class="btn--link">All events <?php echo get_icon('arrow');?></a>
		<?php } ?>
	</div>
	<?php } ?>


	<div class="events-list">

	<?php if( $featured ) { ?>
		<?php foreach( $featured as $id ):
			// $when = get_field('when', get_the_id());
			$title = get_the_title($id);
			$excerpt = get_the_excerpt($id);

			$when = get_field('when', $id);
			$where = get_field('where', $id);
			$price = get_field('price', $id);
			$tickets = get_field('ticket', $id);
		?>
		<a href="<?php esc_url( the_permalink($id) ); ?>" title="Article: <?php echo $title; ?>" class="card card--std">
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
			<?php if ($when['date']) { ?><div class="card__date"><?php echo $when['date']; ?><?php if ($when['time']) { ?><br /><?php echo $when['time']; ?><?php } ?></div><?php } ?>
			<div class="card__title"><p><?php echo $title; ?></p></div>
			<?php if( $excerpt ) { ?><div class="card__excerpt"><p><?php echo $excerpt; ?></p></div><?php } ?>
			<?php if ($where) { ?><div class="card__address"><p><?php echo $where; ?></p></div><?php } ?>

			<span class="btn btn--red">Find out more <?php echo get_icon('arrow');?></span>
		</a>

		<?php endforeach; ?>
	<?php } ?>


	</div>
	<hr />
</section>

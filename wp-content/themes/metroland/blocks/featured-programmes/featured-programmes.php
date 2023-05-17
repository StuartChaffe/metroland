<?php
	$title = get_field('featured_title');
	$content = get_field('featured_content');
	$featured = get_field( 'select_feature' );
	$button = get_field( 'button' );
?>

<section class="programmes">
	<?php if ($title || $content) { ?>
	<div class="programmes-title">
		<?php if ($title) { ?><h2 class="uppercase"><?php echo $title; ?></h2><?php } ?>
		<?php if ($content) { ?><?php echo $content; ?><?php } ?>
	</div>
	<?php } ?>


	<div class="programmes-list">

	<?php if( $featured ) { ?>
		<?php foreach( $featured as $id ):
			// $when = get_field('when', get_the_id());
			$title = get_the_title($id);
			$excerpt = get_the_excerpt($id);
			$where = get_field('where', $id);
			$price = get_field('price', $id);
			$tickets = get_field('ticket',$id);
			$size = get_field('list_size', $id);
		?>
		<a href="<?php esc_url( the_permalink($id) ); ?>" title="Article: <?php echo $title; ?>" class="card <?php echo $size; ?>">
			<figure class="card__media">
				<img src="<?php echo get_the_post_thumbnail_url($id); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($id), '_wp_attachment_image_alt', true); ?>">
			</figure>

			<div class="card__title"><p><?php echo $title; ?></p></div>
			<?php if( $excerpt ) { ?><div class="card__excerpt"><p><?php echo $excerpt; ?></p></div><?php } ?>

			<span class="btn btn--solid">Find out more</span>
		</a>
		<?php endforeach; ?>
	<?php } ?>
	<?php if ( 'true' == get_field('button') ) { ?>
	<div class="btn__group">
		<a href="/programmes" class="btn btn--large">All exhibitions</a>
	</div>
	<?php } ?>

	</div>
</section>

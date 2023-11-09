<?php
	$title = get_field('featured_title');
	$content = get_field('featured_content');
	$featured = get_field( 'select_feature' );
	$button = get_field( 'button' );
?>

<section class="programmes">
	<?php if ($title || $content) { ?>
	<div class="programmes-title">
		<div class="programmes-title__content">
		<?php if ($title) { ?><h2 class="uppercase"><?php echo $title; ?></h2><?php } ?>
		<?php if ($content) { ?><?php echo $content; ?><?php } ?>
		</div>
		<?php if ( 'true' == get_field('button') ) { ?>
			<a href="/programmes" class="btn--link">All exhibitions <?php echo get_icon('arrow');?></a>
		<?php } ?>
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
			<div class="card__media">
				<figure>
					<img src="<?php echo get_the_post_thumbnail_url($id); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($id), '_wp_attachment_image_alt', true); ?>">
				</figure>
				<div class="card__arrow"><?php echo get_icon('arrow');?></div>
			</div>

			<div class="card__title"><p><?php echo $title; ?></p></div>
			<?php if( $excerpt ) { ?><div class="card__excerpt"><p><?php echo $excerpt; ?></p></div><?php } ?>

			<span class="btn btn--red">Find out more <?php echo get_icon('arrow');?></span>
		</a>
		<?php endforeach; ?>
	<?php } ?>

	</div>
</section>

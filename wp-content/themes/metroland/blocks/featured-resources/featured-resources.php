<?php
	$title = get_field('featured_title');
	$content = get_field('featured_content');
	$featured = get_field( 'select_feature' );
	$button = get_field( 'button' );
?>

<section class="resources" id="resources">
	<?php if ($title || $content ) { ?>
	<div class="resources-title">
		<?php if ($title) { ?><h2 class="uppercase"><?php echo $title; ?></h2><?php } ?>
		<?php if ($content) { ?><?php echo $content; ?><?php } ?>
	</div>
	<?php } ?>


	<div class="resources-list">

	<?php if( $featured ) { ?>
		<?php foreach( $featured as $id ):
			// $when = get_field('when', get_the_id());
			$title = get_the_title($id);
			$excerpt = get_the_excerpt($id);

			$type = get_field('resource_type',$id);
			$external = get_field('resource_external',$id);
			$externallink = get_field('resource_link',$id);
		?>
		<?php if ( 'true' == $external ) { ?>
		<a href="<?php echo $externallink['url']; ?>" target="<?php echo $externallink['target']; ?>" title="Article: <?php echo $title; ?>" class="card card--std">
		<?php } else { ?>
		<a href="<?php esc_url( the_permalink($id) ); ?>" title="Article: <?php echo $title; ?>" class="card card--std">
		<?php } ?>
			<figure class="card__media">
			<?php if(has_post_thumbnail($id)) { ?>
				<img src="<?php echo get_the_post_thumbnail_url($id); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($id), '_wp_attachment_image_alt', true); ?>">
				<?php } else { ?>
				<img src="<?php echo get_template_directory_uri(); ?>/src/images/noimage.png" alt="No image" />
			<?php } ?>
			</figure>

			<?php echo $type; ?>

			<div class="card__title"><p><?php echo $title; ?></p></div>
			<?php if( $excerpt ) { ?><div class="card__excerpt"><p><?php echo $excerpt; ?></p></div><?php } ?>

			<span class="btn btn--solid">
				<?php if ( $externallink ) { ?>
					<?php echo $externallink['title']; ?>
				<?php } else { ?>
					Find out more
				<?php } ?>
			</span>
		</a>

		<?php endforeach; ?>
	<?php } ?>
	<?php if ( 'true' == get_field('button') ) { ?>
	<div class="btn__group">
		<a href="/resources" class="btn btn--large">All resources</a>
	</div>
	<?php } ?>

	</div>
</section>

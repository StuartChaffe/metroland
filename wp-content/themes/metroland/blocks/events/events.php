<?php
	$posts = new WP_Query( array(
		'post_type' => 'event',
		// 'posts_per_page' => -1,
		'orderby' => 'date',
		'order' => 'DESC',
	));
	$title = get_field('events_title');
	$content = get_field('events_content');

?>

<section class="events">
	<div class="events-title">
		<?php if ($title) { ?><h2 class="uppercase"><?php echo $title; ?></h2><?php } ?>
		<?php if ($content) { ?><?php echo $content; ?><?php } ?>
	</div>

	<div class="events-list">

	<?php if ($posts->have_posts()) { ?>
		<?php while($posts->have_posts()) : $posts->the_post();
			$when = get_field('when', get_the_id());
			$where = get_field('where', get_the_id());
			$price = get_field('price', get_the_id());
			$tickets = get_field('ticket', get_the_id());
		?>
		<a href="<?php esc_url( the_permalink() ); ?>" title="Article: <?php the_title(); ?>" class="card card--std">
			<figure class="card__media">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
			</figure>

			<div class="card__title"><p><?php the_title(); ?></p></div>
			<?php if ($when['date']) { ?><div class="card__date"><?php echo $when['date']; ?><?php if ($when['time']) { ?><br /><?php echo $when['time']; ?><?php } ?></div><?php } ?>

			<div class="card__excerpt"><?php the_excerpt(); ?></div>

			<?php if ($where) { ?><div class="card__address"><p><?php echo $where; ?></p></div><?php } ?>

			<span class="btn btn--solid">Find out more</span>
		</a>
		<?php endwhile; wp_reset_query(); ?>
	<?php } ?>

	</div>
</section>

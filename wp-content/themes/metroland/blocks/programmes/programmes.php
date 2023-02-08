<?php
	$posts = new WP_Query( array(
		'post_type' => 'programme',
		// 'posts_per_page' => -1,
		'orderby' => 'menu_order',
		'order' => 'ASC',
	));
	$title = get_field('programme_title');
	$content = get_field('programme_content');
?>

<section class="programmes">
	<?php if ($title) { ?>
	<div class="programmes-title">
		<?php if ($title) { ?><h2 class="uppercase"><?php echo $title; ?></h2><?php } ?>
		<?php if ($content) { ?><?php echo $content; ?><?php } ?>
	</div>
	<?php } ?>


	<div class="programmes-list">

	<?php if ($posts->have_posts()) { ?>
		<?php while($posts->have_posts()) : $posts->the_post();
			// $when = get_field('when', get_the_id());
			$where = get_field('where', get_the_id());
			$price = get_field('price', get_the_id());
			$tickets = get_field('ticket', get_the_id());
			$size = get_field('list_size', get_the_id());
		?>
		<a href="<?php esc_url( the_permalink() ); ?>" title="Article: <?php the_title(); ?>" class="card <?php echo $size; ?>">
			<figure class="card__media">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
			</figure>

			<div class="card__title"><p><?php the_title(); ?></p></div>
			<div class="card__excerpt"><?php the_excerpt(); ?></div>

			<span class="btn btn--solid">Find out more</span>
		</a>
		<?php endwhile; wp_reset_query(); ?>
	<?php } ?>

	</div>
</section>

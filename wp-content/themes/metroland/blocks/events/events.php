<?php
	$posts = new WP_Query( array(
		'post_type' => 'event',
		'taxonomy' => 'event_category',
		// 'posts_per_page' => -1,
		'orderby' => 'menu_order',
		'order' => 'ASC',
	));
	$title = get_field('events_title');
	$content = get_field('events_content');
?>

<section class="events">
	<?php if ($title || $content) { ?>
	<div class="events-title">
		<?php if ($title) { ?><h2 class="uppercase"><?php echo $title; ?></h2><?php } ?>
		<?php if ($content) { ?><?php echo $content; ?><?php } ?>
	</div>
	<?php } ?>

	<div class="category-filter">
		<select class="select-filter">
			<option value="all">All categories</option>
			<?php
				$terms = get_terms([
					'taxonomy' => 'event_category',
					'hide_empty' => true,
				]);
				foreach ($terms as $term) {
					$option .= '<option value=".'.$term->slug.'">';
					$option .= $term->name;

					$option .= '</option>';
				}
				echo $option;
			?>
		</select>
	</div>
	<div class="events-list list-filter">
	<?php if ($posts->have_posts()) { ?>
		<?php while($posts->have_posts()) : $posts->the_post();
			$when = get_field('when', get_the_id());
			$where = get_field('where', get_the_id());
			$price = get_field('price', get_the_id());
			$tickets = get_field('ticket', get_the_id());
			// $terms = wp_get_post_terms('event_category', get_the_id());
			$terms = get_the_terms(get_the_id(), 'event_category');
			$tags = get_the_terms(get_the_id(), 'event_tags');
			// $terms = wp_get_post_terms( $post->ID, 'event_category' );
		?>
		<a href="<?php esc_url( the_permalink() ); ?>" class="mix card card--std" >
			<figure class="card__media">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
			</figure>
			<?php if ($tags) { ?><div class="card-tags"><?php foreach ($tags as $tag) { ?><div class="tag"><?php echo $tag->name; ?></div><?php } ?></div><?php } ?>
			<div class="card__title"><p><?php the_title(); ?></p></div>
			<?php if ($when['date']) { ?><div class="card__date"><?php echo $when['date']; ?><?php if ($when['time']) { ?><br /><?php echo $when['time']; ?><?php } ?></div><?php } ?>

			<?php if (get_the_excerpt()) { ?><div class="card__excerpt"><?php the_excerpt(); ?></div><?php } ?>

			<?php if ($where) { ?><div class="card__address"><p><?php echo $where; ?></p></div><?php } ?>

			<span class="btn btn--solid">Find out more</span>
		</a>
		<?php endwhile; wp_reset_query(); ?>
	<?php } ?>

	</div>
</section>

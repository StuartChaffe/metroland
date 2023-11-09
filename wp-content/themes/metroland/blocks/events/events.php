<?php
	$date = new DateTime();
	// $today = $date->getTimestamp();
	$today = date("Ymd");
	$posts = new WP_Query( array(
		'post_type' => 'event',
		'taxonomy' => 'event_category',
		'posts_per_page' => -1,
		'orderby' => 'date',
		'order' => 'ASC',
		'meta_key' => 'date',
		'meta_query'    => array(
			'relation'      => 'AND',
			array(
				'key'       => 'date',
				'compare'   => '>=',
				'value'     => $today,
			)
		)
	));
	$title = get_field('events_title');
	$content = get_field('events_content');
?>
<?php if ($posts->have_posts()) { ?>
<section class="events">
	<?php if ($title || $content) { ?>
	<div class="events-title">
		<div class="events-title__content">
			<?php if ($title) { ?><h2><?php echo $title; ?></h2><?php } ?>
			<?php if ($content) { ?><?php echo $content; ?><?php } ?>
		</div>
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

		<?php while($posts->have_posts()) : $posts->the_post();
			$when = get_field('when', get_the_id());
			$where = get_field('where', get_the_id());
			$dates = get_field('date', get_the_id());
			$price = get_field('price', get_the_id());
			$tickets = get_field('ticket', get_the_id());
			$terms = get_the_terms(get_the_id(), 'event_category');
			$tags = get_the_terms(get_the_id(), 'event_tags');
		?>
		<a href="<?php esc_url( the_permalink() ); ?>" title="Article: <?php the_title(); ?>" class="mix <?php foreach ($terms as $term) { ?><?php echo $term->slug . ' '; ?><?php } ?>card card--std" data-filter="<?php foreach ($terms as $term) { ?><?php echo $term->slug . ' '; ?><?php } ?>">
			<div class="card__media">
				<figure>
				<?php if(has_post_thumbnail()) { ?>
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
					<?php } else { ?>
					<img src="<?php echo get_template_directory_uri(); ?>/src/images/noimage.png" alt="No image" />
				<?php } ?>
				</figure>
				<div class="card__arrow"><?php echo get_icon('arrow');?></div>
			</div>
			<?php if ($tags) { ?><div class="card-tags"><?php foreach ($tags as $tag) { ?><div class="tag"><?php echo $tag->name; ?></div><?php } ?></div><?php } ?>
			<?php if ($when['date']) { ?><div class="card__date"><?php echo $when['date']; ?><?php if ($when['time']) { ?><br /><?php echo $when['time']; ?><?php } ?></div><?php } ?>
			<div class="card__title"><p><?php the_title(); ?></p></div>

			<?php if (get_the_excerpt()) { ?><div class="card__excerpt"><?php the_excerpt(); ?></div><?php } ?>

			<?php if ($where) { ?><div class="card__address"><p><?php echo $where; ?></p></div><?php } ?>

			<span class="btn btn--black">Find out more <?php echo get_icon('arrow');?></span>
		</a>
		<?php endwhile; wp_reset_query(); ?>


	</div>
</section>
<hr />
<?php } ?>

<?php
	$date = new DateTime();
	$today = date("Ymd");
	$posts = new WP_Query( array(
		'post_type' => 'event',
		'taxonomy' => 'event_category',
		'posts_per_page' => -1,
		'orderby' => 'date',
		'order' => 'ASC',
		'meta_key' => 'date',
		'meta_query'    => array(
			'relation'      => 'AND',
			array(
				'key'       => 'date',
				'compare'   => '<=',
				'value'     => $today,
			)
		)
	));
	$pasttitle = get_field('past_events_title');
	$pastcontent = get_field('past_events_content');
?>
<?php if ($posts->have_posts()) { ?>
<section class="events">
	<?php if ($pasttitle || $content) { ?>
	<div class="events-title">
		<div class="events-title__content">
			<?php if ($pasttitle) { ?><h2><?php echo $pasttitle; ?></h2><?php } ?>
			<?php if ($pastcontent) { ?><?php echo $pastcontent; ?><?php } ?>
		</div>
	</div>
	<?php } ?>

	<div class="events-list list-filter">
		<?php while($posts->have_posts()) : $posts->the_post();
			$when = get_field('when', get_the_id());
			$where = get_field('where', get_the_id());
			$dates = get_field('date', get_the_id());
			$price = get_field('price', get_the_id());
			$tickets = get_field('ticket', get_the_id());
			$terms = get_the_terms(get_the_id(), 'event_category');
			$tags = get_the_terms(get_the_id(), 'event_tags');
		?>
		<a href="<?php esc_url( the_permalink() ); ?>" title="Article: <?php the_title(); ?>" class="mix <?php foreach ($terms as $term) { ?><?php echo $term->slug . ' '; ?><?php } ?>card card--std" data-filter="<?php foreach ($terms as $term) { ?><?php echo $term->slug . ' '; ?><?php } ?>">
			<div class="card__media">
				<figure class="card__media">
				<?php if(has_post_thumbnail()) { ?>
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
					<?php } else { ?>
					<img src="<?php echo get_template_directory_uri(); ?>/src/images/noimage.png" alt="No image" />
				<?php } ?>
				</figure>
				<div class="card__arrow"><?php echo get_icon('arrow');?></div>
			</div>
			<?php if ($tags) { ?><div class="card-tags"><?php foreach ($tags as $tag) { ?><div class="tag"><?php echo $tag->name; ?></div><?php } ?></div><?php } ?>
			<?php if ($when['date']) { ?><div class="card__date"><?php echo $when['date']; ?><?php if ($when['time']) { ?><br /><?php echo $when['time']; ?><?php } ?></div><?php } ?>
			<div class="card__title"><p><?php the_title(); ?></p></div>
			<?php if (get_the_excerpt()) { ?><div class="card__excerpt"><?php the_excerpt(); ?></div><?php } ?>

			<?php if ($where) { ?><div class="card__address"><p><?php echo $where; ?></p></div><?php } ?>

			<span class="btn btn--black">Find out more <?php echo get_icon('arrow');?></span>
		</a>
		<?php endwhile; wp_reset_query(); ?>

	</div>
</section>
<?php } ?>

<?php
	$date = new DateTime();
	// $today = $date->getTimestamp();
	$today = date("Ymd");
	$posts = new WP_Query( array(
		'post_type' => 'programme',
		'taxonomy' => 'programme_category',
		// 'posts_per_page' => -1,
		'orderby' => 'menu_order',
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
	$title = get_field('programme_title');
	$content = get_field('programme_content');
?>
<?php if ($posts->have_posts()) { ?>
<section class="programmes">
	<?php if ($title) { ?>
	<div class="programmes-title">
		<?php if ($title) { ?><h2 class="uppercase"><?php echo $title; ?></h2><?php } ?>
		<?php if ($content) { ?><?php echo $content; ?><?php } ?>
	</div>
	<?php } ?>
	<div class="programmes-list">


		<?php while($posts->have_posts()) : $posts->the_post();
			// $when = get_field('when', get_the_id());
			$where = get_field('where', get_the_id());
			$price = get_field('price', get_the_id());
			$tickets = get_field('ticket', get_the_id());
			$size = get_field('list_size', get_the_id());
		?>
		<a href="<?php esc_url( the_permalink() ); ?>" title="Article: <?php the_title(); ?>" class="card <?php echo $size; ?>">
			<figure class="card__media">
			<?php if(has_post_thumbnail()) { ?>
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
				<?php } else { ?>
				<img src="<?php echo get_template_directory_uri(); ?>/src/images/noimage.png" alt="No image" />
			<?php } ?>
			</figure>

			<div class="card__title"><p><?php the_title(); ?></p></div>
			<?php if (has_excerpt()) { ?><div class="card__excerpt"><?php the_excerpt(); ?></div><?php } ?>

			<span class="btn btn--solid">Find out more</span>
		</a>
		<?php endwhile; wp_reset_query(); ?>
	</div>
</section>
<?php } ?>



<?php
	$date = new DateTime();
	$today = date("Ymd");
	$posts = new WP_Query( array(
		'post_type' => 'programme',
		'taxonomy' => 'programme_category',
		'posts_per_page' => -1,
		'orderby' => 'menu_order',
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
	$pasttitle = get_field('past_programmes_title');
	$pastcontent = get_field('past_programmes_content');
?>
<?php if ($posts->have_posts()) { ?>
<section class="programmes">
	<?php if ($pasttitle || $pastcontent) { ?>
	<div class="programmes-title">
		<?php if ($pasttitle) { ?><h2 class="uppercase"><?php echo $pasttitle; ?></h2><?php } ?>
		<?php if ($pastcontent) { ?><?php echo $pastcontent; ?><?php } ?>
	</div>
	<?php } ?>
	<div class="programmes-list">
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
			<?php if (has_excerpt()) { ?><div class="card__excerpt"><?php the_excerpt(); ?></div><?php } ?>

			<span class="btn btn--solid">Find out more</span>
		</a>
		<?php endwhile; wp_reset_query(); ?>
	</div>
</section>
<?php } ?>

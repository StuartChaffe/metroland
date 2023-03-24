<?php
	$posts = new WP_Query( array(
		'post_type' => 'resources',
		// 'taxonomy' => 'event_category',
		// 'posts_per_page' => -1,
		'orderby' => 'menu_order',
		'order' => 'ASC',
	));
	$title = get_field('events_title');
	$content = get_field('events_content');
?>
<?php if ($posts->have_posts()) { ?>
<section class="events">
	<?php if ($title || $content) { ?>
	<div class="events-title">
		<?php if ($title) { ?><h2 class="uppercase"><?php echo $title; ?></h2><?php } ?>
		<?php if ($content) { ?><?php echo $content; ?><?php } ?>
	</div>
	<?php } ?>
	<div class="resources-list">

		<?php while($posts->have_posts()) : $posts->the_post();

		?>
		<a href="<?php esc_url( the_permalink() ); ?>" title="Article: <?php the_title(); ?>" class="card card--std">
			<figure class="card__media">
			<?php if(has_post_thumbnail()) { ?>
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
				<?php } else { ?>
				<img src="<?php echo get_template_directory_uri(); ?>/src/images/noimage.png" alt="No image" />
			<?php } ?>
			</figure>
			<div class="card__title"><p><?php the_title(); ?></p></div>
			<?php if (get_the_excerpt()) { ?><div class="card__excerpt"><?php the_excerpt(); ?></div><?php } ?>
			<span class="btn btn--solid">Find out more</span>
		</a>
		<?php endwhile; wp_reset_query(); ?>
	</div>
</section>
<?php } ?>

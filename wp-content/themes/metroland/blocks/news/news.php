<?php
	$posts = new WP_Query( array(
		'post_type' => 'post',
		// 'posts_per_page' => -1,
		'orderby' => 'date',
		'order' => 'DESC',
	));

?>
<section class="news">
<?php if ($posts->have_posts()) { ?>
	<?php while($posts->have_posts()) : $posts->the_post(); ?>
	<a href="<?php esc_url( the_permalink() ); ?>" title="Article: <?php the_title(); ?>" class="card">
		<figure class="card__media">
			<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
		</figure>

		<div class="card__title"><p><?php the_title(); ?></p></div>
		<div class="card__excerpt"><?php the_excerpt(); ?></div>
		<div class="card__date"><p><?php the_date(); ?></p></div>
	</a>
	<?php endwhile; wp_reset_query(); ?>
<?php } ?>
</section>

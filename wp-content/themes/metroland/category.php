<?php get_header(); ?>

<?php if ( have_posts() ): ?>

	<div class="page-title">
		<h1 class="uppercase heading-3">News: <?php echo single_cat_title( '', false ); ?></h1>
	</div>

<section class="news">
<?php while ( have_posts() ) : the_post(); ?>
	<a href="<?php esc_url( the_permalink() ); ?>" title="Article: <?php the_title(); ?>" class="card">
		<figure class="card__media">
			<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
		</figure>
		<div class="card__title"><p><?php the_title(); ?></p></div>
		<div class="card__excerpt"><?php the_excerpt(); ?></div>
		<div class="card__date"><p><?php the_date(); ?></p></div>
	</a>
<?php endwhile; ?>
</section>

<?php else: ?>

<h2>No posts to display</h2>

<?php endif; ?>

<?php get_footer(); ?>

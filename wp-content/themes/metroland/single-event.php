<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<div class="page-breadcrumb"><span><span><a href="/events">Events</a><span><span> / <?php echo do_shortcode('[wpseo_breadcrumb]'); ?></div>
	<article id="content">
		<div class="container category-list">

		<?php
			$terms = wp_get_post_terms( $post->ID, 'event_category' );
			// $terms = get_terms([
			// 	$post->ID,
			// 	'taxonomy' => 'event_category',
			// 	'hide_empty' => false,
			// ]);
		?>
			<div class="category category--active"><p>EVENT <span class="hide">— Part of: Events</span></p></div>
		<?php foreach ($terms as $term) { ?>
			<div class="category"><?php echo $term->name; ?></div>
		<?php } ?>
		</div>
		<div class="page-title">
			<h1 class="heading-3 uppercase"><?php the_title(); ?></h1>
		</div>
		<section class="content-block content-block-event">
			<?php get_sidebar('event'); ?>
			<div class="content-block__content">
				<?php the_content(); ?>
			</div>
		</section>
	</article>
<?php endwhile; ?>

<?php get_footer(); ?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<article id="content">
	<div class="page-breadcrumb"><span><span><a href="/events">Events</a><span><span> / <?php echo do_shortcode('[wpseo_breadcrumb]'); ?></div>
	<div class="container category-list">
	<?php
		$terms = wp_get_post_terms( $post->ID, 'event_category' );
	?>
		<div class="category category--active"><p>EVENT <span class="hide">— Part of: Events</span></p></div>
	<?php foreach ($terms as $term) { ?>
		<div class="category"><?php echo $term->name; ?></div>
	<?php } ?>
	</div>
	<div class="page-title">
		<h1 class="heading-3 uppercase"><?php the_title(); ?></h1>
	</div>
	<section class="content-block content-block-event hide">
		<?php get_sidebar('event'); ?>
		<div class="content-block__content">
			<?php the_content(); ?>
		</div>
	</section>
	<?php the_content(); ?>
</article>
<?php endwhile; ?>

<?php get_footer(); ?>

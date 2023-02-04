<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<div class="page-breadcrumb"><span><span><a href="/whats-happening">Event</a><span><span> / <?php echo do_shortcode('[wpseo_breadcrumb]'); ?></div>
	<article id="content">
		<div class="container category-list">
			<div class="category category--active"><p>EVENT <span>— Part of: Events</span></p></div>
			<div class="category"><p>FREE</p></div>
			<div class="category"><p>Brent Biennials</p></div>
			<div class="category"><p>Public Programme</p></div>
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

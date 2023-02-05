<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<div class="has--hr bkg--secondary">
	<div class="page-breadcrumb"><span><span><a href="/whats-happening/programmes">Programmes</a><span><span> / <?php echo do_shortcode('[wpseo_breadcrumb]'); ?></div>
	<article id="content">
		<div class="container category-list">
			<div class="category category--active"><p>Programme</p></div>
			<div class="category"><p>FREE</p></div>
			<div class="category"><p>Brent Biennials</p></div>
			<div class="category"><p>Public Programme</p></div>
		</div>
		<div class="page-title">
			<h1 class="uppercase"><?php the_title(); ?></h1>
		</div>
		<section class="content-block content-block-event">
			<?php get_sidebar('programme'); ?>
			<div class="content-block__content">
				<?php the_content(); ?>
			</div>
		</section>
	</article>
	<hr class="hr-styled hr-styled--large">
</div>
<?php endwhile; ?>

<?php get_footer(); ?>

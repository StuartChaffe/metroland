<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<div class="has--hr bkg--secondary">
	<div class="page-breadcrumb"><span><span><a href="/programmes">Programmes</a><span><span> / <?php echo do_shortcode('[wpseo_breadcrumb]'); ?></div>
	<article id="content">
		<div class="container category-list">
		<?php
			$terms = get_terms([
				'taxonomy' => 'programme_category',
				'hide_empty' => false,
			]);
		?>
			<div class="category category--active"><p>PROGRAMME</p></div>
		<?php foreach ($terms as $term) { ?>
			<div class="category"><?php echo $term->name; ?></div>
		<?php } ?>
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

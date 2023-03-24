<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<article id="content">
	<div class="page-breadcrumb"><span><span><a href="/resources">Resources</a><span><span> / <?php echo do_shortcode('[wpseo_breadcrumb]'); ?></div>
	<div class="container category-list">
		<div class="category category--active"><p>RESOURCE </p></div>
	</div>
	<section class="content-block content-block-article">
		<?php get_sidebar('resources'); ?>
		<div class="content-block__content">
			<h1 class="heading-3 uppercase"><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
	</section>
</article>
<?php endwhile; ?>

<?php get_footer(); ?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<article id="content" class="page-content">
		<div class="page-breadcrumb"><span><span><a href="/news">News</a><span><span> / <?php echo do_shortcode('[wpseo_breadcrumb]'); ?></div>
		<section class="content-block content-block-article">
			<?php get_sidebar('news'); ?>
			<div class="content-block__content">
				<h1 class="heading-3 uppercase"><?php the_title(); ?></h1>
				<p class="small"><?php echo get_the_date(); ?></p>

				<?php the_content(); ?>
			</div>
		</section>
	</article>

<?php endwhile; ?>

<?php get_footer(); ?>

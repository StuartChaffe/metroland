<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<article id="content" class="page-content single-programme bkg--secondary">
	<div class="page-breadcrumb"><span><span><a href="/programmes">Programmes</a><span><span> / <?php echo do_shortcode('[wpseo_breadcrumb]'); ?></div>
	<div class="container category-list">
	<?php
		$terms = wp_get_post_terms( $post->ID, 'programme_category' );
	?>
		<div class="category category--active"><p>PROGRAMME</p></div>
	<?php foreach ($terms as $term) { ?>
		<div class="category"><?php echo $term->name; ?></div>
	<?php } ?>
	</div>
	<div class="page-title">
		<h1 class="uppercase"><?php the_title(); ?></h1>
	</div>
	<section class="content-block content-block-programme hide">
		<?php get_sidebar('programme'); ?>
		<div class="content-block__content">
			<?php the_content(); ?>
		</div>
	</section>
	<?php the_content(); ?>
</article>
<?php endwhile; ?>

<?php get_footer(); ?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<article id="content" class="page-content pt-0">
		<div class="page-breadcrumb"><span><span><a href="/news">News</a><span><span> / <?php echo do_shortcode('[wpseo_breadcrumb]'); ?></div>
		<a href="/news" class="btn--link btn--link-back"><?php echo get_icon('arrow');?> Back to articles</a>
		<div class="content-block__content">
			<div class="container-s">
			<?php if(has_post_thumbnail()) { ?>
				<div class="page-image">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
				</div>
			<?php } ?>
				<p class="page-date"><?php echo get_the_date(); ?></p>
				<div class="page-title">
					<h1 class="heading-3"><?php the_title(); ?></h1>
				</div>
			</div>

		</div>
	</article>

<?php endwhile; ?>

<?php get_footer(); ?>

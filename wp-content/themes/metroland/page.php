<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<main id="content">
	<!-- <a href="#events" class="top">Jump to Calendar</a> -->
	<?php if ( 'true' == get_field('breadcrumb_show') ) { ?><div class="page-breadcrumb"><?php echo do_shortcode('[wpseo_breadcrumb]'); ?></div><?php } ?>
	<?php if ( 'true' == get_field('page_title_show') ) { ?>
		<div class="page-title">
		<?php if (get_field('page_title_overwrite')) { ?>
			<h1 class="uppercase <?php if (get_field('page_title_size') == 'Small') { ?> heading-3<?php } ?>"><?php echo get_field('page_title_overwrite') ?></h1>
		<?php } else { ?>
			<h1 class="uppercase <?php if (get_field('page_title_size') == 'Small') { ?> heading-3<?php } ?>"><?php the_title(); ?></h1>
		<?php } ?>
		<?php if (has_excerpt()) { ?><div class="page-excerpt"><?php the_excerpt(); ?></div><?php } ?>
		</div>
	<?php } ?>

		<?php the_content(); ?>
	</main>
<?php endwhile; ?>

<?php get_footer(); ?>

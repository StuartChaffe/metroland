<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<main id="content">
	<?php if ( 'true' == get_field('page_title_show') ) { ?>
		<div class="page-title">
		<?php if (get_field('page_title_overwrite')) { ?>
			<h1 class="uppercase"><?php echo get_field('page_title_overwrite') ?></h1>
		<?php } else { ?>
			<h1 class="uppercase"><?php the_title(); ?></h1>
		<?php } ?>
		</div>
	<?php } ?>
	
		<?php the_content(); ?>
	</main>
<?php endwhile; ?>

<?php get_footer(); ?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<article id="content" class="page-content single-programme pt-0">
	<div class="page-breadcrumb"><span><span><a href="/programmes">Programmes</a><span><span> / <?php echo do_shortcode('[wpseo_breadcrumb]'); ?></div>
	<div class="category-list">
	<?php
		$terms = wp_get_post_terms( $post->ID, 'programme_category' );
	?>
		<div class="category category--active"><p>Programme</p></div>
	<?php foreach ($terms as $term) { ?>
		<div class="category"><?php echo $term->name; ?></div>
	<?php } ?>
	</div>
	<div class="container-s">
		<div class="page-title">
			<h1 class="heading-3"><?php the_title(); ?></h1>
		</div>


		<?php
			$when = get_field('when', get_the_id());
			$where = get_field('where', get_the_id());
			$notes = get_field('notes', get_the_id());
			$link = get_field('link', get_the_id());
			$file = get_field('file', get_the_id());
		?>
		<?php if ($when) { ?>
			<p><strong>When</strong></br />
			<?php echo $when; ?></p>
		<?php } ?>
		<?php if ($where) { ?>
			<p><strong>Where</strong></br />
			<?php echo $where; ?></p>
		<?php } ?>
		<?php if ($notes) { ?>
			<p><?php echo $notes; ?></p>
		<?php } ?>
		<?php if ($link) { ?>
			<a class="btn btn--outline" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php if ($link['title']) { ?><?php echo $link['title']; ?> <?php } else { ?>Venue location<?php } ?>  <?php echo get_icon('arrow');?></a>
		<?php } ?>
		<?php if ($file['file']) { ?>
			<a class="btn btn--outline" href="<?php echo $file['file']['url']; ?>"><?php if ($file['link_text']) { ?><?php echo $file['link_text']; ?> <?php } else { ?>Download file<?php } ?></a>
		<?php } ?>
	</div>
	<?php the_content(); ?>

</article>
<?php endwhile; ?>

<?php get_footer(); ?>

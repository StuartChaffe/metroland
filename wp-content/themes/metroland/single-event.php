<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<article id="content" class="page-content single-event pt-0">
	<div class="page-breadcrumb"><span><span><a href="/events">Events</a><span><span> / <?php echo do_shortcode('[wpseo_breadcrumb]'); ?></div>
	<div class="category-list">
	<?php
		$terms = wp_get_post_terms( $post->ID, 'event_category' );
	?>
		<div class="category category--active"><p>Event <span class="hide">— Part of: Events</span></p></div>
	<?php foreach ($terms as $term) { ?>
		<div class="category"><?php echo $term->name; ?></div>
	<?php } ?>
	</div>

	<div class="container-s">
	<?php if ( 'true' == get_field('show_featured_image') ) { ?>
	<?php if(has_post_thumbnail()) { ?>
		<div class="page-image">
			<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
		</div>
	<?php } ?>
	<?php } ?>
		<div class="page-title">
			<h1 class="heading-2"><?php the_title(); ?></h1>
		</div>

		<?php
			$when = get_field('when', get_the_id());
			$where = get_field('where', get_the_id());
			$notes = get_field('notes', get_the_id());
			$price = get_field('price', get_the_id());
			$tickets = get_field('ticket', get_the_id());
		?>
		<div class="page-details">
			<?php if ($when['date'] || $when['time']) { ?>
				<p><strong>When</strong></br />
				<?php echo $when['date']; ?> <br />
				<?php echo $when['time']; ?></p>
			<?php } ?>

			<?php if ($where) { ?>
				<p><strong>Where</strong></br />
				<?php echo $where; ?></p>
			<?php } ?>
			<?php if ($notes) { ?>
				<p><?php echo $notes; ?></p>
			<?php } ?>
			<?php if ($price) { ?>
				<p><strong>Price</strong></br />
				<?php echo $price; ?></p>
			<?php } ?>
			<?php if ($tickets) { ?>
				<a class="btn btn--outline" href="<?php echo $tickets['url']; ?>" target="<?php echo $tickets['target']; ?>"><?php echo $tickets['title']; ?> <?php echo get_icon('arrow');?></a>
			<?php } ?>
		</div>
	</div>
	<?php the_content(); ?>


</article>
<?php endwhile; ?>

<?php get_footer(); ?>

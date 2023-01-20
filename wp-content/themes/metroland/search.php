<?php get_header(); ?>

<?php if ( have_posts() ) { ?>
<?php
	global $wp_query;
	$total_results = $wp_query->found_posts;
?>

<div class="page-title">
	<h1 class="heading-3 uppercase">Search results</h1>
</div>

<div class="container">
	<p>Showing <?php echo $total_results; ?> result(s) for '<?php echo get_search_query(); ?>'</p>
	<div class="search-results">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="search-results__item">
				<h4><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>"><?php the_title(); ?></a></h4>
				<?php the_excerpt(); ?>
				<br />
				<a class="btn btn--solid" href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>">View <?php echo get_post_type(); ?></a>
			</div>
		<?php endwhile; ?>
	</div>
</div>

<?php } else { ?>
	
<h2>No results found for '<?php echo get_search_query(); ?>'</h2>

<?php } ?>

<?php get_footer(); ?>
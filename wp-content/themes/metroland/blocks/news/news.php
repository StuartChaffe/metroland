<div class="category-filter">
	<select name="cat-dropdown" onchange='document.location.href=this.options[this.selectedIndex].value;'>
		<option value=""><?php echo esc_attr(__('Showing: All categories')); ?></option>
		<?php
			$args = array(
				'taxonomy' => 'category',
				'orderby' => 'name',
				'post_type' => 'post',
				'order'   => 'ASC'
			);

			$categories = get_categories($args);
			foreach ($categories as $category) {
				$option .= '<option value="'.get_option('home').'/news/category/'.$category->slug.'">';
				$option .= $category->cat_name;
				$option .= ' ('.$category->category_count.')';
				$option .= '</option>';
			}
			echo $option;
		?>
	</select>
</div>
<?php
	$posts = new WP_Query( array(
		'post_type' => 'post',
		'posts_per_page' => -1,
		'orderby' => 'date',
		'order' => 'DESC',
	));

?>
<section class="news">
<?php if ($posts->have_posts()) { ?>
	<?php while($posts->have_posts()) : $posts->the_post(); ?>
	<a href="<?php esc_url( the_permalink() ); ?>" title="Article: <?php the_title(); ?>" class="card">
		<div class="card__media">
			<figure>
			<?php if(has_post_thumbnail()) { ?>
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
				<?php } else { ?>
				<img src="<?php echo get_template_directory_uri(); ?>/src/images/noimage.png" alt="No image" />
			<?php } ?>
			</figure>
			<div class="card__arrow"><?php echo get_icon('arrow');?></div>
		</div>
		<div class="card__date"><p><?php the_date(); ?></p></div>
		<div class="card__title"><p><?php the_title(); ?></p></div>
		<div class="card__excerpt"><?php the_excerpt(); ?></div>
	</a>
	<?php endwhile; wp_reset_query(); ?>
<?php } ?>
</section>

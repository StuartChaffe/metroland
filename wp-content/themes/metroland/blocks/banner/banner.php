<?php
	$image	= get_field('banner_image');
?>

<section class="banner">
	<a href="http://www.google.com">Link</a>
	<?php foreach($accordion as $item) { $counter++; ?>
		<div class="accordion__item">
			<button aria-expanded="false" class="accordion__handle" aria-controls="accordion-<?php echo $block['id'] . '_' . $counter; ?>" id="<?php echo sanitize_title($item['accordion_title']); ?>">
				<h3 class="accordion__title"><?php echo $item['accordion_title']; ?></h3>
				<div class="accordion__icon">&nbsp;</div>
			</button>
			<div class="accordion__body" id="accordion-<?php echo $block['id'] . '_' . $counter; ?>" role="region" aria-labelledby="<?php echo sanitize_title($item['accordion_title']); ?>">
				<?php echo $item['accordion_body']; ?>
			</div>
		</div>
	<?php } ?>
</section>

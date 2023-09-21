<?php
	$type	= get_field('banner_type');
	$size	= get_field('banner_size');
?>

<section class="banner<?php if ($type == 'Detailed') { ?> banner-detailed<?php } ?><?php if ($type == 'Images') { ?> banner-images<?php } ?><?php if ($size == 'True') { ?> banner-full<?php } ?>">
	<div class="banner-slider">
	<?php if( have_rows('banner') ) { ?>
	<?php while( have_rows('banner') ): the_row();
		$images		= get_sub_field('images');
		$content	= get_sub_field('content');
	?>
		<div class="banner-slider__item">
			<div class="banner-slider__item-image" <?php if ($type == ! 'Images') { ?>style="background-image: url('<?php echo $images['large']['url'];?>');"<?php } ?>>
				<?php if ($images['large']) { ?><img class="" src="<?php echo $images['large']['url'];?>" /><?php } ?>
				<?php if ($images['small']) { ?><img class="hidedesktop" src="<?php echo $images['small']['url'];?>" /><?php } ?>
			</div>
			<?php if ($type == 'Detailed' || $type == 'Standard') { ?>
			<div class="banner-slider__item-content">
				<?php if ($type == 'Detailed') { ?>
				<?php if ($content['label_detailed']) { ?><p class="label label--primary uppercase"><?php echo $content['label_detailed']; ?></p><?php } ?>
				<?php if ($content['title_detailed']) { ?><p class="banner-detailed__title"><?php echo $content['title_detailed']; ?></p><?php } ?>

				<?php if ($content['text_label_detailed']) { ?><p class="label label--black uppercase"><?php echo $content['text_label_detailed']; ?></p><?php } ?>
				<?php if ($content['text_detailed']) { ?>
					<div class="banner-detailed__excerpt"><?php echo $content['text_detailed']; ?></div>
				<?php } ?>
				<?php if ($content['link_detailed']) { ?>
					<?php if ($content['link_detailed']) { ?><a class="btn btn--solid btn--large" href="<?php echo $content['link_detailed']['url']; ?>" title="<?php echo $content['link_detailed']['title']; ?>"><?php echo $content['link_detailed']['title']; ?></a><?php } ?>
				<?php } ?>
				<?php } else { ?>
				<?php if ($content['date']) { ?><p class="small"><?php echo $content['date']; ?></p><?php } ?>
				<?php if ($content['title']) { ?><h3 class="uppercase txt--white"><?php echo $content['title']; ?></h3><?php } ?>
				<?php if ($content['text']) { ?><?php echo $content['text']; ?><?php } ?>
				<?php if ($content['link']) { ?><a class="btn btn--light" href="<?php echo $content['link']['url']; ?>" title="<?php echo $content['link']['title']; ?>"><?php echo $content['link']['title']; ?></a><?php } ?>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
		<?php endwhile; ?>
	<?php } ?>
	</div>
</section>

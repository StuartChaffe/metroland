<?php
	// $banner	= get_field('banner');
?>

<section class="banner">
	<div class="banner-slider">
	<?php if( have_rows('banner') ) { ?>
	<?php while( have_rows('banner') ): the_row();
		$images		= get_sub_field('images');
		$content	= get_sub_field('content');
	?>
		<div class="banner-slider__item">
			<div class="banner-slider__item-image" style="background-image: url('<?php echo $images['large']['url'];?>');">
				<?php if ($images['large']) { ?><img class="" src="<?php echo $images['large']['url'];?>" /><?php } ?>
				<?php if ($images['small']) { ?><img class="hidedesktop" src="<?php echo $images['small']['url'];?>" /><?php } ?>
			</div>
			<div class="banner-slider__item-content">
				<?php if ($content['title']) { ?><h3 class="uppercase txt--white"><?php echo $content['title']; ?></h3><?php } ?>
				<?php if ($content['text']) { ?><?php echo $content['text']; ?><?php } ?>
				<?php if ($content['link']) { ?><a class="btn btn--light" href="<?php echo $content['link']['url']; ?>" title="<?php echo $content['link']['title']; ?>"><?php echo $content['link']['title']; ?></a><?php } ?>
			</div>
		</div>
		<?php endwhile; ?>
	<?php } ?>
	</div>
</section>
<div class="banner__hr">
	<hr class="hr-styled hr-styled--large">
	<hr class="hr-styled hr-styled--half">
</div>

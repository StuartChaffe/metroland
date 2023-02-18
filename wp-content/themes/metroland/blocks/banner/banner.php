<?php
	$type	= get_field('banner_type');
?>

<?php if ($type == 'Programmes') { ?>
<section class="banner banner-programme">
	<div class="banner-slider">
		<div class="banner-slider__item">
			<div class="banner-slider__item-image" style="background-image: url('https://www.metrolandcultures.com/site/assets/files/4399/bb22_hero-image2_1.png');">
				<img decoding="async" class="" src="https://www.metrolandcultures.com/site/assets/files/4399/bb22_hero-image2_1.png">
			</div>
			<div class="banner-slider__item-content">
				<p class="label label--primary">Programme</p>
				<p class="banner-programme__title">Brent Biennial 2022</p>

				<p class="label label--black">Brent Biennial 2022</p>
				<div class="banner-programme__excerpt">
					<p>The second edition of the Brent Biennial, In the House of my Love, brings together artists and community groups whose works explore the many meanings of homemaking. It presents a series of artworks in the south of the borough, open and free for audiences to visit between 8 July - 11 September.</p>
				</div>
				<a href="" class="btn btn--solid btn--large">Find out more</a>
			</div>
		</div>
		<div class="banner-slider__item">
			<div class="banner-slider__item-image" style="background-image: url('https://metroland.test:3000/wp-content/uploads/bb22_web_banner_vertical.png');">
				<img decoding="async" class="" src="https://metroland.test:3000/wp-content/uploads/bb22_web_banner_vertical.png">
			</div>
			<div class="banner-slider__item-content">
				<p class="label label--primary">Programme</p>
				<p class="banner-programme__title">Brent Biennial 2022</p>

				<p class="label label--black">Brent Biennial 2022</p>
				<div class="banner-programme__excerpt">
					<p>The second edition of the Brent Biennial, In the House of my Love, brings together artists and community groups whose works explore the many meanings of homemaking. It presents a series of artworks in the south of the borough, open and free for audiences to visit between 8 July - 11 September.</p>
				</div>
				<a href="" class="btn btn--solid btn--large">Find out more</a>
			</div>
		</div>
	</div>
</section>
<?php } else { ?>
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
				<?php if ($content['date']) { ?><p class="small"><?php echo $content['date']; ?></p><?php } ?>
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
<?php } ?>

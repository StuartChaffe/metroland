<?php
	$when = get_field('when', get_the_id());
	$where = get_field('where', get_the_id());
	$notes = get_field('notes', get_the_id());
	$location = get_field('location', get_the_id());
?>
<aside class="content-block__sidebar" role="complmentary">
<?php if ($when) { ?>
	<p class="label label--black">When</p>
	<p class="small"><?php echo $when; ?></p>
<?php } ?>
<?php if ($where) { ?>
	<p class="label label--black">Where</p>
	<p class="small"><?php echo $where; ?></p>
<?php } ?>
<?php if ($notes) { ?>
	<p class="small"><?php echo $notes; ?></p>
<?php } ?>
<?php if ($location) { ?>
	<a class="btn btn--solid btn--large" href="<?php echo $location['url']; ?>" target="<?php echo $location['target']; ?>"><?php if ($location['title']) { ?><?php echo $location['title']; ?> <?php } else { ?>Venue location<?php } ?>
</a>
<?php } ?>

</aside>

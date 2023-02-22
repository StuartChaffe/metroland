<?php
	$when = get_field('when', get_the_id());
	$where = get_field('where', get_the_id());
	$notes = get_field('notes', get_the_id());
	$link = get_field('link', get_the_id());
	$file = get_field('file', get_the_id());
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
<?php if ($link) { ?>
	<a class="btn btn--solid btn--large" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php if ($link['title']) { ?><?php echo $link['title']; ?> <?php } else { ?>Venue location<?php } ?></a>
<?php } ?>
<?php if ($file['file']) { ?>
	<a class="btn btn--solid btn--large" href="<?php echo $file['file']['url']; ?>"><?php if ($file['link_text']) { ?><?php echo $file['link_text']; ?> <?php } else { ?>Download file<?php } ?></a>
<?php } ?>

</aside>

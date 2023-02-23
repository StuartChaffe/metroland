<?php
	$when = get_field('when', get_the_id());
	$where = get_field('where', get_the_id());
	$notes = get_field('notes', get_the_id());
	$price = get_field('price', get_the_id());
	$tickets = get_field('ticket', get_the_id());
?>
<aside class="content-block__sidebar" role="complmentary">
<?php if ($when['date'] || $when['time']) { ?>
	<p class="label label--black">When</p>
	<p class="small"><?php echo $when['date']; ?> <br />
	<?php echo $when['time']; ?></p>
<?php } ?>
<?php if ($where) { ?>
	<p class="label label--black">Where</p>
	<p class="small"><?php echo $where; ?></p>
<?php } ?>
<?php if ($notes) { ?>
	<p class="small"><?php echo $notes; ?></p>
<?php } ?>
<?php if ($price) { ?>
	<p class="label label--black">Price</p>
	<p class="small"><?php echo $price; ?></p>
<?php } ?>
<?php if ($tickets) { ?>
	<a class="btn btn--solid btn--large" href="<?php echo $tickets['url']; ?>" target="<?php echo $tickets['target']; ?>"><?php echo $tickets['title']; ?></a>
<?php } ?>

</aside>

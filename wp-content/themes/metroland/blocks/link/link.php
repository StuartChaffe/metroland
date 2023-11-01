<?php
	$link = get_field('link');
?>

<?php if($link) { ?>
<a href="<?php echo $link['url']; ?>" class="btn--link"><?php echo $link['title']; ?> <?php echo get_icon('arrow');?></a>
<?php } ?>

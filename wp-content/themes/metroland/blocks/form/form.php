<?php
	$title = get_field('form_title');
?>

<section class="form">
	<?php if ($title) { ?><div class="form__title"><h5><?php echo $title; ?></h5></div><?php } ?>
	<div id="mc_embed_signup">
		<form action="https://metrolandcultures.us13.list-manage.com/subscribe/post?u=f44cc57195ba06125e312ccd9&amp;id=44a6745e32&amp;f_id=0070e6e2f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<div id="mc_embed_signup_scroll">
				<div class="mc-field-group">
					<label for="mce-FNAME">Your name </label>
					<input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="Your name">
					<span id="mce-FNAME-HELPERTEXT" class="helper_text"></span>
				</div>
				<div class="mc-field-group">
					<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
					<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email address" required>
					<span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
				</div>
				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>
				<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f44cc57195ba06125e312ccd9_44a6745e32" tabindex="-1" value=""></div>
				<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn">
			</div>
		</form>
	</div>
	<?php if ( ! is_admin() ) { ?><script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script><?php } ?>
	<!--End mc_embed_signup-->
</section>

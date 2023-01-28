<header class="site-header">
	<div class="site-header__inner">
		<div class="site-header__logo">
			<a href="<?php echo home_url(); ?>">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.386 66.192"><polygon points="9.719 0 9.719 29.06 0 29.06 0 66.192 100.427 66.192 100.427 37.132 113.386 37.132 113.386 0 9.719 0"></polygon><polygon points="4.842 34.321 4.842 61.349 29.698 61.349 29.698 55.255 12.666 55.255 12.666 50.811 12.666 34.321 4.842 34.321" fill="#fff"></polygon><path d="M59.654,61.244V34.215H71.033q8.127,0,12.326,3.426t4.2,10.088q0,6.474-4.407,9.994T70.656,61.244Zm11.191-6.359q8.582,0,8.583-7.193,0-7.116-8.24-7.116H67.554V54.885Z" transform="translate(-0.018 0)" fill="#fff"></path><path d="M57.643,61.218V34.147H51.352V46.913c-1.54-3.6-3.425-8.9-6.335-11.356A8.589,8.589,0,0,0,34.785,35.3c-5.182,3.514-6.119,13.33-4.04,18.66,1.881,4.822,6.685,7.333,11.721,7.218,0-2.428,0-7.286,0-7.286s-6,.3-6-6.453c0-4.851,3.249-6.7,5.379-5.227,1.278.885,2.928,4.81,2.928,4.81s2.262,4.916,3.381,7.366c1.04,2.277,2.155,4.557,3.194,6.832Z" transform="translate(-0.018 0)" fill="#fff"></path><path d="M95.689,58.446A2.9,2.9,0,0,1,94.5,60.587a4.625,4.625,0,0,1-2.788.762,5.184,5.184,0,0,1-2.251-.453,3.34,3.34,0,0,1-1.471-1.328,4.337,4.337,0,0,1-.016-4.1,3.427,3.427,0,0,1,1.461-1.358,5,5,0,0,1,2.287-.484,4.485,4.485,0,0,1,2.556.648,3.161,3.161,0,0,1,1.275,1.956l-2.168.247a1.568,1.568,0,0,0-.594-.849,1.938,1.938,0,0,0-1.079-.263,1.912,1.912,0,0,0-1.466.561,2.569,2.569,0,0,0,0,3.124,1.981,1.981,0,0,0,1.5.555,2.127,2.127,0,0,0,1.183-.283,1.353,1.353,0,0,0,.562-.88Z" transform="translate(-0.018 0)" fill="#fff"></path><path d="M14.6,46.424" transform="translate(-0.018 0)" fill="#fff"></path><polygon points="79.967 5.259 52.843 5.259 52.843 11.354 62.494 11.354 62.494 32.289 70.316 32.289 70.316 11.354 79.967 11.354 79.967 5.259" fill="#fff"></polygon><path d="M43.377,32.289V16.54L35.915,32.289H29.7L22.242,16.615V32.289H14.578V5.258h9.559l8.834,18.4,8.793-18.4h9.4V32.289Z" transform="translate(-0.018 0)" fill="#fff"></path><path d="M108.829,30.16l-4.678-8.547a8.211,8.211,0,0,0,3.624-2.9,8.007,8.007,0,0,0,1.181-4.487q0-8.973-12.16-8.972H81.724V32.289h7.547V23.128h7.41l4.292,9.161h7.856Zm-8.754-13.695a7.236,7.236,0,0,1-3.776.757H89.271V10.861h7.106a7.121,7.121,0,0,1,3.754.739,2.665,2.665,0,0,1,1.123,2.4A2.708,2.708,0,0,1,100.075,16.465Z" transform="translate(-0.018 0)" fill="#fff"></path><path d="M10.86,55.273" transform="translate(-0.018 0)" fill="#fff"></path></svg><span class="hide">Home</span>
			</a>
		</div>

		<nav class="site-header__nav">
			<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => false, ) ); ?>
		</nav>

		<div class="site-header__actions">
			<ul class="social-links">
				<?php if(get_field('twitter', 'options')): ?>
					<li class="social-links__item"><a href="<?php the_field('twitter', 'options'); ?>" class="social-links__link"><?php echo get_icon('twitter'); ?></a></li>
				<?php endif; ?>
				<?php if(get_field('facebook', 'options')): ?>
					<li class="social-links__item"><a href="<?php the_field('facebook', 'options'); ?>" class="social-links__link"><?php echo get_icon('facebook'); ?></a></li>
				<?php endif; ?>
				<?php if(get_field('instagram', 'options')): ?>
					<li class="social-links__item"><a href="<?php the_field('instagram', 'options'); ?>" class="social-links__link"><?php echo get_icon('instagram'); ?></a></li>
				<?php endif; ?>
				<?php if(get_field('youtube', 'options')): ?>
					<li class="social-links__item"><a href="<?php the_field('youtube', 'options'); ?>" class="social-links__link"><?php echo get_icon('youtube'); ?></a></li>
				<?php endif; ?>
					<li class="social-links__item"><a href="/" class="social-links__link"><svg class="icon icon-email" width="23px" height="17px" viewBox="0 0 23 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(1.000000, 1.000000)" stroke="CurrentColor" stroke-width="2"><rect x="0" y="0" width="21" height="15" rx="2"></rect><polyline stroke-linecap="round" stroke-linejoin="round" points="0.296792238 1.18332242 10.6112253 10.2115437 20.7210206 1.18332242"></polyline></g></g></svg></a></li>
			</ul>
			<div class="site-header__actions-search">
				<svg class="icon icon-search" width="24px" height="25px" viewBox="0 0 24 25" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(2.000000, 2.000000)" stroke="CurrentColor" stroke-width="3"><circle cx="8.73107491" cy="8.73107491" r="8.73107491"></circle><line x1="14.5891942" y1="14.9567191" x2="20.6324751" y2="21" id="Path-2"></line></g></g></svg>
			</div>
		</div>


		<button class="site-header--nav-btn" type="button">
			<span class="site-header--nav-box">
				<span class="site-header--nav-inner"><span>Show menu</span></span>
			</span>
		</button>
	</div>
	<nav class="site-header--nav site-header--nav__mobile">
		<?php wp_nav_menu( array('theme_location' => 'mobile') ); ?>
		<ul class="social-links">
			<?php if(get_field('twitter', 'options')): ?>
				<li class="social-links__item"><a href="<?php the_field('twitter', 'options'); ?>" class="social-links__link"><?php echo get_icon('twitter'); ?></a></li>
			<?php endif; ?>
			<?php if(get_field('facebook', 'options')): ?>
				<li class="social-links__item"><a href="<?php the_field('facebook', 'options'); ?>" class="social-links__link"><?php echo get_icon('facebook'); ?></a></li>
			<?php endif; ?>
			<?php if(get_field('instagram', 'options')): ?>
				<li class="social-links__item"><a href="<?php the_field('instagram', 'options'); ?>" class="social-links__link"><?php echo get_icon('instagram'); ?></a></li>
			<?php endif; ?>
			<?php if(get_field('youtube', 'options')): ?>
				<li class="social-links__item"><a href="<?php the_field('youtube', 'options'); ?>" class="social-links__link"><?php echo get_icon('youtube'); ?></a></li>
			<?php endif; ?>
				<li class="social-links__item"><a href="/" class="social-links__link"><svg class="icon icon-email" width="23px" height="17px" viewBox="0 0 23 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(1.000000, 1.000000)" stroke="CurrentColor" stroke-width="2"><rect x="0" y="0" width="21" height="15" rx="2"></rect><polyline stroke-linecap="round" stroke-linejoin="round" points="0.296792238 1.18332242 10.6112253 10.2115437 20.7210206 1.18332242"></polyline></g></g></svg></a></li>
		</ul>
	</nav>
	<div class="site-header__search">
		<div class="site-header__search-form">
			<?php get_template_part('searchform'); ?>
		</div>
	</div>
</header>
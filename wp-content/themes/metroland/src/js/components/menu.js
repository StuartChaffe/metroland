jQuery(document).ready(function($) {
	// Primary nav
	var $menuBtn = $(".site-header--nav-btn");
	var $menuContainer = $(".site-header--nav__mobile");
	$menuBtn.click(function() {
		$(this).toggleClass("is-active");
		$("body").toggleClass("menu-active");
		$menuContainer.toggleClass("is-active");
	});
});

jQuery(document).ready(function( $ ) {
	$( ".site-header--nav__mobile .menu-item-has-children > a" ).after( '<span class="dropdown-button">&nbsp;</span>' );
	$('.dropdown-button').click(function() {
		if ($(this).hasClass("is-active")) {
			$(this).removeClass('is-active');
			$(this).next('.sub-menu').slideUp('normal');
		} else {
			$(this).addClass('is-active');
			$(this).next('.sub-menu').slideDown('normal');
		}

		return false;
	});
});

jQuery(document).ready(function( $ ) {

	$(".site-header__actions-search").on("click", function(){
		$(".site-header__search").toggleClass("site-header__search--active");
	  });
});
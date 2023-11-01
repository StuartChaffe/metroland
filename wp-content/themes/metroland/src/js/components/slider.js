jQuery(document).ready(function($) {
	$(".banner-slider").slick({
		// settings: "unslick",
		speed: 200,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: false,
		autoplaySpeed: 10000,
		pauseOnHover: false,
		arrows: true,
		infinite: true,
		dots: false,
	});

	var lightbox = GLightbox({
		selector: '.wp-block-image a'
	  });
});

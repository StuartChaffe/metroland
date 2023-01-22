jQuery(document).ready(function($) {
	$(".banner-slider").slick({
		// settings: "unslick",
		speed: 200,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		arrows: true,
		infinite: true,
		dots: false,

		responsive: [
			{
				breakpoint: 930,
				settings: {
				slidesToShow: 1,
				}
			},
			{
				breakpoint: 400,
				settings: {
				slidesToShow: 1,
				}
			}
		]
	}); 
});
jQuery(document).ready(function( $ ) {
	var containerEl = document.querySelector('.list-filter');
	var selectFilter = document.querySelector('.select-filter');
	var initialFilter = 'all';
	var hash = window.location.hash.replace(/^#/g, '');

	if (!containerEl) {
        return false;
    }

	var mixer = mixitup(containerEl, {
        animation: {
            duration: 100,
			nudge: true,
            reverseOut: false,
        },
        load: {
            filter: initialFilter
        }
    });

	selectFilter.addEventListener('change', function() {
		var selector = selectFilter.value;

		mixer.filter(selector);
	});

});


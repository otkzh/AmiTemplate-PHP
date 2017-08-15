

export default function() {

	smoothScroll.init({
		selector: '[data-scroll]',
		selectorHeader: null,
		speed: 500,
		easing: 'easeInOutCubic',
		offset: 74
		//callback: function ( anchor, toggle ) {}
	});

};

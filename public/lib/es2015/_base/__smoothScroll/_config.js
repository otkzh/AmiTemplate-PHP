/************************
スムーズスクロール
site:https://github.com/cferdinandi/smooth-scroll
***********************/

//node_module
import smoothScroll from "./_smoothScroll.js";

//original-css
//none

//export
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

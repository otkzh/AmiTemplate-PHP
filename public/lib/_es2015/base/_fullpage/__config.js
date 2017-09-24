/************************
fullPage.js
site: https://github.com/alvarotrigo/fullPage.js

※scrollOverflow機能をtrueにしたい場合の注意事項。
fullpage.jsのimport利用時、IScrollとの依存関係が正しく読み込まれない。対策として、IScrollをグローバルスコープに設定すること。
↓
例：wenpack
new webpack.ProvidePlugin({
IScroll: "fullpage.js/vendors/scrolloverflow.min"
})

***********************/

//node_module
import 'fullpage.js'
import 'fullpage.js/dist/jquery.fullpage.css';

//original-css
import './__style.scss';

//export
export default function(){

	$(function() {
		$('#fullpage').fullpage({

			//Navigation
			menu: '#menu',
			lockAnchors: false,
			anchors:['fpItem__1', 'fpItem__2'],
			navigation: true,
			navigationPosition: 'right',
			navigationTooltips: ['firstSlide', 'secondSlide'],
			showActiveTooltip: false,
			slidesNavigation: true,
			slidesNavPosition: 'bottom',

			//Scrolling
			css3: true,
			scrollingSpeed: 700,
			autoScrolling: true,
			fitToSection: true,
			fitToSectionDelay: 1000,
			scrollBar: false,
			easing: 'easeInOutCubic',
			easingcss3: 'ease',
			loopBottom: false,
			loopTop: false,
			loopHorizontal: true,
			continuousVertical: false,
			continuousHorizontal: false,
			scrollHorizontally: false,
			interlockedSlides: false,
			dragAndMove: false,
			offsetSections: false,
			resetSliders: false,
			fadingEffect: false,
			normalScrollElements: '#element1, .element2',
			scrollOverflow: true,
			scrollOverflowReset: false,
			scrollOverflowOptions: null,
			touchSensitivity: 15,
			normalScrollElementTouchThreshold: 5,
			bigSectionsDestination: null,

			//Accessibility
			keyboardScrolling: true,
			animateAnchor: true,
			recordHistory: true,

			//Design
			controlArrows: true,
			verticalCentered: true,
			//sectionsColor: ['#f2f2f2', '#4BBFC3', '#7BAABE', 'whitesmoke', '#000'],
			paddingTop: '0px',
			paddingBottom: '0px',
			fixedElements: '#header, .footer',
			responsiveWidth: 0,
			responsiveHeight: 0,
			responsiveSlides: false,
			parallax: false,
			parallaxOptions: {type: 'reveal', percentage: 62, property: 'translate'},

			//Custom selectors
			sectionSelector: '.main__item',
			slideSelector: '.main__slide',

			lazyLoading: true,

			//events
			onLeave: function(index, nextIndex, direction){

			},
			afterLoad: function(anchorLink, index){

			},
			afterRender: function(){

			},
			afterResize: function(){

			},
			afterResponsive: function(isResponsive){

			},
			afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){

			},
			onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){


			}
		});
	});
};


export default function() {

	$(function(){
		$('.mfp-popup').magnificPopup({
			type:'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'mfp-slide_bottom'
		});

	});

};

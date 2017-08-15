export default function headerFn() {


	$(window).scroll(function () {

		var scrollTop =
			document.documentElement.scrollTop || document.body.scrollTop; // IE、Firefox、Opera || Chrome、Safari
		if (scrollTop <= 45) {
			$(".header").removeClass('active');
		} else {
			$(".header").addClass('active');
		}

	});


	$('.menu').on('click', function () {
		$('.gnav').toggleClass('active');
	});


};
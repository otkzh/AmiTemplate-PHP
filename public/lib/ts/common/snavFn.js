export default function snavFn() {


	if ($(".snav").length) {

		$(window).scroll(function () {

			var scrollTop =
				document.documentElement.scrollTop || document.body.scrollTop; // IE、Firefox、Opera || Chrome、Safari
			if (scrollTop <= 400) {
				$(".snav").removeClass('scroll');
			} else {
				$(".snav").addClass('scroll');
			}

		});


		$('.snav label').on('click', function () {
			$('.snav').toggleClass('active');
		});

	}


};
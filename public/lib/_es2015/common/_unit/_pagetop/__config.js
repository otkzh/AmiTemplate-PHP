/************************
pagetop
site:AmiTemplate-orign
***********************/

//original-css
import './__style.scss';

//export
export default function() {

  var topBtn = $('.pagetop');

	topBtn.hide();

	//スクロールが100に達したらボタン表示
	$(window).scroll(function () {
		if ($(this).scrollTop() > 200) {
			topBtn.stop(false,false).fadeIn();
		} else {
			topBtn.stop(false,false).fadeOut();
		}
	});

	//スクロールしてトップ
	topBtn.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
	});

};
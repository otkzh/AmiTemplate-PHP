export default function() {

	//m-から始まるclassを取得
	$.extend($.expr[":"], {
		"m-": function (el) {
			return el.className.match(/\m-\S+/g);
		}
	});

	//inview設定1
	$(':m-').on('inview', function (event, isInView, visiblePartX, visiblePartY) {
		var $this = $(this);
		if (isInView) {
			$this.addClass('inview');
		} else {
			$this.removeClass('inview');
		}
	});

	$('.u__cm-img,.u__bts_icon_kizuita,.u__bts_kizuita,.u-pict__item,.target').on('inview',function(event, isInView, visiblePartX, visiblePartY){
				var $this = $(this);
				if (isInView) {
					$this.addClass('inview');
				} else {
				}
	});


};

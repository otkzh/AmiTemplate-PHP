$(document).on('ready', function () {

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
			//$this.removeClass('inview');
		}
	});

	//inview設定２
	$('.inViewBlock').on('inview', function (event, isInView, visiblePartX, visiblePartY) {
		var $this = $(this);
		//console.log($this);
		if (isInView) {
			$this.parent().addClass('inview');
		} else {
			$this.parent().removeClass('inview');
		}
	});


});
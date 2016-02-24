	
require(["plugins/imagesLoaded","plugins/jquery.sliderPro/min","require-plugins/css.min!plugins/jquery.sliderPro/css"], function() {
	
$(".sp-image").imagesLoaded(function(){

	$(this).fadeIn();

	$(function(){
	
		$('#slider_main').sliderPro({
			
			width: 720,//横幅
			height:400,
			arrows: true,//左右の矢印
			fadeArrows: false,
			buttons: false,//ナビゲーションボタン
			slideDistance:8,//スライド同士の距離
			visibleSize: '100%',//前後のスライドを表示
			touchSwipe : false,//タッチスワイプをするか否か 初期:true
	
		});
	
	});

});

/*
$(function(){
	  $('#popularity').sliderPro({
    width: 265,//横幅
    arrows: true,//左右の矢印
    buttons: false,//ナビゲーションボタン
    slideDistance:32,//スライド同士の距離
    visibleSize: '100%',//前後のスライドを表示
    autoHeight:true,
//	forceSize: 'fullWidth'
	  });
});

$(function(){
	  $('#interview').sliderPro({

    width: 265,//横幅
    arrows: true,//左右の矢印
    buttons: false,//ナビゲーションボタン
    slideDistance:32,//スライド同士の距離
    visibleSize: '100%',//前後のスライドを表示
    autoHeight:true,
//	forceSize: 'fullWidth'
	  });
});
 
 */

});//require

//記述例

//require(['require-plugins/css.min!test']); //css読み込み

//jqueryプラグイン

require(['plugins/scroll']);

//動き

//個別ページ

if($("body.home").length){

require(['page/home']);

};//home



//共通


//pagetop


$(function() {
	var topBtn = $('#pagetop a');
	topBtn.hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
});


//add class メニュープルダウン用

$(function(){
  $("#menu,.close-bt").on("click", function() {
      $("#menu,#gnav").toggleClass("close"); 
  });
});

//--------------------all


require(['plugins/jquery.waypoints.min'], function() {
	
$(function() { //jqueryを使うおまじない。
    $("#conts").waypoint({// #kirikae を基準に下記を実行
      handler: function(direction) {
         $(".banner").toggleClass("close");//#headerに.scrollクラスをつけたりけしたりするよ
      }
    });

    $("#asides").waypoint({// #kirikae を基準に下記を実行
      handler: function(direction) {
         $(".banner").toggleClass("close");//#headerに.scrollクラスをつけたりけしたりするよ
      }
    });

});


});//require





$(window).on("load pjax:load", function(){
  console.log("test");

  $('#slider_main').sliderPro({

    width: 720, //横幅
    height: 400,
    arrows: true, //左右の矢印
    fadeArrows: false,
    buttons: false, //ナビゲーションボタン
    slideDistance: 8, //スライド同士の距離
    visibleSize: '100%', //前後のスライドを表示
    touchSwipe: false, //タッチスワイプをするか否か 初期:true

  });
  
  $(".sp-image").fadeIn("slow");

});
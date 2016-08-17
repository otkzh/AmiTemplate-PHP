/// <reference path="../typings/jquery.d.ts"/>
$(function () {

  var windowH: number;
  var fixedArea: any = $("#contents");
  var cHeight: number;
  var animationFlag: boolean;
  var timer: any = false;
  var scrollSize: number;

  //ブラウザのサイズを取得
  function WH() {
    return $(window).height();
  }
  //console.log("windowの高さ ：　"+WH());

  windowH = WH();
  $(window).on('resize', function () {
    if (timer !== false) {
      clearTimeout(timer);
    }
    timer = setTimeout(function () {
      windowH = WH();
      //console.log("リサイズ時：" + windowH);
    }, 200);
  });

  //ios9 fixedフィックスバグ
  $("#main").css({
    transform: "translate3d(0,0,0)"
  });

  //基本のセット
  function setA() {
    
    fixedArea.css({
      position: 'fixed',
      top: -windowH,
      marginTop: windowH,
      width: '100%'
    });

    //スクロール用に設定
    $('body').css({
      height: "3000px"
    });
    
    console.log("test");
  }//setA
  
  setA();

  //スクロール毎に稼働
  $(window).on('scroll', function () {
    scrollSize = $(window).scrollTop();

    if (animationFlag && windowH >= scrollSize) {

      animationFlag = false;
      setA();
      //console.log("高さ入ったよ");

    } else if (!animationFlag && windowH < scrollSize) {

      animationFlag = true;
      fixedArea.css({
        position: "relative"
      });
      $('body').css({
        height: 'auto'
      });
      var fixedAreaHeight = fixedArea.height() + windowH;
      //console.log(fixedAreaHeight);
      $("#all").css({
        height: fixedAreaHeight,
        overflow: 'hidden'
      });
      
      //console.log("高さ超えたよ");
    }
  })

});
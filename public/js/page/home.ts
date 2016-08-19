/// <reference path="../typings/jquery.d.ts"/>

$(document).on('ready pjax:ready', function () {
  if ($("body").hasClass("home")) {
    homeV();
    //console.log("実行");
  } else {
    $("#container").removeAttr("style");
    //console.log("削除");
  }
});

function homeV() {

  var windowH: number = funWH();
  var fixedArea: any = $("#container");
  var cHeight: number;
  var animationFlag: boolean;
  var timer: any = false;
  var scrollSize: number;
  var hoge = "";
  var marginH:number = 300;

  $(window).on('resize', function () {
    if (timer !== false) {
      clearTimeout(timer);
    }
    timer = setTimeout(function () {
      windowH = funWH();
      //console.log("リサイズ後の高さ" + windowH);
    }, 200);
  });

  //ios9 fixedフィックスバグ
  $("#conts,#side").css({
    transform: "translate3d(0,0,0)"
  });

  //基本のセット
  function setA() {
    fixedArea.css({
      position: 'fixed',
      top: 0,
      marginTop: 110
    });
    $("#main").css({
      'min-height': funWH() * 2 + marginH
    });
  } //setA

  setA();

  //スクロール毎に稼働
  $(window).on('scroll', function () {

    scrollSize = $(window).scrollTop();
    //console.log("スクロール量取得 : " + scrollSize);

    var WH = funWH() + marginH;
    //console.log(WH);

    if (WH >= scrollSize) {

      setA();
      //console.log("高さ入ったよ");

    } else if (WH < scrollSize) {

      fixedArea.css({
        position: "relative",
        marginTop: WH
      });
      //console.log("高さ超えたよ");
    }
  })

  //ブラウザのサイズを取得
  function funWH() {
    return $(window).height();
  }

} //function homeV
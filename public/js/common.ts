//--------------------- ページ切替時の挙動 ---------------------//

//切替え準備中
$(window).on('pjax:fetch', function () {

  $('#main,#pan,#main-v,#footer').velocity({
    opacity: 0
  }, {
    duration: 300,
    queue: false
  });

});

//切替えスタート
$(document).on('pjax:ready', function () {
  //console.timeEnd('pjax: fetch -> ready');
  $('#main,#footer').velocity("fadeIn", {
    duration: 300,
    queue: false
  });
  $('#pan').velocity("fadeIn", {
    duration: 700,
    queue: false
  });
});

//--------------------- pagetop ---------------------//

//use：plugins/smooth-scroll.js
declare var smoothScroll: any;

//トップへ戻るがニョキッ
$(document).on("ready pjax:ready", function () {

  var amount = 500;
  var $pagetop = $("#pagetop");

  smoothScroll.init({
    speed: 500,
    updateURL: false,
    offset: 100
  });

  $(window).on("load scroll resize", getScrollTop);

  function getScrollTop() {
    var scrollSize = $(window).scrollTop();
    if (scrollSize < amount) {
      $pagetop.addClass("hide");
    } else if (scrollSize > amount) {
      $pagetop.removeClass("hide");
    }
  };

}); //トップへ戻るがニョキッ


//--------------------- 文字数カット ---------------------//

//thanks：http://black-flag.net/jquery/20121010-4227.html

$(document).on("ready pjax:ready", function () {
  cutText(100, '.js-cut-text');
  cutText(50, '.js-cut-text-small');
});

function cutText(num: number, ele: any) {
  var $setElm = $(ele);
  var cutFigure = num; // カットする文字数
  var afterTxt = ' …'; // 文字カット後に表示するテキスト

  $setElm.each(function () {
    var textLength = $(this).text().length;
    var textTrim = $(this).text().substr(0, (cutFigure));
    if (cutFigure < textLength) {
      $(this).html(textTrim + afterTxt);
    };
  });

};

//--------------------- menu ---------------------//

$(document).on('click', '#js-menu a', headerMenuOpen);
$(document).on('click', 'body.open-menu,#js-menu.open-menu a', headerMenuClose);
$(window).on("load resize", headerMenuClose);

function headerMenuOpen(){
  var durationW: number = $(window).width() / 1.5;
  var allSlide = $(window).width() - 70;
  $("body,#js-menu").addClass("open-menu");
  $("#header,#main-v,#pan,#main,#footer").velocity({
    left: -allSlide
  }, {
    duration: durationW,
    easing: "easeOutQuad",
    queue: false
  });
  return false;
};

function headerMenuClose() {
  var durationW = $(window).width() / 1.5;
  $("#pan,#main-v,#main,#footer,#header").velocity({
    left: 0
  }, {
    duration: durationW,
    easing: "easeOutQuad",
    queue: false
  });
  $("#js-menu.open-menu").removeClass("open-menu");
};
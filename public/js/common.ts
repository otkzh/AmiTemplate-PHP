//--------------------- pagetop ---------------------//

//use：plugins/smooth-scroll.js
declare var smoothScroll: any;

smoothScroll.init({
  speed: 500,
  updateURL: false,
  offset: 100
});

//トップへ戻るがニョキッ
$(document).on("ready pjax:ready", function(){

  var amount = 500;
  var pagetop = $("#pagetop");

  $(window).on("load scroll resize", getScrollTop);

  function getScrollTop() {
    var scrollSize = $(window).scrollTop();
    if (scrollSize < amount) {
      pagetop.addClass("hide");
    } else if (scrollSize > amount) {
      pagetop.removeClass("hide");
    }
  };

}); //トップへ戻るがニョキッ

//--------------------- 文字数カット ---------------------//

//thanks：http://black-flag.net/jquery/20121010-4227.html

$(document).on("ready pjax:ready", cutText(100,'.js-cut-text'));

$(document).on("ready pjax:ready", cutText(50,'.js-cut-text-small'));

function cutText(num,ele){
    var $setElm = $(ele);
    var cutFigure = num; // カットする文字数
    var afterTxt = ' …'; // 文字カット後に表示するテキスト
 
    $setElm.each(function(){
        var textLength = $(this).text().length;
        var textTrim = $(this).text().substr(0,(cutFigure))
 
        if(cutFigure < textLength) {
            $(this).html(textTrim + afterTxt);
        }
    });
});
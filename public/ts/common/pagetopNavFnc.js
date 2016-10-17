$(window).on("load pjax:load", function () {

  var amount = 500;
  var $pagetop = $("#pagetop a");

  $(window).on("load scroll resize", function () {
    var scrollSize = $(window).scrollTop();
    if (scrollSize < amount) {
      $pagetop.addClass("hide");
    } else if (scrollSize > amount) {
      $pagetop.removeClass("hide");
    }
  });

  smoothScroll.init({
    speed: 500,
    updateURL: false,
    offset: 100
  });

});
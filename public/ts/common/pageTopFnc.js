$(function () {

  var amount = 100;
  var $pagetop = $("#pagetop a");
  $pagetop.hide();

  $(window).on("load scroll resize", function () {
    var scrollSize = $(window).scrollTop();
    if (scrollSize < amount) {
      $pagetop.fadeOut();
    } else if (scrollSize > amount) {
      $pagetop.fadeIn();
    }
  });

});

smoothScroll.init({
  speed: 500,
  updateURL: false,
  //offset: 100
});
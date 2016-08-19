//thanks! http://sensebahn.com/develop/524/

//--------------------- tochイベント ---------------------//

$(document).on("ready pjax:ready", tochORhover);
               
function tochORhover() {
    if (Modernizr.touchevents) {

      var linkTouchStart = function () {
        var thisAnchor = $(this);
        var touchPos = thisAnchor.offset().top;
        var moveCheck = function () {
          var nowPos = thisAnchor.offset().top;
          if (touchPos == nowPos) {
            thisAnchor.addClass("touch");
          }
        }
        setTimeout(moveCheck, 100);
      }
      var linkTouchEnd = function () {
        var thisAnchor = $(this);
        var hoverRemove = function () {
          thisAnchor.removeClass("touch");
        }
        setTimeout(hoverRemove, 200);
      }

      $(document).on('touchstart', 'a', linkTouchStart);
      $(document).on('touchend', 'a', linkTouchEnd);

    } // touch event

  )
};
//thanks! http://sensebahn.com/develop/524/
//use:Modernizr

//$(document).on("ready pjax:ready", linkTouchFunc());

function linkTouchFunc() {

  if (Modernizr.touchevents) {

    var thisAnchor:any;

    var linkTouchStart = function () {
      thisAnchor = $(this);
      var touchPos = thisAnchor.offset().top;
      var moveCheck = function () {
        var nowPos = thisAnchor.offset().top;
        if (touchPos == nowPos) {
          thisAnchor.addClass("touch");
        }
      }
      setTimeout(moveCheck, 100);
    };
    
    var linkTouchEnd = function () {
      thisAnchor = $(this);
      var hoverRemove = function () {
        thisAnchor.removeClass("touch");
      }
      setTimeout(hoverRemove, 200);
    }

    $(document).on('touchstart', 'a', linkTouchStart);
    $(document).on('touchend', 'a', linkTouchEnd);

  } // touch event

};
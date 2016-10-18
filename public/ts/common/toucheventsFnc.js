$(document).on('ready pjax:ready', function () {

    if (Modernizr.touchevents) {
        var thisAnchor;
        var linkTouchStart = function () {
            thisAnchor = $(this);
            var touchPos = thisAnchor.offset().top;
            var moveCheck = function () {
                var nowPos = thisAnchor.offset().top;
                if (touchPos == nowPos) {
                    thisAnchor.addClass("touch");
                    //console.log("addtouch");
                }
            };
            setTimeout(moveCheck, 100);
        };
        var linkTouchEnd = function () {
            thisAnchor = $(this);
            var hoverRemove = function () {
                thisAnchor.removeClass("touch");
                //console.log("removetouch");
            };
            setTimeout(hoverRemove, 200);
        };
        $(document).on('touchstart', 'a', linkTouchStart);
        $(document).on('touchend', 'a', linkTouchEnd);
    };

});

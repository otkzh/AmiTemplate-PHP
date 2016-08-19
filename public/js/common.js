smoothScroll.init({
    speed: 500,
    updateURL: false,
    offset: 100
});
$(document).on("ready pjax:ready", function () {
    var amount = 500;
    var pagetop = $("#pagetop");
    $(window).on("load scroll resize", getScrollTop);
    function getScrollTop() {
        var scrollSize = $(window).scrollTop();
        if (scrollSize < amount) {
            pagetop.addClass("hide");
        }
        else if (scrollSize > amount) {
            pagetop.removeClass("hide");
        }
    }
    ;
});
$(document).on("ready pjax:ready", cutText(100, '.js-cut-text'));
$(document).on("ready pjax:ready", cutText(50, '.js-cut-text-small'));
function cutText(num, ele) {
    var $setElm = $(ele);
    var cutFigure = num;
    var afterTxt = ' …';
    $setElm.each(function () {
        var textLength = $(this).text().length;
        var textTrim = $(this).text().substr(0, (cutFigure));
        if (cutFigure < textLength) {
            $(this).html(textTrim + afterTxt);
        }
    });
}
;
$(document).on('ready pjax:ready', function () {
    if ($("body").hasClass("home")) {
        homeV();
    }
    else {
        $("#container").removeAttr("style");
    }
});
function homeV() {
    var windowH = funWH();
    var fixedArea = $("#container");
    var cHeight;
    var animationFlag;
    var timer = false;
    var scrollSize;
    var hoge = "";
    var marginH = 300;
    $(window).on('resize', function () {
        if (timer !== false) {
            clearTimeout(timer);
        }
        timer = setTimeout(function () {
            windowH = funWH();
        }, 200);
    });
    $("#conts,#side").css({
        transform: "translate3d(0,0,0)"
    });
    function setA() {
        fixedArea.css({
            position: 'fixed',
            top: 0,
            marginTop: 110
        });
        $("#main").css({
            'min-height': funWH() * 2 + marginH
        });
    }
    setA();
    $(window).on('scroll', function () {
        scrollSize = $(window).scrollTop();
        var WH = funWH() + marginH;
        if (WH >= scrollSize) {
            setA();
        }
        else if (WH < scrollSize) {
            fixedArea.css({
                position: "relative",
                marginTop: WH
            });
        }
    });
    function funWH() {
        return $(window).height();
    }
}
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
            };
            setTimeout(moveCheck, 100);
        };
        var linkTouchEnd = function () {
            var thisAnchor = $(this);
            var hoverRemove = function () {
                thisAnchor.removeClass("touch");
            };
            setTimeout(hoverRemove, 200);
        };
        $(document).on('touchstart', 'a', linkTouchStart);
        $(document).on('touchend', 'a', linkTouchEnd);
    }
}
;

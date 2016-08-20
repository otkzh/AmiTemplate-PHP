$(window).on('pjax:fetch', function () {
    $('#main,#pan,#main-v').velocity({
        opacity: 0
    }, {
        duration: 300,
        queue: false
    });
});
$(document).on('pjax:ready', function () {
    $("#main,#pan").css({
        opacity: 0
    });
    $('#main').velocity({
        opacity: 1
    }, {
        duration: 300,
        queue: false
    });
    $('#pan').velocity({
        opacity: 1
    }, {
        duration: 700,
        queue: false
    });
});
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
        }
        else if (scrollSize > amount) {
            $pagetop.removeClass("hide");
        }
    }
    ;
});
$(document).on("ready pjax:ready", function () {
    cutText(100, '.js-cut-text');
    cutText(50, '.js-cut-text-small');
});
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
        ;
    });
}
;
$(document).on('click', '#js-menu a', function () {
    var allSlide = $(window).width() - 70;
    $("body,#js-menu").addClass("open-menu");
    $("#header,#main-v,#pan,#main,#footer").velocity({
        left: -allSlide
    }, {
        duration: 500,
        queue: false
    });
    return false;
});
$(document).on('click', 'body.open-menu,#js-menu.open-menu a', function () {
    $("#pan,#main-v,#main,#footer,#header").velocity({
        left: 0
    }, {
        duration: 500,
        queue: false
    });
    $("#js-menu.open-menu").removeClass("open-menu");
    return false;
});
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

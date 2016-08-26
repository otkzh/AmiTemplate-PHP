$(document).on('pjax:fetch', function () {
    $('#main-v,#main,#pan,#footer').velocity({
        opacity: 0
    }, {
        duration: 300,
        queue: false
    });
});
$(document).on('pjax:ready', function () {
    $('#main,#footer').velocity("fadeIn", {
        duration: 300,
        queue: false
    });
    $('#pan').velocity("fadeIn", {
        duration: 700,
        queue: false
    });
});
$(document).on('ready pjax:ready', function () {
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
$(document).on('click', '#js-menu a', headerMenuOpen);
$(document).on('click', 'body.open-menu,#js-menu.open-menu a', headerMenuClose);
$(window).on("load resize", headerMenuClose);
function headerMenuOpen() {
    var durationW = $(window).width() / 1.5;
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
}
;
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
}
;
$(window).on("load pjax:load", linkTouchFunc());
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
function linkTouchFunc() {
    if (Modernizr.touchevents) {
        var thisAnchor;
        var linkTouchStart = function () {
            thisAnchor = $(this);
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
            thisAnchor = $(this);
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

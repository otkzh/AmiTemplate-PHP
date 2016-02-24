//thanks! http://sensebahn.com/develop/524/

if (Modernizr.touchevents) {

var linkTouchStart = function(){
    thisAnchor = $(this);
    touchPos = thisAnchor.offset().top;
    moveCheck = function(){
        nowPos = thisAnchor.offset().top;
        if(touchPos == nowPos){
            thisAnchor.addClass("touch");
        }
    }
    setTimeout(moveCheck,100);
}
var linkTouchEnd = function(){
    thisAnchor = $(this);
    hoverRemove = function(){
        thisAnchor.removeClass("touch");
    }
    setTimeout(hoverRemove,200);
}

$(document).on('touchstart','a',linkTouchStart);
$(document).on('touchend','a',linkTouchEnd);

}// touch event

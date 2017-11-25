/*

1. PC表示かどうか

2. gnav-deepか、ソレ以外をクリックしたか

ソレ以外 -> 3
gnav-deep -> 4

３．allDell
gnav-deepからactiveとる
gnav-deep__navをfadeOut

４．itemAdd

allDell & gnav-deepにactiveつける
他のgnav-deepからactiveとる

*/


export default function () {

  var deep = '.gnav-deep';
  var nav = '.gnav-deep__nav';

  $.fn.deepIn = function() {
    this.stop(false,false).fadeIn();
    return this;
  };

  $(nav).hide();

  docClick();

  function docClick(){
    $(document).on('click touchend', function(event) {
      var item = $(event.target);
      var item_deep = item.closest(deep);
      if (!item_deep.length) {
        allDell();
      }else{
        itemAdd(event);
      }
    });
  }

  //3
  function allDell(){
    $(deep).removeClass('active');
    $(nav).stop(false,false).fadeOut();
  }

  //4
  function itemAdd(event){
    var item = $(event.target);
    var item_deep = item.closest(deep);
    var item_nav = item.nextAll(nav);
    if(!item_deep.hasClass('active')){
      allDell();
      item_deep.addClass('active');
      item_nav.stop(false,false).fadeIn();
    }else{
      item_deep.removeClass('active');
      item_nav.stop(false,false).fadeOut();
    }
  }



};

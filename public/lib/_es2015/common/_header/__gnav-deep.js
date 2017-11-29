/*
jquery-deepNav
site:non(AmiTemplate-Orign)
*/

export default function () {

  //------class名setting

  var deepClass = '.gnav-deep';
  var navClass = '.gnav-deep__nav';
  var menubarClass = '.menubar';
  var addDeepClassName = 'active';

  //------メニューバー表示非表示（PC<->SP表示切替）に合わせてdeepNavの表示方法切替

  //表示
  $.fn.deepIn = function() {
    if ($(menubarClass).is(':hidden')) {
      this.stop(false,false).fadeIn();
    } else {
      this.stop(false,false).slideDown('100');
    }
    return this;
  };

  //非表示
  $.fn.deepOut = function() {
    if ($(menubarClass).is(':hidden')) {
      this.stop(false,false).fadeOut();
    } else {
      this.stop(false,false).slideUp('100');
    }
    return this;
  };

  //------リサイズ時に、deepNavのstyleをd:nのみにする

  // var timer = false;
  // $(window).resize(function() {
  //     if (timer !== false) {
  //         clearTimeout(timer);
  //     }
  //     timer = setTimeout(function() {
  //       $(deepClass).removeClass(addDeepClassName);
  //       $(navClass).removeAttr('style').css({'display':'none'});
  //     }, 200);
  // });

  //--------以下クリック時の挙動

  $(navClass).hide();
  onClickFn();

  //クリックした対象が「gnav-deep」か「gnav-deep以外」か判定
  function onClickFn(){
    $(document).on('pointerdown', function(event) {
      var item = $(event.target);
      var item_deep = item.closest(deepClass);
      if (item_deep.length) { // deepNav
        itemAdd(event);
      }else{ // deepNav以外
        allDell();
      }
    });
  }

  //gnav-deepからactiveとる・deepNavを非表示にする
  function allDell(){
    $(deepClass).removeClass(addDeepClassName);
    $(navClass).deepOut();
    $('.menubar').removeClass('active');
  }

  //クリックした対象が、activeClassを持っていれば -> .active削除・deepNavを非表示
  //クリックした対象が、activeClassを持ってなければ -> .active追加・deepNavを表示
  function itemAdd(event){
    var item = $(event.target);
    var item_deep = item.closest(deepClass);
    var item_nav = item.nextAll(navClass);
    if(!item_deep.hasClass(addDeepClassName)){
      allDell();
      item_deep.addClass(addDeepClassName);
      item_nav.deepIn();
    }else{
      item_deep.removeClass(addDeepClassName);
      item_nav.deepOut();
    }
  }

};

export default function () {



  //gnav_bg要素を生成
  var gnavBg = $('<div class="gnav__bg" style="display:none;"></div>');
  $('body').append(gnavBg);


  //クリック時にスクロールを止める
  var scrollpos;

  $('.menubar').on('pointerdown', function(){
    if(!$(this).hasClass('active')) {
      scrollpos = $(window).scrollTop();
      $('body').css({
        position: 'fixed',
        top: -1 * scrollpos
      });
      $('.menubar').addClass('active');
      $('.gnav').addClass('active');
      $('.gnav__bg').fadeIn();
    } else {
      $('body').attr({style:''});
      window.scrollTo( 0 , scrollpos );
      $('.menubar').removeClass('active');
      $('.gnav').removeClass('active');
      $('.gnav__bg').fadeOut();
    }
  });

};

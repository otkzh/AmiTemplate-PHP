export default function () {



  //要素を生成

  var gnavBg = $('<div class="gnav__bg" style="display:none;"></div>');
  $('body').append(gnavBg);


  //スクロールを止める
  var state = false;
  var scrollpos;

  $('.menubar').on('pointerdown', function(){
    if(state == false) {
      scrollpos = $(window).scrollTop();
      $('body').css({
        position: 'fixed',
        top: -1 * scrollpos
      });
      $('.menubar').toggleClass('active');
      $('.gnav').toggleClass('active');
      $('.gnav__bg').fadeIn();
      state = true;
    } else {
      $('body').attr({style:''});
      window.scrollTo( 0 , scrollpos );
      $('.menubar').toggleClass('active');
      $('.gnav').toggleClass('active');
      $('.gnav__bg').fadeOut();
      state = false;
    }
  });

};

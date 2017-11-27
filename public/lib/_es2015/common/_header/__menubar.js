export default function () {
  var state = false;
  var scrollpos;

  $('.menubar').on('pointerdown', function(){
    if(state == false) {
      scrollpos = $(window).scrollTop();
      $('body').addClass('fixed').css({'top': -scrollpos});
      $('.menubar').toggleClass('active');
      $('.gnav').toggleClass('active');
      state = true;
    } else {
      $('body').removeClass('fixed').css({'top': 0});
      window.scrollTo( 0 , scrollpos );
      $('.menubar').toggleClass('active');
      $('.gnav').toggleClass('active');
      state = false;
    }
  });

};

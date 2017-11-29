export default function () {



  //gnav_bg要素を生成
  var gnavBg = $('<label class="gnav__bg" style="display:none;"></label>');
  $('body').append(gnavBg);

  //gnav以外を叩いたときに、クローズするように設定
  $('.gnav__bg').on('pointerdown', function(e) {
    alert($(this));
    $(this).fadeOut();
  });

  $('.menubar').on('pointerdown', function(){
    if(!$(this).hasClass('active')) {
      $('.menubar').addClass('active');
      $('.gnav').addClass('active');
      $('.gnav__bg').fadeIn();
    } else {
      $('.menubar').removeClass('active');
      $('.gnav').removeClass('active');
      $('.gnav__bg').fadeOut();
    }
  });





};

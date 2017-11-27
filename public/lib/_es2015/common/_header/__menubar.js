export default function () {

  $('.menubar').on('pointerdown', function () {
    $(this).toggleClass('active');
    $('.gnav').toggleClass('active');
  });

};

export default function () {

  $('.menubar').on('click', function () {
    $(this).toggleClass('active');
    $('.gnav').toggleClass('active');
  });

};

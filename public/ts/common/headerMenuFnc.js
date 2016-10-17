$(function () {

  $(".HeaderMenu a,.HeaderGnav a").on("click", function () {
    $(".HeaderMenu,.HeaderGnav").toggleClass('open');
    return;
  });

});
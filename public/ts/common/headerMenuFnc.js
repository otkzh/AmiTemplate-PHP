$(document).on('ready pjax:ready', function () {
  $("#menu,.gNav").removeClass("open");
});

$("#menu").on("click", function () {
  $("#menu,.gNav").toggleClass("open");
});
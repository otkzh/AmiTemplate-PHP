$(function () {

  $(".cat2").css("display", "none");

  $(".cat1").mouseover(function (event) {
    $(".cat1").css("display", "none");
    $(".cat2").css("display", "table");
  });
  $(".cat2").mouseout(function (event) {
    $(".cat1").css("display", "table");
    $(".cat2").css("display", "none");
  });

  $(".cat3").css("display", "none");

  $(".cat1").mouseover(function (event) {
    $(".cat1").css("display", "none");
    $(".cat3").css("display", "table");
  });
  $(".cat3").mouseout(function (event) {
    $(".cat1").css("display", "table");
    $(".cat3").css("display", "none");
  });

  $(".cat4").css("display", "none");

  $(".cat1").mouseover(function (event) {
    $(".cat1").css("display", "none");
    $(".cat4").css("display", "table");
  });
  $(".cat4").mouseout(function (event) {
    $(".cat1").css("display", "table");
    $(".cat4").css("display", "none");
  });

  $(".cat5").css("display", "none");

  $(".cat1").mouseover(function (event) {
    $(".cat1").css("display", "none");
    $(".cat5").css("display", "table");
  });
  $(".cat5").mouseout(function (event) {
    $(".cat1").css("display", "table");
    $(".cat5").css("display", "none");
  });
});
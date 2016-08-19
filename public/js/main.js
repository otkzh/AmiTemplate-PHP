require.config({
  paths: {
    touchevents: 'plugins/ami.touchevents',
    waypoints: 'plugins/jquery.waypoints.min',
  },
  shim: {
    //'touchevents': ['jquery'],
  }
});

console.log("mainJS読み込み");

$(document).on('ready pjax:ready', function () {
  console.log("更新ごとに実行");
});

/*
//hover-touch events
requirejs(['touchevents']);

//waypoint
requirejs(['waypoints'], function () {
  var waypoints = $('#gnav').waypoint({
    handler: function (direction) {
      console.log("Hello world");
    }
  })
});

//スムーズスクロール
requirejs(["plugins/smooth-scroll"], function (smoothScroll) {
  smoothScroll.init({
    speed: 1000,
    updateURL: false
  });
});

*/
require.config({
  paths: {
    // モジュール
    jquery: 'vendor/jquery-2.2.0.min',
    waypoints: 'plugins/waypoints.min',
  },
});

//hover-touch events
requirejs(['jquery','plugins/ami.touchevents']);

//waypoint
requirejs(['jquery','waypoints'], function () {
  var waypoint = new Waypoint({
    element: document.getElementById('conts'),
    handler: function(direction) {
      console.log("waypoint-test");
    }
  })
});

//スムーズスクロール
requirejs(["plugins/smooth-scroll"], function(smoothScroll) {
  smoothScroll.init({
    speed: 1000 ,
    updateURL: false
  });
});


requirejs(['jquery'], function ($) {
//------------jqueryの記述はここから

//------------jqueryの記述はここまで
});

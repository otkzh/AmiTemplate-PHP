require.config({
  paths: {
    jquery: 'vendor/jquery-2.2.0.min',
    touchevents: 'plugins/ami.touchevents',
    waypoints: 'plugins/jquery.waypoints.min',
  },
  shim: {
        'touchevents': ['jquery'],
        'waypoints': ['jquery']
  }
});

//hover-touch events
requirejs(['touchevents']);

//waypoint
requirejs(['waypoints'], function () {
  var waypoints = $('#gnav').waypoint({
    handler: function(direction) {
      console.log("Hello world");
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

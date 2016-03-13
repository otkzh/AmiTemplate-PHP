require.config({
  paths: {
    jquery: 'vendor/jquery-2.2.0.min',
    touchevents: 'plugins/ami.touchevents',
    waypoints: 'plugins/jquery.waypoints.min',
    pjax: 'plugins/jquery.pjax.min',
  },
  shim: {
    'touchevents': ['jquery'],
    'waypoints': ['jquery'],
    'pjax': ['jquery'],
  }
});

//hover-touch events
requirejs(['touchevents']);


//pjax
requirejs(['pjax'], function () {
  //----------------------

  $.pjax({
    area: [
    //'#pan ul, .main-contents',
    '#pan ul , #main-title',
    'body'
  ],
    load: {
      head: 'base, meta, link',
//            css: true,
//            script: true
    },
    cache: {
      click: true,
      submit: true,
      popstate: true,
      get: true,
      post: false
    },
    scope: {
      search: ['/search/'],
      $search: {
        form: 'form:not([method])'
      },
      '/': ['/', '#search', '!/contact/']
    },
    rewrite: function (document, area, host) {
      var newBodyClass = $('body', document).attr('class');
      $('body').attr('class', newBodyClass);
    },
    //scrollTop: null,
    ajax: {
      timeout: 2000
    },
    wait: 700,
    speedcheck: true
  });

  // 6 events and 30 callbacks exists.
  $(document).bind('pjax:fetch', function () {
    $('#pan,#main-area h1,#js-conts-container').stop()
      .animate({
        opacity: 0
      }, 500);
  });
  $(document).bind('pjax:ready', function () {
    //$("img.delay").lazyload();
  });


  //----------------------
});

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


requirejs(['jquery'], function ($) {
  //------------jqueryの記述はここから

  //------------jqueryの記述はここまで
});
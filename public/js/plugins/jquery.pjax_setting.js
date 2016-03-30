$.pjax({
  area: [
  '#pan, .main-ttl, #conts',
  'body'
],
  load: {
    head: 'base, meta, link',
    //      css: true,
    script: true,
  },
  cache: {
    click: true,
    submit: true,
    popstate: true,
    get: true,
    post: false
  },
  //    scope: {
  //      search: ['/search/'],
  //      $search: {
  //        form: 'form:not([method])'
  //      },
  //      '/': ['/', '#search', '!/contact/']
  //    },
  rewrite: function (document, area, host) {

    //bodyclassを差し替え
    var newBodyClass = $('body', document).attr('class');
    $('body').attr('class', newBodyClass);

    //lazyload用img切り替え
    $(area, document).find('img').each(function () {
      this.setAttribute('data-original', this.src);
      this.setAttribute('src', 'data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==');
    }).addClass('delay');

  },
  //    scrollTop: null,
  ajax: {
    timeout: 2000
  },
  wait: 700,
  //    speedcheck: true
});

// 6 events and 30 callbacks exists.
$(document).bind('pjax:fetch', function () {
  $('#pan,.main-ttl,#conts').stop()
    .animate({
      opacity: 0
    }, 500);
});

$(document).bind('pjax:ready', function () {
  $("img.delay").lazyload({
    effect: "fadeIn"
  });
});
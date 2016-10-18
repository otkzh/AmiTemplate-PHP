$.pjax({
  area: [
    '#pan,#main,#footer',
    //'#all',
    //'body'
  ],
  rewrite: function (document, area, host) {

    //bodyclassを差し替え
    var newBodyClass = $('body', document).attr('class');
    $('body').attr('class', newBodyClass);

  },
  ajax: {
    timeout: 2000
  },
  wait: 500,
  //  load: {
  //    head: 'base, meta, link',
  //    css: true,
  //    script: true,
  //    reload: '[src*="home.js",src*="type.js"]'
  //  },
  //  cache: {
  //    click: true,
  //    submit: true,
  //    popstate: true,
  //    get: true,
  //    post: false
  //  },
  //  scope: {
  //    search: ['/search/'],
  //    $search: {
  //      form: 'form:not([method])'
  //    },
  //    '/': ['/', '#search', '!/contact/']
  //  },
  //  scrollTop: null,
  //  speedcheck: true
});

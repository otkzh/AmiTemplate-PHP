'use strict';

new window['pjax-api'].Pjax({

  areas: [
    '#main,#pan',
    //'#container',
    'body'
  ],
//  link:[
//    'a:not([target]),a[]'
//  ],
  load: {
//    head: 'base, meta, link',
//    css: true,
//    script: true,
//  reload: '[src*="require.js"]'
  },
  fetch: {
    //timeout: 3000,
    wait: 500,
  },
  rewrite: function (document, area, host) {

    //bodyclassを差し替え
    var newBodyClass = $('body', document).attr('class');
    $('body').attr('class', newBodyClass);

  }
});



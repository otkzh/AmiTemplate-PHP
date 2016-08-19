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

window.addEventListener('pjax:fetch', function () {
  console.time('pjax: fetch -> ready');
//  console.log("読み込み開始");
  $('#main,#pan,#main-v').stop()
    .animate({
      opacity: 0
    }, 500);
});

document.addEventListener('pjax:ready', function () {
  console.timeEnd('pjax: fetch -> ready');
  $("#main,#pan").css({
    opacity:0
  });
  $('#main').stop()
    .animate({
      opacity: 1
    }, 500);
  $('#pan').stop()
    .animate({
      opacity: 1
    }, 1000);
//  console.log("読み込み終了");
});

//console.log("動作テスト完了");


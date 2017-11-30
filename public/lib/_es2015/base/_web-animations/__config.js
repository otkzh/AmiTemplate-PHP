/************************
Web Animations API
***********************/

//caniuse
export function caniuse() {

  const el = document.getElementById('caniuse');

  if (Modernizr.animation) {
    // supported
    el.innerHTML = 'つかえるよ';
  } else {
    // not-supported
    el.innerHTML = 'つかえないよ';
  }

};

//polyfill-test
export function caniuse_polyfill() {

  const el = document.getElementById('caniuse_polyfill');

  // Element.animateにアニメーションの内容を渡して実行する
  const item = el.animate({
    opacity: [0.5, 1],
    transform: ['scale(0.5)', 'scale(1)'],
  }, {
    direction: 'alternate',
    duration: 500,
    iterations: Infinity,
  });

  item.cancel();

  el.addEventListener("pointerdown", function(ev) {
    item.pause();
  });



};

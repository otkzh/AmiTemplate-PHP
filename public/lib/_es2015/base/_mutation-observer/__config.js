/************************
mutationObserver

MutationObserverについて:http://okakacacao.wpblog.jp/technology/mutation-observer
つかい方例:https://qiita.com/munieru_jp/items/a6f1433652124a2165e4
ブラウザ対応状況:https://caniuse.com/#feat=mutationobserver
polyfillはとくにいらない
***********************/

//caniuse
export function caniuse() {

  const el = document.getElementById('caniuse');

  if (Modernizr.mutationobserver) {
    el.innerHTML = 'つかえるよ';
  } else {
    el.innerHTML = 'つかえないよ';
  }

};

//test
export function caniuse_polyfill() {

  //監視ターゲットの取得
  const el = document.getElementById("caniuse_test");

  //オブザーバーの作成
  const observer = new MutationObserver(ev => {

    console.log(ev);
    console.log('変更前：' + ev[0].removedNodes[0].data);
    console.log('変更後：' + ev[0].addedNodes[0].data);

  });

  //監視オプションの作成
  const options = {
    attributes: true,
    attributeOldValue: true,
    characterData: true,
    characterDataOldValue: true,
    childList: true,
    subtree: true
  };

  //監視の開始
  observer.observe(el, options);

  //----

  el.addEventListener("pointerdown", function(ev) {
    ev.target.innerHTML = 'consoleに変更情報が出たよ';
  });

};


//sample
export function sample1() {


};

export default function () {

  //監視対象のセレクター
  const targets = document.querySelectorAll('.interso-target');

  //セレクターの数だけ実行
  for (let el of targets){
    observerFn(el);
  };

  //実行内容
  function observerFn(target){

    // オプションを指定する。
    const options = {
      //root: document.querySelector('#all'),
      rootMargin: '-20%',　//root（通常はviewpoert）のmarginをコントロール
      threshold: [0, 0.5, 1] //発火のタイミング(0=bttom,1=top)
    }

    // オプションとともにIntersectionObserverオブジェクトを作成する。
    const observer = new IntersectionObserver((entry) => {

      let e = entry[0];

      if(e.isIntersecting == true){
        e.target.innerHTML = '入ってるよ（監視中）';
      }else{
        e.target.innerHTML = '出てるよ（監視中）';
      }

    }, options);

    // 監視したい要素をobserve
    observer.observe(target);
  };

};

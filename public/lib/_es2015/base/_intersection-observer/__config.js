export default function () {

  const targets = document.querySelectorAll('.interso-target');

  // オプションを指定する。
  const options = {
    //root: document.querySelector('#all'),
    rootMargin: '-20%',　//root（通常はviewpoert）のmarginをコントロール
    //threshold: [0,　0.5, 1.0]
  }

  // オプションとともにIntersectionObserverオブジェクトを作成する。
  let observer = new IntersectionObserver((entry) => {

    let e = entry[0];
    // console.log(e);

    if(e.isIntersecting == true){
      $(e.target).html(e.target.className + '入ったよ（監視中）');
    }else{
      $(e.target).html(e.target.className + '出たよ（監視中）');
    }

  }, options);

  // 監視したい要素をobserveする。例：observer.observe(target);
  for (let el of targets){
    observer.observe(el);
  }

};

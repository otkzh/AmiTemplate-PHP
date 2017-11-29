export default function () {

  const target = document.querySelector('.interso-target');

  // オプションを指定する。
  const options = {
    //root: document.querySelector('#all'),
    rootMargin: '-20%',　//root（通常はviewpoert）のmarginをコントロール
    //threshold: [0,　0.5, 1.0]
  }

  // オプションとともにIntersectionObserverオブジェクトを作成する。
  const observer = new IntersectionObserver((entry) => {

    let e = entry[0];
    console.log(e);

    if(e.isIntersecting == true){
      $(e.target).html(e.target.className + '入ったよ');
    }else{
      $(e.target).html(e.target.className + '出たよ');
    }

  }, options);

  // 監視したい要素をobserveする。
  observer.observe(target);


};

export function base() {

  //監視対象のセレクター
  const targets = document.querySelectorAll('.interso-target');

  //セレクターの数だけ実行
  for (let el of targets){
    observerFn(el);
  };

  //実行内容
  function observerFn(el){

    // オプションを指定
    const options = {
      rootMargin: '-20%',　//root（通常はviewpoert）のmargin
      //root: document.querySelector('#all'), // 判定要素(通常はviewpoert)指定
      //threshold: [0, 0.5, 1] //発火のタイミング(通常は、0=bttom/1=top)
    }

    // IntersectionObserverオブジェクトを作成
    const observer = new IntersectionObserver((entry) => {

      let e = entry[0];

      if(e.isIntersecting == true){
        e.target.innerHTML = '入ってるよ（監視中）';
        e.target.classList.add('js-inview');
      }else{
        e.target.innerHTML = '出てるよ（監視中）';
        e.target.classList.remove('js-inview');
      }

    }, options);

    // 監視したい要素をobserve
    observer.observe(el);
  };

};


export function sample() {

  //監視対象のセレクター
  const targets = document.querySelectorAll('.js-target');
  for (let el of targets){
    observerFn(el);
    $(el).css({
      'opacity':'0',
      'position':'relative',
      'top':'50'
    });
  };

  //実行内容
  function observerFn(el){

    const options = {
      rootMargin: '-10%'
    };

    const observer = new IntersectionObserver((entry) => {
      let e = entry[0];
      if(e.isIntersecting == true){
        $(e.target).animate({
          opacity: 1,
          top:0,
        },500);
      }else{
        $(e.target).animate({
          opacity: 0,
          top:50,
        },300);
      }
    }, options);

    observer.observe(el);
  };

};

/*
jquery-deepNav
site:non(AmiTemplate-Orign)
*/

export default function () {

  const mq = window.matchMedia( "(min-width: 667px)" );

  const gnavDeeps = document.querySelectorAll('.gnav-deep');
  const gnavDeeps_child = Array.from(gnavDeeps,el => el.children[0]);

  if (Modernizr.touchevents) {
    touch_listener(gnavDeeps_child);
  } else {
    mouse_listener(gnavDeeps_child);
  }

  function mouse_listener(els){
    Array.from(els,el => {
      el.addEventListener("mouseenter", function(ev) {
        if (mq.matches) {
          remveClassAllFn(els);
          addClassFn(ev.target);
          openAnimateion(ev.target.nextElementSibling);
        } else{
          console.log('SPの処理');
        };
      });
    });
  }

  function touch_listener(els){
    Array.from(els,el => {
      el.addEventListener("touchstart", function(ev) {
        if (mq.matches) {
          if(ev.target.classList.contains('js-active') == false){
            ev.stopPropagation();
            ev.preventDefault();
            remveClassAllFn(els);
            addClassFn(ev.target);
            openAnimateion(ev.target.nextElementSibling);
          }else{
            remveClassAllFn(els);
          }
        }else{
          console.log('SPの処理');
        };
      });
    });
  }

  function openAnimateion(el){
    el.animate([
      {opacity: 0,transform:'translate3D(-50%,-30px,0)'},
      {opacity: 1,transform:'translate3D(-50%,0,0)'}
    ], {
      direction: 'alternate',
      duration: 300,
      easing: 'ease'
    });
  }

  document.addEventListener("mousedown", function(ev) {
    if(!ev.target.classList.contains('gnav-deep__link')){
      remveClassAllFn(gnavDeeps_child);
    }
  });
  window.addEventListener("scroll", function(ev) {
    remveClassAllFn(gnavDeeps_child);
  });

  function remveClassAllFn(els){
    Array.from(els,el => el.classList.remove('js-active'));
  }

  function addClassFn(el){
    el.classList.add('js-active');
  }


  // for (const val of els) {

  // }
  //
  // document.addEventListener("pointerdown", function(ev) {
  // 	for (const val of els) {
  // 		val.classList.remove('js-active');
  // 	}
  // });

};

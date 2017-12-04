export default function () {

  const body = document.querySelector('body');
  const gnav = document.querySelector('.gnav');
  const menubar = document.querySelector('.menubar');

  menubar.addEventListener("pointerdown", function(ev) {
    menubar.classList.toggle('js-active');
    gnav.classList.toggle('js-active');
    gnavSlide_in(gnav);
  });

  function gnavSlide_in(el){

    const bg = el.animate([
      {opacity: 0},
      {opacity: 1}
    ], {
      direction: 'alternate',
      duration: 300,
      easing: 'ease'
    });
    const nav = el.children[0].animate([
      {opacity: 0,transform:'translate3D(50%,0,0)'},
      {opacity: 1,transform:'translate3D(0,0,0)'}
    ], {
      direction: 'alternate',
      duration: 300,
      easing: 'ease'
    });

    body.style.pointerEvents = "none";
    bg.play();
    nav.play();
    bg.addEventListener('finish', (ev) => {
      body.style.pointerEvents = "auto";
    });

  };

};

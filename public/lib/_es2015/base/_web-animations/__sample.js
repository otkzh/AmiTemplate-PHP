export function sample1() {
  const el = document.querySelector('.dot');
  console.log(el);

  el.style.height = '20px';
  el.style.width = '20px';
  el.style.backgroundColor = '#333';
  el.style.borderRadius = '50%';

  const item = el.animate({
    opacity: [0.5, 1],
    transform: ['scale(0.5)', 'scale(1)'],
  }, {
    direction: 'alternate',
    duration: 1000,
    iterations: Infinity,
  });

};

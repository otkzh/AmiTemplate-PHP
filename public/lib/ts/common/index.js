
//--------------------- common script ---------------------//

import headerScrollFn from './headerFn.js';
headerScrollFn();

import snavFn from './snavFn.js';
snavFn();


$('.menubar').on('click', function () {
	$('.gnav,.menubar').toggleClass('active');
});

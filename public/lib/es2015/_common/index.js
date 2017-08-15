
//--------------------- common script ---------------------//

import headerScrollFn from './__header/headerFn.js';
headerScrollFn();

import snavFn from './__header/snavFn.js';
snavFn();


$('.menubar').on('click', function () {
	$('.gnav,.menubar').toggleClass('active');
});

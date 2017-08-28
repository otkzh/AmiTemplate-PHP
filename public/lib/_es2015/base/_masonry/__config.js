/************************
masonry
site: https://github.com/desandro/masonry

webpackでの利用方法
↓
https://masonry.desandro.com/extras.html
***********************/

//node_module
var jQueryBridget = require('jquery-bridget');
var Masonry = require('masonry-layout');
jQueryBridget( 'masonry', Masonry, $ );


//original-css
//import './__style.scss';

//export
export default function() {

$('.grid').masonry({
  itemSelector: '.grid-item',
  // use element for option
  percentPosition: true
});

};

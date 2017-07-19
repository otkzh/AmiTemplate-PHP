//--------------------- ES2015用のポリフィル ---------------------//
//site:https://babeljs.io/docs/usage/polyfill/

import "babel-polyfill";


//--------------------- jquery(グローバル) ---------------------//
//site:https://jquery.com/

//var jQuery = require('JQuerys');
import jQuery from "JQuerys";
window.$ = window.jQuery = jQuery;


//--------------------- スマフォタッチ時のイベント操作 ---------------------//
//site:non (amiten)

import touchEventsFn from './touchEventsFn.js';
touchEventsFn();


//--------------------- スムーズスクロール ---------------------//
//site:https://github.com/cferdinandi/smooth-scroll

import smoothScroll from './smoothScroll.js';
smoothScroll.init({
	selector: '[data-scroll]',
	selectorHeader: null,
	speed: 500,
	easing: 'easeInOutCubic',
	offset: 74
	//callback: function ( anchor, toggle ) {}
});

//--------------------- inview ---------------------//
//site: https://github.com/protonet/jquery.inview

//import inview from "inView";


//--------------------- Vue(グローバル) ---------------------//
//site:https://jp.vuejs.org/

//import Vue from "Vue";
//window.Vue = Vue;


//--------------------- Swiper ---------------------//
//site:http://idangero.us/swiper/

//import Swiper from "Swiper";
//import "SwiperCSS";
//window.Swiper = Swiper;


//--------------------- magPopup ---------------------//
//site: http://dimsemenov.com/plugins/magnific-popup/

//import magPopup from "magPopup";
//import "magPopupCSS";

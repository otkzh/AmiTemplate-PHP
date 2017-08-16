//--------------------- base ---------------------//

import "babel-polyfill";

import $ from "jquery";
window.$ = window.jQuery = $;

import inview_config from './_base/__inview/_config.js';
inview_config();

require("../../../node_modules/magnific-popup/dist/jquery.magnific-popup.js");
import magPopup_config from  "./_base/__magPopup/_config.js";
magPopup_config();

import smoothScroll_config from  "./_base/__smoothScroll/_config.js";
smoothScroll_config();

import swiper_config from './_base/__swiper/_config.js';
swiper_config();

import touchevents_config from './_base/__touchevents/_config.js';
touchevents_config();

import vue_config from './_base/__vue/_config.js';
vue_config();

//--------------------- common ---------------------//

import headerFn from './_common/__header/headerFn.js';
headerFn();

//--------------------- page ---------------------//
//各ページ独自の記述を格納

//home
import mainV_config from './_page/__home/_main-v.js';
import './_page/__home/_main-v.scss';

if($('body.home').length){
	mainV_config();
};

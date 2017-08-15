
//--------------------- ポリフィル ---------------------//
//　site:https://babeljs.io/docs/usage/polyfill/

import "babel-polyfill";

//--------------------- jquery（グローバル） ---------------------//
// site:https://jquery.com/

import jQuerys from "../../../../node_modules/jquery/dist/jquery.js";
window.$ = window.jQuery = jQuerys;

//--------------------- スムーズスクロール（グローバル）  ---------------------//
//site:https://github.com/cferdinandi/smooth-scroll

import smoothScrolls from './__smoothScroll/_smoothScroll.js';
window.smoothScroll = smoothScrolls;
import smoothScroll_config from './__smoothScroll/_config.js';
smoothScroll_config();

//--------------------- inView ---------------------//
//site: https://github.com/protonet/jquery.inview

import inview from "inView";
window.inview = inview;
import inview_config from './__inview/_config.js';
import './__inview/_style.scss';
inview_config();

//--------------------- ライトボックス ---------------------//
//site: http://dimsemenov.com/plugins/magnific-popup/
//ajax表示使用不可_エラーが出力されます。

import magPopup from "magPopup";
import "magPopupCSS";
import magPopup_config from './__magPopup/_config.js';
import './__magPopup/_style.scss';
magPopup_config();

//有料だけど高機能ライトボックス↓
//https://sachinchoolur.github.io/lightgallery.js/
//npm i -d lightgallery.js

//--------------------- スライダー（グローバル） ---------------------//
//site:http://idangero.us/swiper/

//import Swiper from "Swiper";
//window.Swiper = Swiper;
//import "SwiperCSS";
//import swiper_config from './__swiper/_config.js';
//swiper_config();
//import  './__swiper/_config.scss';

//--------------------- Vue(グローバル)  ---------------------//
// site:https://jp.vuejs.org/

//import Vue from "Vue";
//window.Vue = Vue;

//--------------------- タッチイベント対応  ---------------------//
//site:none (amiTemplate)

import touchEvents from './__touchEvents/_config.js';
touchEvents();

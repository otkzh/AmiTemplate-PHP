//--------------------- base ---------------------//

import "babel-polyfill";

import inview_config from './base/_inview/__config.js';
inview_config();

import magPopup_config from  "./base/_mag-popup/__config.js";
if($('body.home').length){
	magPopup_config();
};

import colorbox_config from  "./base/_colorbox/__config.js";
colorbox_config() ;

import smoothScroll_config from  "./base/_smooth-scroll/__config.js";
smoothScroll_config();

import swiper_config from './base/_swiper/__config.js';
swiper_config();

import touchevents_config from './base/_touch-events/__config.js';
touchevents_config();

import popwin_config from './base/_popup-window/__config.js';
popwin_config();

import masonry_config from './base/_masonry/__config.js';
//masonry_config();

import vue_config from './base/_vue/__config.js';
if($('body.home').length){
	vue_config();
};

//--------------------- common ---------------------//

import headerFn from './common/_header/__menubar.js';
headerFn();

//--------------------- page ---------------------//
//各ページ独自の記述を格納

//home
import mainV_config from './page/_home/__main-v.js';
import './page/_home/__main-v.scss';

if($('body.home').length){
	mainV_config();
};

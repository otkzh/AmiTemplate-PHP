//--------------------- base ---------------------//

//Babelで変換したコードを利用する場合に必要なポリフィル
import "babel-polyfill";

//jqueryをグローバル化する場合は、以下をコメントアウトを解除
//window.$ = window.jQuery = $;

//---------------------slider関連

import swiper_config from './base/_swiper/__config.js';
swiper_config();

//---------------------scroll-animation関連

import inview_config from './base/_inview/__config.js';
inview_config();

//---------------------ライトボックス・モーダル関連

import magPopup_config from  "./base/_mag-popup/__config.js";
if($('.mfp-btn').length){
  magPopup_config();
};

import colorbox_config from  "./base/_colorbox/__config.js";
colorbox_config() ;

//---------------------スムーズスクロール関連

import smoothScroll_config from  "./base/_smooth-scroll/__config.js";
smoothScroll_config();

//---------------------画像遅延読込み関連

import layzr_config from './base/_layzr/__config.js';
layzr_config();

//---------------------プログレッシブフレームワーク

import vue_config from './base/_vue/__config.js';
if($('body.vue').length){
  vue_config();
};

//---------------------SVGコントロール

import snapsvg_config from './base/_snapsvg/__config.js';
if($('body.snapsvg').length){
  snapsvg_config();
};

//---------------------その他

import masonry_config from './base/_masonry/__config.js';
//masonry_config();

import fullpage_config from './base/_fullpage/__config.js';
if($('body.fullpage').length){
  fullpage_config();
};

import csv_config from './base/_csv/__config.js';
if($('body.csv').length){
  csv_config();
};

//--------------------- common ---------------------//

import headerFn from './common/_header/__menubar.js';
headerFn();

//タッチホバーイベント
import touchevents_config from './common/_unit/_touch-events/__config.js';
touchevents_config();

//別ページでのポップアップ
import popwin_config from './common/_unit/_popup-window/__config.js';
popwin_config();


//--------------------- page ---------------------//

//home
import mainV_config from './page/_home/__main-v.js';
import './page/_home/__main-v.scss';

if($('body._etc').length){
  mainV_config();
};

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
if($('body._fullpage').length){
  fullpage_config();
};

import csv_config from './base/_csv/__config.js';
if($('body._csv').length){
  csv_config();
};

//googlemap
import loadGoogleMapsApi from 'load-google-maps-api-2';
import * as gmap_setting from './base/_googlemap/__config.js';
if($('body._googlemap').length){
  loadGoogleMapsApi.key = 'AIzaSyAwM3YlNU_nPJaQyg_wPkiDsdkvBOEQVmU';//APIキー入力
  loadGoogleMapsApi().then(function (googleMaps) {
    gmap_setting.sample1();//googlemapのセッティング
  }).catch(function (err) {console.error(err);});
};

import drawer_config from './base/_drawer/__config.js';
if($('body._drawer').length){
  drawer_config();
};

//--------------------- common ---------------------//

import headerFn from './common/_header/__menubar.js';
headerFn();

import gnavDeepFn from './common/_header/__gnav-deep.js';
gnavDeepFn();

//タッチホバーイベント
import touchevents_config from './common/_unit/_touch-events/__config.js';
touchevents_config();

//ページトップへボタンのフェード
import pagetop_config from './common/_unit/_pagetop/__config.js';
pagetop_config();

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


import './_base/index.js';
import './_common/index.js';


//--------------------- page ---------------------//
//各ページ独自の記述を格納

//home
import mainV_config from './_page/__home/_main-v.js';
import './_page/__home/_main-v.scss';

if($('body.home').length){
	mainV_config();
};

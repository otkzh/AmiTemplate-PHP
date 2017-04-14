//vender
require('expose?$!expose?jQuery!expose?window.jQuery!./common/vendor/jquery-2.2.0.min');
require("expose?!Velocity");
require("expose?!Pjax");

window.smoothScroll = require('./common/plugins/smooth-scroll');
window.sliderPro = require('./common/plugins/jquery.sliderPro/min');

//common
require("./common/pjax/config");
require("./common/headerMenuFnc");
require("./common/toucheventsFnc");
require("./common/pageTopFnc");

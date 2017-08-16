/************************
inview
site: https://github.com/protonet/jquery.inview
***********************/

//node_module
import inView from "../../../../../node_modules/jquery-inview/jquery.inview.js";

//original-css
import './_style.scss';

//export
export default function(){

	$('.inview-target').on('inview', function(event, isInView) {
		if (isInView) {
			$(this).addClass('inview');
		} else {
			$(this).removeClass('inview');
		}
	});

};

export default function(){

	$(window).on('load',function(){
		setTimeout(function(){
			$('.main-v__item').addClass('active');
		},2000);
	});

};

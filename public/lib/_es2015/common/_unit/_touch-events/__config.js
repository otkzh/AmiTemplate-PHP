/************************
none(ami-original)
site:none
need:pepjs（pointerEventsを利用する場合に必要なポリフィル）
***********************/

//export
export default function () {

  var element = 'a,label,button';

  $(element).attr('touch-action', 'pan-y');

  $(document).on('pointerenter', element, function(){
    $(this).addClass("touch");
  });

  $(document).on('pointerleave', element, function(){
    $(this).removeClass("touch");
  });

};

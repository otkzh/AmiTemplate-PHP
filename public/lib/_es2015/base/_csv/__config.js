
/************************
inview
site: https://github.com/protonet/jquery.inview
npm:https://www.npmjs.com/package/jquery-inview
***********************/

//node_module
import Encoding from "encoding-japanese";

//original-css
//import './__style.scss';

export default function () {

  $.ajax({
    type: 'get',
    url:'../lib/img/csv/sample.php',
    dataType : 'json'
  }).done(function(data) {

    $('#csv_output').text("成功コンソール確認してね");
    console.log(data);

  }).fail(function(){
    $('#csv_output').text('失敗しました');
  });

};

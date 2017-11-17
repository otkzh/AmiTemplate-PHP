/************************
Vue
site: https://jp.vuejs.org/
***********************/

//node_module
import Vue from 'Vue';

//original-css
//import './__style.scss';

export default function () {

  var d = new $.Deferred;

  var DATAS = $.ajax({
    type: 'get',
    url:'../lib/img/csv/csv.php',
    dataType : 'json'
  }).done(function(data) {

    $('#csv_output').text("表示されるよ");
    return d.promise();

  }).fail(function(){
    $('#csv_output').text('失敗しました');
    d.reject();
    return;
  });



  //--------------------- 処理-その1 ---------------------//
    //とりあえずVueへデーター渡してみる
    DATAS.done(function(data) {
      goodsVM.app = data;
    });

    //Vue
    var goodsVM = new Vue({
      el: '#app',
      data: {
        app: "表示中"
      }
    });




};

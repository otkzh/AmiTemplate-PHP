<?php
setlocale(LC_ALL, 'ja_JP.UTF-8');

//ファイル
$file = './data.csv';

//ファイルゲットして、文字コード変更
$data = file_get_contents($file);
$data = mb_convert_encoding($data, 'UTF-8', 'sjis-win');

//とりあえず配列に-------------
//sample:https://blog.fenrir-inc.com/jp/2014/07/php-csv.html
$lines = explode("\r\n", $data);
foreach ($lines as $line) {
  $records[] = explode(",",$line);
}

// 出力確認
/*
print '<pre>';
var_dump($records);
print '</pre>';
*/

//連想配列に変換-------------

$dataAry = array();
$keyData = array();
$isFirst = true;

foreach($records as $k => $v) {

  if ($isFirst) {

    // タイトル行を取得
    $keyData = $v;
    $isFirst = false;

  } else {

    //連想配列に変換
    $_simpleData = array();
    foreach($keyData as $k2 => $v2){
      $_simpleData[$v2] = $v[$k2];
    }
    $dataAry[] = $_simpleData;
  }
}

/*
print '<pre>';
var_dump($dataAry);
print '</pre>';
*/

//整形：空白行と空白列削除------------

//keyが空白なものを削除
$key_check = array();
foreach($dataAry as $k => $v ){
  $_simpleData = array();
  foreach($v as $key => $val ){
    if($key){
      $_simpleData[$key] = $val;
    }
  }
  $key_check[] = $_simpleData;
}

//行が空白のものを削除
$val_check = array();
foreach($key_check as $k => $v ){
  $_judge = array_filter($v);
  if(!empty($_judge)){
    $val_check[] = $v;
  }
}

//改行コードに改行追加
$br_check = array();
foreach($val_check as $k => $v ){
  $_simpleData = array();
  foreach($v as $key => $val ){
    $val = nl2br($val);
    $val = str_replace(array("\r\n", "\r", "\n"), '', $val);
    $key = nl2br($key);
    $key = str_replace(array("\r\n", "\r", "\n"), '', $key);
    $_simpleData[$key] = $val;
  }
  $br_check[] = $_simpleData;
}

/*
print '<pre>';
var_dump($br_check);
print '</pre>';
*/

//配列をjsonに変換----------

echo json_encode($br_check);

?>
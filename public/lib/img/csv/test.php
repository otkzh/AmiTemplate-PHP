<?php

// ファイル名の指定
$readFile = "example.xlsx";

// 連想配列でデータ受け取り
$data = readXlsx($readFile);

// 出力確認
print '<pre>';
var_dump($data);
print '</pre>';

// ファイル名渡したら配列返すラッパー関数
function readXlsx($readFile){
  // ライブラリファイルの読み込み （パス指定し直す）
  require_once dirname(__FILE__) . '/PHPExcel/IOFactory.php';

  // ファイルの存在チェック
  if (!file_exists($readFile)) {
    exit($readFile. "が見つかりません。" . EOL);
  }

  // xlsxをPHPExcelに食わせる
  $objPExcel = PHPExcel_IOFactory::load($readFile);

  // 配列形式で返す
  return $objPExcel->getActiveSheet()->toArray(null,true,true,true);
}

?>
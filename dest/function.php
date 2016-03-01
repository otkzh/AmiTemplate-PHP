<?php

#######################################
#メタデーター管理

$keywords = "キーワード,キーワード";

$sitename = "サイト名";

function my_head_meta(){
//global $keywords;
}

#######################################
#ホスト名取得
$host = ($_SERVER["HTTP_HOST"]);

#1) [ $base_url ]アドレスを修正してください。

#2) [ $cgi_url ]アドレスを修正してください。

#3) httpsバージョンのコメントアウトを外すとサイト内のフォーム関連へのリンクが[ https ]に置き換わります。

#######################################

//ベースURL
$base_url = ("");

//フルパスリンクURL
$link_url = ("http://".$host.$base_url);

//$ssl_url = ("http://".$host.$base_url);  //httpバージョン
$ssl_url = ("https://".$host.$base_url);  //httpsバージョン

//画像へのリンク
$img_url = ($base_url."/img");


#######################################################
#inclideファイルパス取得等
#######################################################

//サーバーフルパス取得
$inc_path = (dirname(__FILE__));

//ファイル名取得
$filename = basename($_SERVER["PHP_SELF"],".php");

//親ディレクト名を取得
$pat = "/\/([^\/]*)\/[^\/]*$/";
preg_match($pat, $_SERVER['REQUEST_URI'], $match);

if (empty($match)) {
  $mydir = "null";
} else{
  $mydir = $match[1];
}

#######################################
#各種タグ関連　　　#
#######################################

//no_link
$no_link = "javascript:void(0);return false;";


?>
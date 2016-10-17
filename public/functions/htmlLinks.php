<?php 

//ホスト名取得
$host = ($_SERVER["HTTP_HOST"]);

$link_url = ("http://".$host.$base_url);  //httpバージョン
//$link_url = ("https://".$host.$base_url);  //httpsバージョン

$my_url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$host.$_SERVER['REQUEST_URI'];

//no_link
$no_link = "javascript:void(0);";

#######################################
#          各種追加リンク関連             #
#######################################

//no_link
//$mypage = "https://google.com";

?>
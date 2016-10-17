<?php 

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

?>
<?php
include 'function.php';
$title = 'トップページ';
$meta_title = ''.$title.' | '.$sitename.'';
$meta_description = 'メタディスクリプション。'.$description;
$body_class = 'home';
?>
<?php include($inc_path.'/inc/head.php') ?>
<?php include($inc_path.'/inc/header.php') ?>
<?php include($inc_path.'/inc/pan.php') ?>
<div id="contents">
<article id="conts">
<?php include($inc_path.'/inc/sample.php') ?> </article>
</div>
<?php include($inc_path.'/inc/footer.php') ?>
<!-- add scripts -->
<!-- //add scripts -->
<?php include($inc_path.'/inc/foot.php') ?>
<?php
include 'function.php';
$title = 'AmiTemplate - php';
$meta_title = ''.$title.' | '.$sitename.'';
$meta_description = 'メタディスクリプション。'.$description;
$body_class = 'home list-page';
$meta_image = $base_url.'/img/home/main.png';
$pan = 0;//パンくずの表示非表示 0:非表示,1〜:表示
?>
<?php include($inc_path.'/inc/head.php'); ?>
<?php include($inc_path.'/inc/header.php'); ?>

<div id="cont">

  <section class="contSec">
    <h2 class="l-ttl">.l-ttl</h2>
    <p>テストテストテストテストテストテストテスト</p>
  </section>

</div>

<div id="side">

  <section class="sideSec">
    <h3 class="s-ttl">.s-ttl</h3>
    <p>テストテストテストテストテストテストテスト</p>
  </section>

</div>

<?php include($inc_path.'/inc/footer.php') ?>
<!-- add scripts -->
<script>
console.log("page-script-<?php echo $title ?>");
</script>
<!-- //add scripts -->
<?php include($inc_path.'/inc/foot.php') ?>
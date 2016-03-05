<?php
include ("../function.php");
$title ="AmiTemplate-表示サンプル-units";
$meta_title ="".$title." | ".$sitename."";
$meta_description ="メタディスクリプション";
$meta_keywords = "".$keywords."";
$body_class ="home";
?>
<?php include ($inc_path."/inc/head.php") ?>
<?php include ($inc_path."/inc/header.php") ?>
<?php include ($inc_path."/inc/pan.php") ?>
<div id="contents">
<article id="conts">
<section>
<h1 class="section-title">a-link</h1>
<div class="assist"> <a href="<?php echo $no_link ?>">テキストリンク</a> </div>
<div class="assist"> <a href="<?php echo $no_link ?>" class="a-underline">かっこいいリンク</a> </div>
<div class="assist">
<a href="<?php echo $no_link ?>"></a>
</div>
<div class="assist">
<a href="<?php echo $no_link ?>"></a>
</div>
<div class="assist">
<a href="<?php echo $no_link ?>"></a>
</div>
</section>
</article>
</div>
<?php include ($inc_path."/inc/footer.php") ?>
<!-- add scripts -->
<!-- //add scripts -->
<?php include ($inc_path."/inc/foot.php") ?>
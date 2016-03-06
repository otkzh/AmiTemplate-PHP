<?php
include ("../function.php");
$title ="AmiTemplate-表示サンプル-units";
$meta_title ="".$title." | ".$sitename."";
$meta_description ="メタディスクリプション";
$meta_keywords = "".$keywords."";
$body_class ="units";
?>
<?php include ($inc_path."/inc/head.php") ?>
<?php include ($inc_path."/inc/header.php") ?>
<?php include ($inc_path."/inc/pan.php") ?>

<div id="contents">
<article id="conts">

<section class="wrapper">
  <h1 class="section-title">基本設計について</h1>
  <h2 class="large-title">classの指定の仕方を統一するが・・・</h2>
  <p>unitsで（全ページ共通として）組み込む場合と、各特殊な場合の考え方を変えなければいけないかも知れない・・・けど、現状は以下のようにclass名を記載していく。</p>
  <ol class="assist list-num">
    <li>例：かっこいいテキストリンク（アンダーライン）+ 矢印の場合は[a-underline-arrow]と記述。</li>
    <li>例：かっこいいボタン（push）+ 矢印の場合は[btn-push-arrow]と記述。</li>
    </ul>
</section>

<section class="wrapper">
  <h1 class="section-title">a-link</h1>
  <ul class="list-base">
    <li>classの指定の仕方は、[a-]でスタートする。装飾は、ハイフン区切りで記載する。</li>
    <li>例：かっこいいリンク（アンダーライン）+ 矢印の場合は[a-underline-arrow]と記述。</li>
    <li>あとは案件に合わせて適宜カスタマイズすればいいと思う。そう思う。</li>
  </ul>

  <div class="assist">
    <a href="<?php echo $no_link ?>">テキストリンク</a>
  </div>
  <div class="assist">
    <a href="<?php echo $no_link ?>" class="a-arrow">テキストリンク矢印</a>
  </div>
  <div class="assist">
    <a href="<?php echo $no_link ?>" target="_blank" rel="nofollow" class="a-arrow">外部リンク</a>
  </div>
  <div class="assist">
    <a href="<?php echo $no_link ?>" class="a-underline">かっこいいリンク（underline）</a>
  </div>
  <div class="assist">
    <a href="<?php echo $no_link ?>" class="a-underline-arrow">かっこいいリンク&矢印</a>
  </div>
  
</section>

<section class="wrapper">
  <h1 class="section-title">btn-link</h1>
  <ul class="list">
    <li>classの指定の仕方は、[btn-]でスタートする。装飾は、ハイフン区切りで記載する。</li>
    <li>例：かっこいいボタン（push）+ 矢印の場合は[btn-push-arrow]と記述。</li>
    <li>あとは案件に合わせて適宜カスタマイズすればいいと思う。そう思う。</li>
  </ul>
  <div class="assist">
    <a href="<?php echo $no_link ?>" class="btn-base">基本ボタン</a>
  </div>
  <div class="assist">
    <a href="<?php echo $no_link ?>" class="btn-base-point">コンバージョンボタン</a>
  </div>
  <div class="assist">
    <a href="<?php echo $no_link ?>" class="btn-base-arrow">矢印付き基本ボタン</a>
  </div>
  <div class="assist">
    <a href="<?php echo $no_link ?>" class="btn-base-point-arrow">矢印付きコンバージョンボタン</a>
  </div>

  <div class="assist">
    <a href="<?php echo $no_link ?>" class="btn-base-arrow" rel="nofollow">外部リンク基本ボタン</a>
  </div>

  <div class="assist">
    <a href="<?php echo $no_link ?>" class="btn-push">プッシュボタン</a>
  </div>
  <div class="assist">
    <a href="<?php echo $no_link ?>" class="btn-push-point">プッシュコンバージョンボタン</a>
  </div>
  <div class="assist">
    <a href="<?php echo $no_link ?>" class="btn-push-arrow">矢印付きプッシュボタン</a>
  </div>


</section>


</article>
</div>

<?php include ($inc_path."/inc/footer.php") ?>
<!-- add scripts -->
<!-- //add scripts -->
<?php include ($inc_path."/inc/foot.php") ?>

<?php
include ("../function.php");
$title ='リストタイプ';
$meta_title = ''.$title.' | '.$sitename.'';
$meta_description = $title.'のページです。'.$description;
$body_class ="list-page";
?>
<?php include ($inc_path."/inc/head.php") ?>
<?php include ($inc_path."/inc/header.php") ?>
<div id="pan">
  <ul class="pan-nav wrap" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
    <li><a href="<?php echo $base_url ?>/" itemprop="url"><span itemprop="title">Home</span></a></li>
    <li><a href="<?php echo $base_url ?>/readme/" itemprop="url"><span itemprop="title">Readme：AmiTemplateについて</span></a></li>
    <li><a href="./" itemprop="url" class="pan-thispage"><span itemprop="title"><?php echo $title?></span></a></li>
  </ul>
</div>

<main id="main">
<header class="main-head wrap">

</header>
<article id="container">

  <div id="conts">
    <section class="conts-sec">
      <h2 class="conts-sec-ttl">マガジンタイプにはつきものの一覧ページです。</h2>
      <h3 class="conts-m-ttl">ポイント</h3>
      <ul class="assist list">
        <li>2カラム（サイドとの一入れ替え）</li>
        <li>コンテンツエリアの横幅を、広めに設定。</li>
        <li>添え文の文字量は100文字に設定しています。</li>
      </ul>
    </section>

    <section class="conts-sec">

      <h2 class="conts-sec-ttl">conts-sec-ttl（contents-section-title）</h2>
      <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>
      <h3 class="conts-l-ttl">conts-l-ttl（contents-large-title）</h3>
      <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>
      <h4 class="conts-m-ttl">conts-m-ttl（contents-middle-title）</h4>
      <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>
      <h5 class="conts-s-ttl">conts-s-ttl（contents-small-title）</h5>
      <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>

    </section>

      <footer class="conts-footer">
        <nav>
          <ul class="conts-footer-arrow">
            <li class="conts-footer-prev"><a href="<?php echo $base_url ?>/units/">Units</a></li>
            <li class="conts-footer-next"><a href="<?php echo $base_url ?>/readme/magazine.php">マガジンタイプ</a></li>
          </ul>
        </nav>
        <aside class="conts-footer-aside">
          <h3 class="conts-m-ttl">おまけ記事</h3>
          <h4 class="conts-s-ttl">一行の文字量は「40文字」ぐらい・・・</h3>
          <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>
        </aside>
      </footer>

  </div>
  <?php include($inc_path.'/inc/side.php') ?>

</article>
</main>

<?php include ($inc_path."/inc/footer.php") ?>
<!-- add scripts -->
<script>console.log("page-script-<?php echo $title ?>");</script>
<!-- //add scripts -->
<?php include ($inc_path."/inc/foot.php") ?>
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
<article>
<header class="main-head wrap">
  <h1 class="main-ttl"><?php echo $title ?></h1>
  <p class="main-description">本テンプレートのレイアウトサンプルです。</p>
</header>
  <dvi id="container">

  <div id="conts">

    <section class="conts-sec">
      <h2 class="conts-s-ttl mt0">New-記事一覧</h2>
      
      <?php include ("inc/list-art.php") ?>

      <?php include ("inc/list-art.php") ?>
      
      <?php include ("inc/list-art.php") ?>
      
      <div class="more"><a href="<?php echo $base_url ?>/readme/list-small.php" class="a-arrow">新着記事をもっと見る</a></div>
    </section>

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
            <li class="conts-footer-prev"><a href="<?php echo $base_url ?>/reame/single.php">SingleType</a></li>
            <li class="conts-footer-next"><a href="<?php echo $base_url ?>/readme/list-small.php">記事一覧（縮小版）タイプ</a></li>
          </ul>
        </nav>
        <aside class="conts-footer-aside">
          <h3 class="conts-m-ttl">おまけ記事</h3>
          <h4 class="conts-s-ttl">一覧ページは悩ましいけど、実はかなり遊べる。</h3>
          <p>一覧ページは、どんなに頑張っても単なる一覧・・・・と思いきや、雑誌のインデックス、おしゃれなカフェのメニュー表・・・そんな捉え方をすれば、かなり遊べるとおもう。</p>
          <p>遊びのポイントは、あえて左側に持ってきたサイドエリア。大きめに扱った画像部分。</p>
        </aside>
      </footer>

  </div>
  <?php include($inc_path.'/inc/side.php') ?>
  </div>
</article>
</main>

<?php include ($inc_path."/inc/footer.php") ?>
<!-- add scripts -->
<script>console.log("page-script-<?php echo $title ?>");</script>
<!-- //add scripts -->
<?php include ($inc_path."/inc/foot.php") ?>
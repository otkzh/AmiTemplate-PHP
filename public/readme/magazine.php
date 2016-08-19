<?php
include ("../function.php");
$title ='マガジンタイプ';
$meta_title = ''.$title.' | '.$sitename.'';
$meta_description = $title.'のページです。'.$description;
$body_class ="magazine-page";
?>
<?php include ($inc_path."/inc/head.php") ?>
<?php include ($inc_path."/inc/header.php") ?>
<div id="pan">
  <ul class="pan-nav wrap" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
    <li><a href="<?php echo $base_url ?>/" itemprop="url"><span itemprop="title">Home</span></a></li>
    <li><a href="<?php echo $base_url ?>/readme/" itemprop="url"><span itemprop="title">Readme：AmiTemplateについて</span></a></li>
    <li><a href="#" itemprop="url" class="pan-thispage"><span itemprop="title"><?php echo $title?></span></a></li>
  </ul>
</div>

<main id="main">
<article>

  <header class="main-head wrap">
    <h1 class="main-ttl"><?php echo $title ?></h1>
    <p class="main-description">本テンプレートのレイアウトサンプルです。</p>
  </header>
<div  id="container">
    <div id="conts">

      <figure class="conts-main-v">
        <img src="<?php echo $base_url ?>/img/dummy/platinum.png" alt="メイン画像">
        <figcaption class="conts-main-v-dates">
          <time pubdate class="conts-main-v-release" datetime="2016-08-17">公開日：2016年8月17月</time>
          <time class="conts-main-v-update" datetime="2016-08-17">更新日：2016年8月18月</time>
        </figcaption>
      </figure>
      
      <section class="conts-sec">
        <h2 class="conts-sec-ttl">最も利用率が高い、マガジンタイプのサンプルです。</h2>
        <p>マガジンタイプがすべてのベースになります。もっとも閲覧されるページとなるため、文字サイズと一行の文字量のバランスをとっています。</p>
        <p>派手さよりも、ユーザーを疲れさせないデザインを心がけたいところです。</p>
        <h3 class="conts-m-ttl">ポイント</h3>
        <ul class="assist list">
           <li>2カラム</li>
          <li>コンテンツエリアの横幅は、文章が見やすいサイズ（1行40文字程度）に設定。</li>
        </ul>
      </section>

      <section class="conts-sec">

        <h2 class="conts-sec-ttl">conts-sec-ttl（contents-section-title）</h2>
        <figure>
          <img src="../img/readme/noimage.png" alt="">
          <figcaption>画像の注釈</figcaption>
        </figure>
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
            <li class="conts-footer-prev"><a href="<?php echo $base_url ?>/readme/">Readme</a></li>
            <li class="conts-footer-next"><a href="<?php echo $base_url ?>/readme/single.php">シングルタイプ</a></li>
          </ul>
        </nav>
        <aside class="conts-footer-aside">
          <h3 class="conts-m-ttl">おまけ</h3>
          
          <p>文字サイズと横幅の関係を、人気サイトを比べながら調べたのですが、おっいいなぁ・・と思うサイトがレスポンシブデザインでないことが多く、結局はトライ＆エラーでで試すこと幾星霜（涙目）。</p>
          <p class="assist warning mb0">マガジンタイプの一行に対する文字量は、今後もちょくちょくと更新する可能性があり。</p>
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
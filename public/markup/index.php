<?php
include ("../function.php");
$title ='Markupについて ';
$meta_title = ''.$title.' | '.$sitename.'';
$meta_description = $title.'のページです。セマンティック＆メンテナンスブルなHTMLマークアップについて説明します。'.$description;
$body_class ="single-page";
?>
<?php include ($inc_path."/inc/head.php") ?>
<?php include ($inc_path."/inc/header.php") ?>
<div id="pan">
  <ul class="pan-nav wrap" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
    <li><a href="<?php echo $base_url ?>/" itemprop="url"><span itemprop="title">Home</span></a></li>
    <li><a href="./" itemprop="url" class="pan-thispage"><span itemprop="title"><?php echo $title?></span></a></li>
  </ul>
</div>

<main id="main">
<article>

  <header class="main-head wrap">
    <h1 class="main-ttl"><?php echo $title ?></h1>
    <p class="main-description">セマンティックでメンテナンスブルなHTMLマークアップ</p>
  </header>

  <div id="container">

    <div id="conts">

      <figure class="conts-main-v">
        <img src="<?php echo $base_url ?>/img/dummy/platinum.png" alt="メイン画像">
        <figcaption class="conts-main-v-dates">
          <time pubdate class="conts-main-v-release" datetime="2016-03-14">公開日：2016年3月14月</time>
          <time class="conts-main-v-update" datetime="2016-08-17">更新日：2016年8月17月</time>
        </figcaption>
      </figure>

      <nav class="conts-sec">
        <h2 class="conts-sec-ttl">目次</h2>
        <p>HTMLのマークアップについて。セマンティック and メンテナンスブルの問題について考える。</p>
        <ul class="list">
          <li><a href="#haikei" data-scroll>背景</a></li>
          <li><a href="#" data-scroll>基本設計</a></li>
          <li><a href="#" data-scroll>セマンティック</a>
            <ul class="list">
              <li><a href="#" data-scroll>HTML5エレメント</a></li>
              <li><a href="#" data-scroll>role属性</a></li>
              <li><a href="#" data-scroll>schema.org</a></li>
            </ul>
          </li>
          <li><a href="#" data-scroll>マークアップとレイアウトの葛藤</a></li>
        </ul>
      </nav>

      <section class="conts-sec" id="haikei">
        <h2 class="conts-sec-ttl">背景</h2>
        <p class="assist warning">更新中</p>
        <p>本テンプレートは<b>孤高の戦士</b>に捧げます。</p>
      </section>

      <section class="conts-sec">
        <h2 class="conts-sec-ttl">基本設計：class/idの命名規則</h2>
        <p class="warning assist">本記述は、メモ段階のもので更新中です。</p>
        <h3 class="conts-m-ttl">利用目的が明確なものは、はじめに利用箇所を示すワードを入れる。</h3>
        <p>aタグ</p>
        <coad>.a-arrow / .bt-point</coad>
        <p>jsで利用</p>
        <coda>.js-xxxxxx or #js-xxxxx</coda>
        <p>conts内で利用</p>
        <coad>.conts-sec-ttl</coad>

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
            <li class="conts-footer-prev"><a href="<?php echo $base_url ?>/">Home</a></li>
            <li class="conts-footer-next"><a href="<?php echo $base_url ?>/speed/">Speed</a></li>
          </ul>
        </nav>
        <aside class="conts-footer-aside">
          <h3 class="conts-m-ttl">おまけ記事</h3>
          <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>
        </aside>
      </footer>
    </div>
  </div>
</article>
</main>

<?php include ($inc_path."/inc/footer.php") ?>
<!-- add scripts -->
<script>console.log("page-script-<?php echo $title ?>");</script>
<!-- //add scripts -->
<?php include ($inc_path."/inc/foot.php") ?>
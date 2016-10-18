<?php
include ("../function.php");
$title ='デバイス/ブラウザ - RESPONSIVE対応 について ';
$meta_title = ''.$title.' | '.$sitename.'';
$meta_description = $title.'のページです。セマンティックなコーディングを心がける。'.$description;
$body_class ="single-page";
?>
<?php include ($inc_path."/inc/head.php") ?>
<?php include ($inc_path."/inc/header.php") ?>

 <header class="main-head wrap">
    <h1 class="main-ttl"><?php echo $title ?></h1>
    <p class="main-description">なぜ、レスポンシブデザインが楽しいのか。</p>
  </header>

<div id="conts">
    <figure class="conts-main-v">
      <img src="<?php echo $base_url ?>/img/dummy/platinum.png" alt="メイン画像">
      <figcaption class="conts-main-v-dates">
        <time pubdate class="conts-main-v-release" datetime="2016-08-17">公開日：2016年8月17月</time>
        <time class="conts-main-v-update" datetime="2016-08-19">更新日：2016年8月19月</time>
      </figcaption>
    </figure>

  <nav class="conts-sec">
    <h2 class="conts-sec-ttl">目次</h2>
    <p>なんで？</p>
    <ul class="list">
      <li><a href="#" data-scroll>背景</a></li>
      <li><a href="#" data-scroll>基本設計</a></li>
      <li><a href="#" data-scroll>各種振り分け方法</a>
        <ul class="list">
          <li><a href="#" data-scroll>ユーザーエージェント</a></li>
          <li><a href="#" data-scroll>サイズ切り替え</a></li>
          <li><a href="#" data-scroll>機能切り替え</a></li>
        </ul>
      </li>
      <li><a href="#" data-scroll>悩ましい。</a></li>
    </ul>
  </nav>

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
          <li class="conts-footer-prev"><a href="<?php echo $base_url ?>/speed/">Speed</a></li>
          <li class="conts-footer-next"><a href="<?php echo $base_url ?>/units/">Units</a></li>
        </ul>
      </nav>
      <aside class="conts-footer-aside">
        <h3 class="conts-m-ttl">おまけ</h3>
        <p>ちょっ、ちょっ、まってよ。レスポンシブデザインって、すべてのブラウザで表示されることじゃないから！完璧なんて無理。ましてや、たまたまクライアントがニッチなデバイス持ってるからそれに対応してくれとか、受ける前に頭使ってよ！</p>
        <p class="assist warning mb0">予算も取らずに対応デバイス増やす依頼をしてくるな。</p>
      </aside>
    </footer>

</div>

<?php include ($inc_path."/inc/footer.php") ?>
<!-- add scripts -->
<script>console.log("page-script-<?php echo $title ?>");</script>
<!-- //add scripts -->
<?php include ($inc_path."/inc/foot.php") ?>
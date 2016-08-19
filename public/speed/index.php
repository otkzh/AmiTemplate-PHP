<?php
include ("../function.php");
$title ='表示SPEEDについて ';
$meta_title = ''.$title.' | '.$sitename.'';
$meta_description = $title.'のページです。'.$description;
$body_class ="single-page";
?>
<?php include ($inc_path."/inc/head.php") ?>
<?php include ($inc_path."/inc/header.php") ?>
<?php include ($inc_path."/inc/pan.php") ?>

<main id="main">
<article>

  <header class="main-head wrap">
    <h1 class="main-ttl"><?php echo $title ?></h1>
    <p class="main-description">表示スピードへの考え方をまとめます。</p>
  </header>

  <div id="container">
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
        <p>スピードが早いことは正義…ってどうゆうこと？なんで必要なの？</p>
        <ul class="list">
          <li><a href="#" data-scroll>スピードについて</a></li>
          <li><a href="#" data-scroll>ボイラープレート</a>
            <ul class="list">
              <li><a href="#" data-scroll>マークアップ</a></li>
              <li><a href="#" data-scroll>.htaccess</a></li>
            </ul>
          </li>
          <li><a href="#" data-scroll>非同期通信</a></li>
          <li><a href="#" data-scroll>PJAX</a></li>
          <li><a href="#" data-scroll>各種管理</a>
            <ul class="list">
              <li><a href="#" data-scroll>HTML/PHP</a></li>
              <li><a href="#" data-scroll>CSS/COMPASS</a></li>
              <li><a href="#" data-scroll>JavaScript</a></li>
            </ul>
          </li>
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
            <li class="conts-footer-prev"><a href="<?php echo $base_url ?>/markup/">Markup</a></li>
            <li class="conts-footer-next"><a href="<?php echo $base_url ?>/responsive/">Responsive</a></li>
          </ul>
        </nav>
        <aside class="conts-footer-aside">
          <h3 class="conts-m-ttl">おまけ</h3>
          <p>純粋な表示数ピードを求めるのは、けっこう辛い。大切なのはユーザーがストレスに感じないこと。そして、実務者が疲弊しないこと。</p>
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
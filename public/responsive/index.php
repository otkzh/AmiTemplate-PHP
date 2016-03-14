<?php
include ("../function.php");
$title ='デバイス/ブラウザ - RESPONSIVE対応 について ';
$meta_title = ''.$title.' | '.$sitename.'';
$meta_description = $title.'のページです。セマンティックなコーディングを心がける。'.$description;
$body_class ="";
?>
<?php include ($inc_path."/inc/head.php") ?>
<?php include ($inc_path."/inc/header.php") ?>
<?php include ($inc_path."/inc/pan.php") ?>

<main id="main">
<article>

  <header class="main-head">
    <time>2016-03-10</time>
    <time>UPDATE：2016-03-10</time>
    <h1 class="main-ttl"><?php echo $title ?></h1>
  </header>

  <div id="conts">

    <nav class="conts-sec wrap">
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
    
    <section class="conts-sec wrap">

      <h2 class="conts-sec-ttl">conts-sec-ttl（contents-section-title）</h2>
      <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>
      <h3 class="conts-l-ttl">conts-l-ttl（contents-large-title）</h3>
      <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>
      <h4 class="conts-m-ttl">conts-m-ttl（contents-middle-title）</h4>
      <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>
      <h5 class="conts-s-ttl">conts-s-ttl（contents-small-title）</h5>
      <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>

    </section>

    <section class="conts-sec wrap">

      <h2 class="conts-sec-ttl">class/idの命名規則メモ</h2>

      <h3 class="conts-l-ttl">基本省略ワード不可、ただし多用するものは省略する。</h3>
      <p>結果、共通部分は、省略なし記述 or id に。main内（コンテンツ要素）は、殆どが省略classになる…はず。</p>

      <h3 class="conts-l-ttl">さらに、ページ内に１度しか出てこないものは、idを利用する。</h3>

      <h3 class="conts-l-ttl">利用目的が明確なものは、はじめに利用箇所を示すワードを入れる。</h3>
      <p>aタグ</p>
      <coad>.a-arrow / .bt-point</coad>
      <p>jsで利用</p>
      <coda>.js-xxxxxx or #js-xxxxx</coda>
      <p>conts内で利用</p>
      <coad>.conts-sec-ttl</coad>

    </section>
    
    <footer class="conts-footer wrap">
      <nav>
        <ul>
          <li class="prev"><a href="#">前</a></li>
          <li class="next"><a href="#">次</a></li>
        </ul>
      </nav>
    </footer>
    
    <aside class="conts-sec wrap">
      <h3 class="conts-sec-ttl">関連しないワード</h3>
      <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>
    </aside>
    
  </div>
  
</article>
</main>

<?php include ($inc_path."/inc/footer.php") ?>
<!-- add scripts -->
<script>console.log("page-script-<?php echo $title ?>");</script>
<!-- //add scripts -->
<?php include ($inc_path."/inc/foot.php") ?>
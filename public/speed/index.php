<?php
include ("../function.php");
$title ='表示SPEEDについて ';
$meta_title = ''.$title.' | '.$sitename.'';
$meta_description = $title.'のページです。'.$description;
$body_class ="";
?>
<?php include ($inc_path."/inc/head.php") ?>
<?php include ($inc_path."/inc/header.php") ?>
<?php include ($inc_path."/inc/pan.php") ?>

<div role="main">
<article>

  <header class="main-head">
    <time>2016-03-00</time>
    <time>UPDATE：2016-03-00</time>
    <h1 class="main-ttl"><?php echo $title ?></h1>
  </header>

  <div id="conts">

    <nav class="conts-sec wrap">
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
</div>

<?php include ($inc_path."/inc/footer.php") ?>
<!-- add scripts -->
<script>console.log("page-script-<?php echo $title ?>");</script>
<!-- //add scripts -->
<?php include ($inc_path."/inc/foot.php") ?>
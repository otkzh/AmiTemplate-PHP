<?php
include 'function.php';
$title = 'トップページ';
$meta_title = ''.$title.' | '.$sitename.'';
$meta_description = 'メタディスクリプション。'.$description;
$body_class = 'home';
?>
<?php include($inc_path.'/inc/head.php') ?>
<?php include($inc_path.'/inc/header.php') ?>
<?php include($inc_path.'/inc/pan.php') ?>
<main class="main-contents wrapper">
<article id="conts">
<header>
<h1 class="main-title"><?php echo $title ?></h1>
<p class="main-description">
<?php echo $meta_description ?>
</p>
</header>
<section>
<h2 class="conts-section-title">セクションごとのタイトル</h1>
    <p>記事内容が入ります。</p>
    <p>記事内容が入ります。</p>
    <p>記事内容が入ります。</p>
    <p>記事内容が入ります。</p>
  </section>

  <aside class="banner">
    <a href="">banner</a>
    <a href="">banner</a>
    <a href="">banner</a>
  </aside>

</article>

<article id="side">

  <header>
    <h3>サイドバー</h3>
  </header>

  <section>
      <h3 class="side-section-title">アサイドタイトル</h1>
      <p>ダミーテキストダミーテキストダミーテキストダミーテキスト</p>
  </section>

  <section>
      <h3 class="side-section-title">アサイドタイトル</h1>
      <p>ダミーテキストダミーテキストダミーテキストダミーテキスト</p>
  </section>

  <aside class="banner">
    <a href="">banner</a>
    <a href="">banner</a>
    <a href="">banner</a>
  </aside>

</article>

</main>

<?php include($inc_path.'/inc/footer.php') ?>
<!-- add scripts -->
<!-- //add scripts -->
<?php include($inc_path.'/inc/foot.php') ?>
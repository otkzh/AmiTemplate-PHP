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
<article id="container" class="wrap">

  <header class="main-head wrap">
    <h1 class="main-ttl"><?php echo $title ?></h1>
    <p class="main-description">本テンプレートのレイアウトサンプルです。</p>
  </header>

  <div id="conts">

    <section class="conts-sec">
      <h2 class="conts-s-ttl">New-記事一覧</h2>
      <article class="conts-art">
        <a href="./">
        <div class="conts-art-img" style="background-image: url(<?php echo $base_url ?>/img/dummy/platinum.png);"></div>
        <div class="conts-art-ex">
          <header>
            <p class="conts-art-category">カテゴリー名</p>
            <p class="conts-art-date">
              <time datetime="2016-08-17">2016年8月17日</time>
            </p>
            <h2 class="conts-art-ttl">ページのタイトルダミーダミーダミーダミーダミーダミーダミーダミー</h2>
          </header>

          <p class="conts-art-text">まことに残念ながら、そのようなプロジェクトに関わる機会（チームメンバーに囲まれる機会）は、極めて稀（まれ）です。環境を求めて転職を繰り返したところで、夢や希望をもって独立したところで、基本的に、ほぼ絶対に、もう泣きたくなるくらいやって来ない現実が・・・</p>
        </div>
      </a>
      </article>

      <article class="conts-art">
        <a href="./">
        <div class="conts-art-img" style="background-image: url(<?php echo $base_url ?>/img/dummy/platinum.png);"></div>
        <div class="conts-art-ex">
          <header>
            <p class="conts-art-category">カテゴリー名</p>
            <p class="conts-art-date">
              <time datetime="2016-08-17">2016年8月17日</time>
            </p>
            <h2 class="conts-art-ttl">ページのタイトルダミーダミーダミーダミーダミーダミーダミーダミー</h2>
          </header>

          <p class="conts-art-text">まことに残念ながら、そのようなプロジェクトに関わる機会（チームメンバーに囲まれる機会）は、極めて稀（まれ）です。環境を求めて転職を繰り返したところで、夢や希望をもって独立したところで、基本的に、ほぼ絶対に、もう泣きたくなるくらいやって来ない現実が・・・</p>
        </div>
      </a>
      </article>

      <article class="conts-art">
        <a href="./">
        <div class="conts-art-img" style="background-image: url(<?php echo $base_url ?>/img/dummy/platinum.png);"></div>
        <div class="conts-art-ex">
          <header>
            <p class="conts-art-category">カテゴリー名</p>
            <p class="conts-art-date">
              <time datetime="2016-08-17">2016年8月17日</time>
            </p>
            <h2 class="conts-art-ttl">ページのタイトルダミーダミーダミーダミーダミーダミーダミーダミー</h2>
          </header>

          <p class="conts-art-text">まことに残念ながら、そのようなプロジェクトに関わる機会（チームメンバーに囲まれる機会）は、極めて稀（まれ）です。環境を求めて転職を繰り返したところで、夢や希望をもって独立したところで、基本的に、ほぼ絶対に、もう泣きたくなるくらいやって来ない現実が・・・</p>
        </div>
      </a>
      </article>
      
      <div class="more"><a href="<?php echo $no_link ?>" class="a-arrow">新着記事をもっと見る</a></div>
    </section>

    <section class="conts-sec">
      <h2 class="conts-sec-ttl">マガジンタイプにはつきものの一覧ページです。</h2>
      <h3 class="conts-m-ttl">ポイント</h3>
      <ul class="assist list">
        <li>2カラム（サイドとの一入れ替え）</li>
        <li>コンテンツエリアの横幅を、広めに設定。</li>
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
        <ul>
          <li class="prev"><a href="#">前</a></li>
          <li class="next"><a href="#">次</a></li>
        </ul>
      </nav>
    </footer>

    <aside class="conts-aside">
      <h3 class="conts-l-ttl">サンプルリンク</h3>

      <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>

      <ul class="assist">
        <li><a href="#">シングルタイプ</a></li>
        <li><a href="magazine.php">マガジンタイプ</a></li>
        <li><a href="#">フリータイプ</a></li>
      </ul>
    </aside>

  </div>
  <?php include($inc_path.'/inc/side.php') ?>

</article>
</main>

<?php include ($inc_path."/inc/footer.php") ?>
<!-- add scripts -->
<script>console.log("page-script-<?php echo $title ?>");</script>
<!-- //add scripts -->
<?php include ($inc_path."/inc/foot.php") ?>
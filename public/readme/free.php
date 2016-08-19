<?php
include ("../function.php");
$title ='フリータイプ';
$meta_title = ''.$title.' | '.$sitename.'';
$meta_description = $title.'のページです。'.$description;
$body_class ="free-page";
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
      <h2 class="conts-sec-ttl">フリータイプです。自由に遊んじゃってください。</h2>
      <h3 class="conts-m-ttl">ポイント</h3>
      <ul class="assist list">
        <li>特にないよ。</li>
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

  </div>

  </div>
</article>
</main>

<?php include ($inc_path."/inc/footer.php") ?>
<!-- add scripts -->
<script>console.log("page-script-<?php echo $title ?>");</script>
<!-- //add scripts -->
<?php include ($inc_path."/inc/foot.php") ?>
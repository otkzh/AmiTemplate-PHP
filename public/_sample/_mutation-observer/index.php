<?php
$pageTtl = "MutationObserverサンプルページ";
include ("../../function.php");
$metaTtl = $pageTtl."-".$siteName;
$metaDesc = $siteDescription;
$body_class ="";
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
  <article class="main__row">

    <header class="main__header main-header">
      <div class="main-header__bg"></div>
      <div class="main-header__row">
        <h1 class="main-header__ttl"><?php echo $pageTtl; ?></h1>
        <p class="main-header__desc"></p>
      </div>
    </header>
    <?php
    $panAry[] = array("/_sample" ,"サンプル集");
    include ($inc_path."/lib/inc/pan.php");
    ?>

    <div class="main__conts conts">

      <section class="conts__item">
        <h3 class="u-ttl_m">1. MutationObserverがつかえるブラウザかどうか確認</h3>
        <p id="caniuse">確認中</p>

        <h3 class="u-ttl_m">2. 動作確認</h3>
        <p>viewportからmargin:-20%に入ったかどうかの判定。</p>

        <div id="caniuse_test">クリック</div>



      </section>

      <section class="conts__item">
        <h2 class="u-ttl_l">よくありそうな動き</h2>
        <p>要素がフェード&スライドイン</p>
        <style>
        .l-column__inner{
          background:#eee;
          box-sizing: border-box;
          padding: 20px;
          text-align: center;
        }

        </style>
        <div class="l-column_3" style="border:1px solid #eee; padding:10px;">
          <div class="l-column__row">
            <div class="l-column__item">
              <article class="l-column__inner js-target">box</article>
            </div>
            <div class="l-column__item">
              <article class="l-column__inner js-target">box</article>
            </div>
            <div class="l-column__item">
              <article class="l-column__inner js-target">box</article>
            </div>
            <div class="l-column__item">
              <article class="l-column__inner js-target">box</article>
            </div>
            <div class="l-column__item">
              <article class="l-column__inner js-target">box</article>
            </div>
            <div class="l-column__item">
              <article class="l-column__inner js-target">box</article>
            </div>
            <div class="l-column__item">
              <article class="l-column__inner js-target">box</article>
            </div>
            <div class="l-column__item">
              <article class="l-column__inner js-target">box</article>
            </div>
            <div class="l-column__item">
              <article class="l-column__inner js-target">box</article>
            </div>
            <div class="l-column__item">
              <article class="l-column__inner js-target">box</article>
            </div>
            <div class="l-column__item">
              <article class="l-column__inner js-target">box</article>
            </div>
            <div class="l-column__item">
              <article class="l-column__inner js-target">box</article>
            </div>
            <div class="l-column__item">
              <article class="l-column__inner js-target">box</article>
            </div>
            <div class="l-column__item">
              <article class="l-column__inner js-target">box</article>
            </div>
            <div class="l-column__item">
              <article class="l-column__inner js-target">box</article>
            </div>
          </div>
        </div>
      </section>

    </div>
  </article>
</main>

<?php  include ($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>

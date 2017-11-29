<?php
$pageTtl = "IntersectionObserverサンプルページ";
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
        <p class="main-header__desc">IntersectionObserverの動作サンプル</p>
      </div>
    </header>
    <?php
    $panAry[] = array("/_sample" ,"サンプル集");
    include ($inc_path."/lib/inc/pan.php");
    ?>

    <div class="main__conts conts">

      <section class="conts__item">
        <h3 class="u-ttl_m">1. IntersectionObserverがつかえるブラウザかどうか確認</h3>
        ↓<br>↓<br>↓<br>↓<br>↓<br>↓<br>↓<br>↓<br>↓<br>↓<br>↓<br>
        <div class="interso-target">target1</div>
        ↑<br>↑<br>↑<br>↑<br>↑<br>↑<br>↑<br>↑<br>↑<br>↑<br>↑<br>
        <div class="interso-target">target2</div>
        <h3 class="u-ttl_m">2. polyfillでつかえるようになったか確認</h3>
        <div id="caniuse_polyfill">クリックしてね</div>
      </section>

      <section class="conts__item">
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </section>

    </div>
  </article>
</main>

<?php  include ($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>

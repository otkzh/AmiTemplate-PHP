<?php
$pageTtl = "カラムレイアウト表示";
include ("../../function.php");
$metaTtl = $pageTtl."-".$siteName;
$metaDesc = $siteDescription;
$body_class ="l-page-free";
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
  <article class="main__row">
    <header class="main__header main-header">
      <div class="main-header__bg"></div>
      <div class="main-header__row">
        <h1 class="main-header__ttl"><?php echo $pageTtl; ?></h1>
        <p class="main-header__desc">body.page-column（右サイドエリア追加）</p>
      </div>
    </header>
    <?php
    $panAry[] = array("/_layout" ,"レイアウト集");
    include ($inc_path."/lib/inc/pan.php");
    ?>

    <div class="main__conts">
      <section class="conts__item">
        <h2 class="u-ttl_l">カラムレイアウト</h2>
        <p>表示サンプル</p>
        <div class="u-assist mb">
          <h4 class="u-ttl_s">scssファイル↓</h4>
          <p>参照：..../_scss/_main/_page-column.scss</p>
        </div>
        <div class="u-assist">
          <h4 class="u-ttl_s">html(php)へ↓</h4>
          <p>.main__conts/.main__sideを追加</p>
        </div>
      </section>
      <section class="conts__item">
        <h2 class="u-ttl_l">テスト</h2>
        <img
        data-src="<?php echo $img_url; ?>/dummy/golden@2x.png"
        alt=""
        class="u-img__max">
      </section>
    </div>

  </article>
</main>

<?php  include ($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>

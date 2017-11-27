<?php
$pageTtl = "サンプル集";
include ("../function.php");
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
        <p class="main-header__desc">AmiTemplateに初めから組み込まれているアレコレ（サンプル）</p>
      </div>
    </header>
    <?php
    include ($inc_path."/lib/inc/pan.php");
    ?>
    <div class="main__conts conts">
      <section class="conts__item">
        <h2 class="u-ttl_l"><a href="./_etc/index.php" class="u-icon__link">未整理サンプルページ</a></h2>
        <p>組み込み済みのJS関連中心</p>
      </section>
      <section class="conts__item">
        <h2 class="u-ttl_l"><a href="./_csv/index.php" class="u-icon__link">CSVサンプルページ</a></h2>
        <p>CSVファイルを読んでVue.jsでページネーション付きリストを表示</p>
      </section>
      <section class="conts__item">
        <h2 class="u-ttl_l"><a href="./_googlemap/index.php" class="u-icon__link">GoogleMapサンプルページ</a></h2>
        <p>埋め込みGoogleMap（APIキーなし・あり版）のサンプル</p>
      </section>
      <section class="conts__item">
        <h2 class="u-ttl_l"><a href="./_drawer/index.php" class="u-icon__link">Drawerサンプルページ</a></h2>
        <p>スムーズなドロワーメニューのサンプル</p>
      </section>
      <section class="conts__item">
        <h2 class="u-ttl_l"><a href="./_pointer-events/index.php" class="u-icon__link">PointerEventsサンプルページ</a></h2>
        <p>pointerEnventsの動作サンプルとmouse/touch/pointerの動作表</p>
      </section>
      <section class="conts__item">
        <h2 class="u-ttl_l"><a href="./_fullpage/index.php" class="u-icon__link">fullpageのサンプルページ</a></h2>
        <p>fullpageのサンプル</p>
      </section>
    </div>
  </article>
</main>

<?php  include ($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>

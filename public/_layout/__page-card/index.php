<?php
$pageTtl = "カラムレイアウト表示";
include ("../../function.php");
$metaTtl = $pageTtl."-".$siteName;
$metaDesc = $siteDescription;
$body_class ="l-page-card";
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

        <div class="u-column_4">
          <div class="u-coloumn__row">
            <div class="u-column__item u-card">card</div>
            <div class="u-column__item u-card">card</div>
            <div class="u-column__item u-card">card</div>
            <div class="u-column__item u-card">card</div>
            <div class="u-column__item u-card">card</div>
            <div class="u-column__item u-card">card</div>
          </div>
        </div>

      </section>
    </div>

  </article>
</main>

<?php  include ($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>

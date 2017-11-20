<?php
$pageTtl = "fullpageのサンプルページ";
include ("../../function.php");
$metaTtl = $pageTtl."-".$siteName;
$metaDesc = $siteDescription;
$body_class ="";
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main" id="fullpage">
  <article class="main__row">

    <div class="main__item">
      <div class="main-header__row">
        <h1 class="main-header__ttl"><?php echo $pageTtl; ?></h1>
        <p class="main-header__desc">fullpage</p>
      </div>
      <div class="u-position__item_center" style="width:250px;">
        <?php
        $panAry[] = array("/_sample" ,"サンプル集");
        include ($inc_path."/lib/inc/pan.php");
        ?>
      </div>
    </div>

    <section class="main__item u-position_center">one</section>
    <section class="main__item u-position_center">two</section>
    <section class="main__item u-position_center">three</section>
    <section class="main__item u-position_center">four</section>

  </article>
</main>

<?php  include ($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>

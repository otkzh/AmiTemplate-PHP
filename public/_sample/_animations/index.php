<?php
$pageTtl = "Animationsサンプルページ";
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
        <p class="main-header__desc">webアニメーション</p>
      </div>
    </header>
    <?php
    $panAry[] = array("/_sample" ,"サンプル集");
    include ($inc_path."/lib/inc/pan.php");
    ?>

    <div class="main__conts conts">

      <style>
      .box{
        display: inline-block;
        background-color: #eee;
        height: 200px;
        width: 200px;
        margin: 8px;
      }
      .box2{
        position: relative;
        background-color: #eee;
        height: 500px;
        width: 500px;
        margin: 8px;
        overflow: hidden;
      }
      </style>

      <div class="box" id="sample-x">
        <div class="dot"></div>
      </div>

			<div class="box" id="sample-y">
        <div class="dot"></div>
      </div>

      <div class="box" id="sample-xy">
        <div class="dot"></div>
      </div>

      <div class="box" id="sample-r">
        <div class="dot"></div>
      </div>

      <div class="box2" id="sample-test">
      </div>

    </div>
  </article>
</main>

<?php  include ($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>

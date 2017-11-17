<?php
$pageTtl = "csvサンプルページ";
include ("../function.php");
$metaTtl = $pageTtl."-".$siteName;
$metaDesc = $siteDescription;
$body_class ="temp csv";
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
  <article class="main__row">

    <header class="main__header main-header">
      <div class="main-header__bg"></div>
      <?php
      $panAry[] = array($base_url ,"パンくず名");
      include ($inc_path."/lib/inc/pan.php");
      ?>
      <h1 class="main-header__ttl"><?php echo $pageTtl; ?></h1>
      <p class="main-header__desc">ディスクリプション</p>
    </header>

    <section class="main__body">
      <header class="main__head">
        <h2 lass="main__ttl">CSV</h2>
      </header>
      <div class="main__body">

				CSV内容出力

        <div id="csv_output">読み込み中</div>

      </div>
      <footer class="main__foot">
        <p>セクションフッター</p>
      </footer>
    </section>

  </article>
</main>

<?php  include ($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>

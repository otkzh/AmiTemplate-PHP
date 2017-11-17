<?php
$pageTtl = "テンプレート集";
include ("../function.php");
$metaTtl = $pageTtl."-".$siteName;
$metaDesc = $siteDescription;
$body_class ="temp sample";
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
  <article class="main__row">

    <header class="main__header main-header">
      <div class="main-header__bg"></div>
      <?php
      include ($inc_path."/lib/inc/pan.php");
      ?>
      <h1 class="main-header__ttl"><?php echo $pageTtl; ?></h1>
      <p class="main-header__desc">AmiTemplateに初めから組み込まれているテンプレート（というかサンプル）</p>
    </header>

    <section class="main-footer__body">
      <h3 class="main-footer__ttl ">
        <a href="./_csv/index.php">csvサンプルページ</a>
      </h3>
      <p>CSVファイルを読み込んで、Vue.jsでページネーション付きリストを表示</p>
    </section>


  </article>
</main>

<?php  include ($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
